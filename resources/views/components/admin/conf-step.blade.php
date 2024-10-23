@props(['title'])

<section class="conf-step">
    <header class="conf-step__header conf-step__header_opened">
        <h2 class="conf-step__title">{{ $title }}</h2>
    </header>
    <div class="conf-step__wrapper">
        {{ $slot }}
    </div>
</section>
