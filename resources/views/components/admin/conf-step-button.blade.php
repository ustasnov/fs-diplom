@props(['type', 'title' => '', 'command', 'method', 'data_id'])

<form class="conf-step-buttom__form" action={{ route($command, ['id' => $data_id]) }} method={{$method}}>
    @csrf
    @if ($type === 'trash')
        @method('DELETE')
    @endif
    <button type="submit" class="conf-step__button conf-step__button-{{ $type }}">{{ $title }}</button>
</form>
