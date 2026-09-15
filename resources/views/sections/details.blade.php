<section class="details">
  <div class="details-image"><img src="{{ $weddings['images']['details'] }}" alt="{{ $weddings['images']['details_alt'] }}" loading="eager" decoding="async" fetchpriority="low"></div>
  <div class="details-copy">
    <p class="eyebrow">Peace of mind, beautifully arranged</p>
    <h2 class="reveal-heading">We Handle the Details. <em>You Live the Moment.</em></h2>
    <p>Dari detail kecil sampai koordinasi besar, tim kami berada di belakang layar untuk memastikan hari pernikahan berjalan sesuai rencana.</p>
    <ul>@foreach(['Vendor coordination','Timeline management','Family coordination','Ceremony preparation','Reception flow','Guest management','Emergency handling'] as $detail)<li><i data-lucide="check"></i>{{ $detail }}</li>@endforeach</ul><a class="button button--dark details-cta" href="#contact"><span>Tell us your vision</span><i data-lucide="arrow-up-right" aria-hidden="true"></i></a>
    <div class="details-lottie" data-details-lottie aria-hidden="true"></div>
  </div>
</section>
