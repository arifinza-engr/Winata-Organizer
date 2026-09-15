<?php

declare(strict_types=1);

use Illuminate\Contracts\Console\Kernel;
use Illuminate\Http\Request;

require __DIR__ . '/../vendor/autoload.php';

/*
 * Netlify serves the generated files only. Laravel is used during the build
 * to render the single landing page into dist/index.html.
 */
if (empty(getenv('APP_KEY'))) {
    $temporaryKey = 'base64:' . base64_encode(random_bytes(32));
    putenv("APP_KEY={$temporaryKey}");
    $_ENV['APP_KEY'] = $temporaryKey;
    $_SERVER['APP_KEY'] = $temporaryKey;
}

// The site configuration already declares this as its public canonical URL.
putenv('APP_URL=https://www.winataorganizer.com');
$_ENV['APP_URL'] = 'https://www.winataorganizer.com';
$_SERVER['APP_URL'] = 'https://www.winataorganizer.com';

$projectRoot = dirname(__DIR__);
$publicDirectory = $projectRoot . '/public';
$outputDirectory = $projectRoot . '/dist';

function removeDirectory(string $directory): void
{
    if (!is_dir($directory)) {
        return;
    }

    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($directory, FilesystemIterator::SKIP_DOTS),
        RecursiveIteratorIterator::CHILD_FIRST,
    );

    foreach ($iterator as $item) {
        $item->isDir() ? rmdir($item->getPathname()) : unlink($item->getPathname());
    }

    rmdir($directory);
}

function copyDirectory(string $source, string $destination): void
{
    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($source, FilesystemIterator::SKIP_DOTS),
        RecursiveIteratorIterator::SELF_FIRST,
    );

    foreach ($iterator as $item) {
        $relativePath = substr($item->getPathname(), strlen($source) + 1);

        if (in_array($relativePath, ['index.php', '.htaccess', 'hot'], true)) {
            continue;
        }

        $target = $destination . DIRECTORY_SEPARATOR . $relativePath;

        if ($item->isDir()) {
            if (!is_dir($target)) {
                mkdir($target, 0777, true);
            }

            continue;
        }

        $targetDirectory = dirname($target);
        if (!is_dir($targetDirectory)) {
            mkdir($targetDirectory, 0777, true);
        }

        copy($item->getPathname(), $target);
    }
}

removeDirectory($outputDirectory);
mkdir($outputDirectory, 0777, true);
copyDirectory($publicDirectory, $outputDirectory);

// A local Vite dev session leaves public/hot behind. Temporarily hide that
// marker so Laravel resolves assets from the production build manifest.
$hotFile = $publicDirectory . '/hot';
$hotContents = is_file($hotFile) ? file_get_contents($hotFile) : null;
if ($hotContents !== null) {
    unlink($hotFile);
}

try {
    $app = require $projectRoot . '/bootstrap/app.php';
    $app->make(Kernel::class)->bootstrap();
    config(['app.url' => '']);

    $response = $app->handle(Request::create('/', 'GET'));
    if ($response->getStatusCode() >= 400) {
        throw new RuntimeException("Unable to render the home page (HTTP {$response->getStatusCode()}).");
    }

    $html = str_replace('http://localhost/', '/', $response->getContent());
    file_put_contents($outputDirectory . '/index.html', $html);
} finally {
    if ($hotContents !== null) {
        file_put_contents($hotFile, $hotContents);
    }
}

fwrite(STDOUT, "Static site exported to dist/\n");
