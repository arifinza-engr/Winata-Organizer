<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $site['seo']['description'] }}"><meta name="theme-color" content="#292724">
    <link rel="canonical" href="{{ $site['seo']['canonical'] }}">
    <meta property="og:type" content="website"><meta property="og:title" content="{{ $site['seo']['title'] }}"><meta property="og:description" content="{{ $site['seo']['description'] }}"><meta property="og:url" content="{{ $site['seo']['canonical'] }}"><meta property="og:image" content="{{ url(config('weddings.images.hero')) }}"><meta name="twitter:card" content="summary_large_image">
    <title>{{ $site['seo']['title'] }}</title>
    <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Ctext y='.9em' font-size='90'%3EW%3C/text%3E%3C/svg%3E">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500;1,600&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @php
        $structuredData = [
            '@context' => 'https://schema.org',
            '@type' => ['LocalBusiness', 'WeddingPlanning'],
            'name' => $site['brand']['name'],
            'description' => $site['seo']['description'],
            'address' => ['@type' => 'PostalAddress', 'addressLocality' => 'Semarang', 'addressRegion' => 'Jawa Tengah', 'addressCountry' => 'ID'],
            'telephone' => '+' . $site['brand']['whatsapp'],
            'url' => $site['seo']['canonical'],
            'sameAs' => [$site['brand']['instagram']],
        ];
    @endphp
    <script type="application/ld+json">{!! json_encode($structuredData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
</head>
<body>
{{ $slot }}
</body>
</html>
