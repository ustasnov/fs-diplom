@props([
  'type', 
  'action' => '', 
  'title' => '', 
  'command', 
  'method', 
  'data_id', 
  'content',
  'ext'=> '',
])

<div x-data="{showModal: false, act: {{ $action }}">
  <button class="conf-step__button conf-step__button-{{ $type }}" @click="$dispatch('open-modal', '{{ $action }}')">{{ $title }}</button>

  <form class="flex flex-col" method="{{ $method }}" action="{{ route($command, $data_id )}}">
    @csrf
    @if($type === 'trash')
      @method('DELETE')
    @endif
    <x-modal name="{{ $action }}" :content=$content :ext=$ext>
      @include($content, ['ext' => $ext])  
    </x-modal>
  </form>
</div>
