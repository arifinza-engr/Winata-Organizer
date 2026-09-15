<header class="site-header" data-header>
    <nav class="nav shell" aria-label="Navigasi utama">
        <x-brand-mark />
        <div class="nav-links" data-menu>
            @foreach(['Home' => 'home', 'About' => 'about', 'Services' => 'services', 'Portfolio' => 'portfolio', 'Testimonials' => 'testimonials', 'FAQ' => 'faq', 'Contact' => 'contact'] as $label => $id)<a href="#{{ $id }}" data-nav-link{{ $id === 'home' ? ' class=is-active aria-current=location' : '' }}>{{ $label }}</a>@endforeach
        </div>
        <a class="button button--nav" href="https://wa.me/{{ $site['brand']['whatsapp'] }}?text={{ urlencode('Halo Winata Organizer, saya ingin berkonsultasi tentang pernikahan saya.') }}" target="_blank" rel="noopener">Konsultasi Sekarang <i data-lucide="arrow-up-right"></i></a>
        <button class="menu-button" type="button" data-menu-toggle aria-expanded="false" aria-controls="mobile-menu"><span></span><span></span><span></span><span class="sr-only">Buka menu</span></button>
    </nav>
    <div id="mobile-menu" class="mobile-menu" data-mobile-menu>
        @foreach(['Home' => 'home', 'About' => 'about', 'Services' => 'services', 'Portfolio' => 'portfolio', 'Testimonials' => 'testimonials', 'FAQ' => 'faq', 'Contact' => 'contact'] as $label => $id)<a href="#{{ $id }}" data-nav-link{{ $id === 'home' ? ' class=is-active aria-current=location' : '' }}>{{ $label }}</a>@endforeach
        <a class="button" href="https://wa.me/{{ $site['brand']['whatsapp'] }}" target="_blank" rel="noopener">Konsultasi Sekarang</a>
    </div>
</header>
