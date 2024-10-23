@props(['paragraph'])

<div class="conf-step__wrapper">
    <p class="conf-step__paragraph">{{ $paragraph }}</p>
    {{ $slot }}
</div>
