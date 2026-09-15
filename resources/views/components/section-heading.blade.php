@props(['eyebrow' => null, 'title', 'copy' => null, 'center' => false])
<div {{ $attributes->class(['section-heading', 'section-heading--center' => $center]) }}>
    @if($eyebrow)<p class="eyebrow">{{ $eyebrow }}</p>@endif
    <h2 class="reveal-heading">{!! $title !!}</h2>
    @if($copy)<p class="section-copy">{{ $copy }}</p>@endif
</div>
