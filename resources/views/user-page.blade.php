

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

    <main class="h-full mt-6 space-y-6 flex flex-col gap-y-6 sm:gap-y-0  sm:gap-x-6 sm:space-y-0 sm:divide-x sm:divide-gray-100 sm:divide-y-0 sm:divide-x-0 items-center justify-center">

        {{ $errors->any() ? $errors : '' }}

        <form action="{{ route('create_tasks') }}" method="POST" class="flex flex-line gap-y-2 w-1/2 pb-5">
            @csrf
            @method('POST')
            <input name="title" type="text" class="w-full p-2 border-solid border-2 border-indigo-600 rounded-md" placeholder="Nova tarefa" wire:model="task">
            <button type="submit" class="flex items-center justify-center ml-2 w-1/6 p-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-500" wire:click="addTask">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                  </svg>

            </button>
        </form>

       {{-- @dump($tasks) --}}
      <ul class=" w-3/4"  role="list" class="divide-y divide-gray-100 p-5">
        @foreach ( $tasks as $task )
          <x-task
            id="{{ $task->id }}"
            title="{{ $task->title }}"
            isDone="{{ $task->isDone }}"
        />

        @endforeach

      </ul>

    </main>

    <footer>

    </footer>

</body>
</html>
