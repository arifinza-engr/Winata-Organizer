<x-layouts.app :site="$site">
    @include('sections.navigation')
    <main>
        @include('sections.hero')
        @include('sections.social-proof')
        @include('sections.introduction')
        @include('sections.benefits')
        @include('sections.services')
        @include('sections.portfolio')
        @include('sections.journey')
        @include('sections.testimonials')
        @include('sections.details')
        @include('sections.venues')
        @include('sections.faq')
        @include('sections.conversion')
        @include('sections.contact')
    </main>
    @include('sections.footer')
    <a class="whatsapp-float" href="https://wa.me/{{ $site['brand']['whatsapp'] }}?text={{ urlencode('Halo Winata Organizer, saya ingin berkonsultasi tentang pernikahan saya.') }}" target="_blank" rel="noopener" aria-label="Konsultasi via WhatsApp">
        <i data-lucide="message-circle"></i><span>WhatsApp</span>
    </a>
    <dialog class="lightbox" aria-label="Portfolio image viewer">
        <button class="lightbox-close" aria-label="Tutup galeri"><i data-lucide="x"></i></button>
        <figure><img src="" alt=""><figcaption></figcaption></figure>
    </dialog>
    <div class="toast" role="status" aria-live="polite"><i data-lucide="check"></i><span>Terima kasih. Untuk demo ini, silakan lanjutkan konsultasi melalui WhatsApp.</span></div>
</x-layouts.app>
