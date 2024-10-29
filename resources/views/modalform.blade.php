<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ИдёмВКино</title>
  <link
    href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&amp;subset=cyrillic,cyrillic-ext,latin-ext"
    rel="stylesheet">
  
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  @vite(['resources/css/app.css','resources/js/app.js','resources/css/admin/normalize.css','resources/css/admin/styles.css'])
</head>

<body>

  <div class="flex justify-center items-center mt-10" x-data="{showModal: false}">
    <button class="conf-step__button conf-step__button-accent" x-on:click="$dispatch('open-modal', 'trash')">Click me to open modal</button>

    <x-modal name="trash">
      <form class="flex flex-col" action="#">
        @csrf
        <div class="px-6 py-4 text-2xl bg-gray-100 font-bold">
          Подтвердите
        </div>
        <div class="px-6 py-4">
          <p class="text-2xl text-center text-gray-800">Удалить кинозал?</p>
        </div>
        <div class="px-6 py-4 bg-gray-100 text-right">
          <button class="text-2xl mx-2" type="submit" x-on:click="$dispatch('close-modal', 'trash')">
            Удалить
          </button>
          <button class="text-2xl mx-2" type="button" x-on:click="$dispatch('close-modal', 'trash')">
            Отмена
          </button>
        </div>
      </form>
    </x-modal>
  </div>

</body>

</html>