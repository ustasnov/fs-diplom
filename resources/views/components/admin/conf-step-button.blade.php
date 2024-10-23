@props(['type', 'title' => '', 'command', 'data_id'])

<form class="conf-step-buttom__form" action={{ route('hall.destroy', ['id' => $data_id]) }} method="POST">
    @csrf
    @if ($type === 'trash')
        @method('DELETE')
    @endif
    <button type="submit" class="conf-step__button conf-step__button-{{ $type }}">{{ $title }}</button>
</form>
