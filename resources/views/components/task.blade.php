@props([
    'id'=> '',
    'title' => '',
    'isDone' => false
])


<li class="group mb-3 relative flex justify-between gap-x-6 p-5 border-solid border-2 border-indigo-600 rounded-md
    @if ($isDone)
        bg-indigo-100
    @endif

hover:bg-indigo-100">


    <div class="flex min-w-0 gap-x-4">
      <div class="flex justify-center items-center bg-indigo-600 rounded-md size-7">
        <svg class="w-5 stroke-white stroke-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
        </svg>

      </div>
      <div class="min-w-0 flex-auto">
        <p class="text-sm/6 font-semibold text-gray-900
        @if ($isDone)
            line-through
        @endif
        ">{{ $title }}</p>

        {{-- <p class="mt-1 truncate text-xs/5 text-gray-500">Descrição tal</p> --}}
      </div>
    </div>
    <div class="w-1/5 flex flex-line justify-between pr-4">
        <form action="{{ route('task_isDone', $id) }}" method="post" class="flex items-center justify-center pr-2">
            @csrf
            @method('PATCH')
            @if (!$isDone)
                <button type="submit">
                    <svg class="size-6 fill-indigo-600 stroke-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="none" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </button>
            @else
                <button type="submit">
                    <svg class="size-6 fill-indigo-600 stroke-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </button>
            @endif



        </form>

        <form action={{ route('delete_task', $id) }} method="post" class="hidden shrink-0 sm:flex sm:flex-line sm:items-end">
            @csrf
            @method('DELETE')

            <button type="submit">
                <svg class="size-6 stroke-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="indigo" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                </svg>
            </button>




        {{-- <p class="text-sm/6 text-gray-900">Until 14 de Dezembo</p> --}}
        {{-- <p class="mt-1 text-xs/5 text-gray-500">Postado dia 13 de Dezembro <time datetime="2023-01-23T13:23Z">3h ago</time></p> --}}
        </form>

    </div>


    @if ($isDone)
        <div class="w-2/3 overflow-hidden absolute inset-0 flex items-center justify-end text-white text-7xl font-bold opacity-25">
            <h1>isDone</h1>
        </div>
    @endif


</li>
