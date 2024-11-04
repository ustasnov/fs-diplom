<div class="flex flex-col normal-case">
  <div class="px-6 py-4 text-2xl bg-gray-100 font-bold">
    Подтвердите
  </div>
  <div class="px-6 py-4">
    <p class="text-2xl text-center text-gray-800">Удалить кинозал "{{ $ext}}" ?</p>
  </div>
  <div class="px-6 py-4 bg-gray-100 text-right">
    <button class="text-2xl mx-2" type="submit" x-on:click="show = false">
      Удалить
    </button>
    <button class="text-2xl mx-2" type="button" x-on:click="show = false">
      Отмена
    </button>
  </div>
</div>
