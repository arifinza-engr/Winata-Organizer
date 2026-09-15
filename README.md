# Winata Organizer — Website Concept Preview

## Run locally

1. `composer install`
2. `npm install`
3. Copy `.env.example` to `.env` if needed, then run `php artisan key:generate`.
4. Run `npm run dev` and, in another terminal, `php artisan serve`.

For a production asset build: `npm run build`.

## Content replacement

- Brand name, location, email, Instagram, WhatsApp number, canonical URL: `config/site.php`
- Set `DEMO_MODE=false` in `.env` to remove the concept-preview banner and demo messaging.
- Services, portfolio image URLs/captions, testimonials, FAQs, statistics, benefits, and process: `config/weddings.php`
- Replace the sample Unsplash image URLs in that file and the editorial section images in `resources/views/sections/` with licensed final photography before launch.
- The stats and testimonials are explicitly marked as demo data; verify them and use consented client reviews before production.
- Venue marks are textual placeholders only and are not official partnerships.
