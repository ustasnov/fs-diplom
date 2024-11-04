<div class="flex flex-col">
  <div class="px-6 py-4 text-2xl bg-gray-100 font-bold">
    Новый кинозал
  </div>
  <label for="name" class="mx-6 text-2xl text-gray-800">Наименование:</label>
  <input class="mx-6 px-6" id="name" name="name" type="text"/> 
  <div class="px-6 py-4 bg-gray-100 text-right">
    <button class="text-2xl mx-2" type="submit" x-on:click="show = false">
      Создать
    </button>
    <button class="text-2xl mx-2" type="button" x-on:click="show = false">
      Отмена
    </button>
  </div>
</div>
