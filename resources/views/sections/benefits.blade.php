<section class="section benefits">
  <div class="shell"><x-section-heading eyebrow="Why Winata" title="Why Couples Choose <em>Winata</em>" copy="A considered partnership for the moments that matter most." />
    <div class="benefit-grid">@foreach($weddings['benefits'] as $benefit)<article class="benefit-card fade-up"><span>{{ $benefit['number'] }}</span>
        <h3>{{ $benefit['title'] }}</h3>
        <p>{{ $benefit['description'] }}</p><i data-lucide="arrow-up-right"></i>
      </article>@endforeach</div>
  </div>
</section>