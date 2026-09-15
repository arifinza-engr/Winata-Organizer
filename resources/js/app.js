import './bootstrap';
import { createIcons, ArrowUpRight, ArrowDown, ArrowLeft, ArrowRight, BadgeCheck, HeartHandshake, Sparkles, Plus, X, Check, MessageCircle, Instagram, MapPin, Clock3 } from 'lucide';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

createIcons({ icons: { ArrowUpRight, ArrowDown, ArrowLeft, ArrowRight, BadgeCheck, HeartHandshake, Sparkles, Plus, X, Check, MessageCircle, Instagram, MapPin, Clock3 } });
const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

// The desktop-only rings ornament preserves the existing tablet/mobile layout.
const detailsLottie = document.querySelector('[data-details-lottie]');
const desktopDetails = window.matchMedia('(min-width: 901px)');
let detailsAnimation;
const mountDetailsLottie = async () => {
    if (!detailsLottie || !desktopDetails.matches || detailsAnimation) return;

    try {
        const { default: lottie } = await import('lottie-web');
        if (!desktopDetails.matches || detailsAnimation) return;

        if (detailsLottie && !detailsAnimation) {
            detailsAnimation = lottie.loadAnimation({
                container: detailsLottie,
                renderer: 'svg',
                loop: !reduceMotion,
                autoplay: !reduceMotion,
                path: '/animations/wedding-rings.json',
                rendererSettings: { preserveAspectRatio: 'xMidYMid meet' },
            });
        }

        if (reduceMotion) {
            detailsAnimation?.addEventListener('DOMLoaded', () => detailsAnimation?.goToAndStop(0, true));
        }
    } catch {
        // The ornament is decorative; keep the content usable if it cannot load.
        if (detailsLottie) detailsLottie.hidden = true;
    }
};
const unmountDetailsLottie = () => {
    detailsAnimation?.destroy();
    detailsAnimation = undefined;
    detailsLottie?.replaceChildren();
};
desktopDetails.addEventListener('change', (event) => {
    if (event.matches) mountDetailsLottie();
    else unmountDetailsLottie();
});
mountDetailsLottie();
const header = document.querySelector('[data-header]');
const updateHeader = () => header?.classList.toggle('is-scrolled', window.scrollY > 40);
updateHeader(); window.addEventListener('scroll', updateHeader, { passive: true });
const toggle = document.querySelector('[data-menu-toggle]'), mobileMenu = document.querySelector('[data-mobile-menu]');
toggle?.addEventListener('click', () => { const open = mobileMenu.classList.toggle('open'); toggle.setAttribute('aria-expanded', open); });
mobileMenu?.querySelectorAll('a').forEach((link) => link.addEventListener('click', () => { mobileMenu.classList.remove('open'); toggle?.setAttribute('aria-expanded', 'false'); }));

const navLinks = [...document.querySelectorAll('[data-nav-link]')];
const navSections = [...new Map(navLinks.map((link) => [link.hash, document.querySelector(link.hash)]))]
    .filter(([, section]) => section)
    .map(([hash, section]) => ({ hash, section }));
const setActiveNavLink = (hash) => {
    navLinks.forEach((link) => {
        const isActive = link.hash === hash;
        link.classList.toggle('is-active', isActive);
        link.toggleAttribute('aria-current', isActive);
        if (isActive) link.setAttribute('aria-current', 'location');
    });
};

