

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>Document</title> --}}
    @vite('resources/css/app.css')

</head>
<body>
    <header class="flex items-center justify-center sm:sticky top-0 z-50 bg-white shadow-sm">
      <nav class="w-1/2 flex justify-between items-center p-5 m-1">
        <h1 class="text-3xl font-bold italic text-indigo-600">
            Todo-Dois
        </h1>
        <form action="{{ route('logout') }}" method="post">
          @method('DELETE')
          @csrf
          <button class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" type="submit">
              Logout
          </button>
        </form>
      </nav>
    </header>

    <main class="mt-6 space-y-6 sm:mt-8 sm:space-y-8 flex flex-col gap-y-6 sm:gap-y-0 sm:flex-row sm:gap-x-6 sm:gap-y-6 sm:space-y-0 sm:divide-x sm:divide-gray-100 sm:divide-y-0 sm:divide-x-0 items-center justify-center">

       @dump($tasks)
      <ul role="list" class="divide-y divide-gray-100 p-5">
        <x-task title="Tarefa X" description="Descrição tal" deadline="14 de Dezembro" posted="13 de Dezembro" />
      </ul>

    </main>

    <footer>

    </footer>

</body>
</html>
