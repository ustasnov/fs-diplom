@props(['type', 'title' => '', 'command', 'method', 'data_id'])

<form name="modform" method={{ $method }} action={{ route($command, ['id' => $data_id]) }}>
  <button type="submit" class="conf-step__button conf-step__button-{{ $type }}">{{ $title }}</button>
</form>