if (navSections.length) {
    const validHash = (hash) => navSections.some((item) => item.hash === hash);
    setActiveNavLink(validHash(window.location.hash) ? window.location.hash : '#home');

    let sectionObserver;
    const observeNavigationSections = () => {
        sectionObserver?.disconnect();
        const headerHeight = header?.getBoundingClientRect().height ?? 0;
        sectionObserver = new IntersectionObserver((entries) => {
            const visibleEntries = entries.filter((entry) => entry.isIntersecting);
            if (!visibleEntries.length) return;

            visibleEntries.sort((a, b) => Math.abs(a.boundingClientRect.top - headerHeight) - Math.abs(b.boundingClientRect.top - headerHeight));
            setActiveNavLink(`#${visibleEntries[0].target.id}`);
        }, {
            rootMargin: `-${headerHeight}px 0px -55% 0px`,
            threshold: 0,
        });
        navSections.forEach(({ section }) => sectionObserver.observe(section));
    };

    observeNavigationSections();
    window.addEventListener('hashchange', () => {
        if (validHash(window.location.hash)) setActiveNavLink(window.location.hash);
    });
    navLinks.forEach((link) => link.addEventListener('click', () => setActiveNavLink(link.hash)));
    window.addEventListener('resize', observeNavigationSections, { passive: true });
}
const dialog = document.querySelector('.lightbox');
document.querySelectorAll('[data-lightbox]').forEach((item) => item.addEventListener('click', () => { const image = dialog.querySelector('img'); image.src = item.dataset.src; image.alt = item.dataset.alt; dialog.querySelector('figcaption').textContent = item.dataset.alt; dialog.showModal(); }));
dialog?.querySelector('.lightbox-close')?.addEventListener('click', () => dialog.close()); dialog?.addEventListener('click', (event) => { if (event.target === dialog) dialog.close(); });
const track = document.querySelector('[data-carousel]');
document.querySelector('[data-carousel-prev]')?.addEventListener('click', () => track?.scrollBy({ left: -420, behavior: 'smooth' })); document.querySelector('[data-carousel-next]')?.addEventListener('click', () => track?.scrollBy({ left: 420, behavior: 'smooth' }));
document.querySelector('[data-show-portfolio]')?.addEventListener('click', (event) => { document.querySelectorAll('.portfolio-item.is-extra').forEach((item) => item.classList.add('is-visible')); event.currentTarget.textContent = 'All Weddings Shown'; event.currentTarget.disabled = true; });
document.querySelector('[data-consultation-form]')?.addEventListener('submit', (event) => { event.preventDefault(); const form = event.currentTarget, name = new FormData(form).get('name') || 'calon pengantin', toast = document.querySelector('.toast'); toast.classList.add('show'); setTimeout(() => { window.open(`https://wa.me/${form.dataset.whatsapp}?text=${encodeURIComponent(`Halo Winata Organizer, saya ${name} ingin berkonsultasi tentang pernikahan saya.`)}`, '_blank', 'noopener'); toast.classList.remove('show'); }, 1350); });
if (!reduceMotion) {
    try {
        gsap.registerPlugin(ScrollTrigger);
        gsap.timeline({ defaults: { ease: 'power3.out' } })
            .to('.hero-image', { scale: 1, duration: 2.4 })
            .from('.hero-item', { y: 28, opacity: 0, stagger: .14, duration: 1 }, '-=1.6')
            .from('.hero-trust li', { y: 12, opacity: 0, stagger: .1, duration: .6 }, '-=.5');
        gsap.utils.toArray('.fade-up, .section-heading, .details-copy').forEach((element) => gsap.from(element, { y: 36, opacity: 0, duration: .8, ease: 'power2.out', scrollTrigger: { trigger: element, start: 'top 86%', once: true } }));
        gsap.utils.toArray('.portfolio-item').forEach((element, index) => gsap.from(element, { clipPath: 'inset(0 0 100% 0)', duration: .9, delay: index * .05, ease: 'power3.out', scrollTrigger: { trigger: '.portfolio-grid', start: 'top 75%', once: true } }));
        gsap.to('.intro-small', { yPercent: -12, ease: 'none', scrollTrigger: { trigger: '.intro', start: 'top bottom', end: 'bottom top', scrub: .7 } });
        document.querySelectorAll('[data-counter]').forEach((counter) => {
            const target = Number(counter.dataset.counter), state = { value: 0 };
            ScrollTrigger.create({ trigger: counter, start: 'top 85%', once: true, onEnter: () => gsap.to(state, { value: target, duration: 1.5, ease: 'power2.out', onUpdate: () => { counter.textContent = `${target % 1 ? state.value.toFixed(1) : Math.ceil(state.value)}${counter.dataset.suffix}`; } }) });
        });
        document.documentElement.classList.add('motion-initialized');
    } catch {
        gsap.set('.hero-image, .hero-item, .hero-trust li, .fade-up, .section-heading, .details-copy, .portfolio-item, .intro-small', { clearProps: 'all' });
        document.documentElement.classList.remove('motion-initialized');
    }
}
