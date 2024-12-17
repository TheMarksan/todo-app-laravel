<div class="flex flex-line flex-col gap-y-2">
    <input type="text" class="w-full p-2 border-solid border-2 border-indigo-600 rounded-md" placeholder="Nova tarefa" wire:model="task">
    <button class="w-full p-2 mt-2 bg-indigo-600 text-white rounded-md" wire:click="addTask">Adicionar</button>
</div>
