<div class="max-w-7xl mx-auto">
    <ul wire:sortable="reorderTasks" class="flex flex-col justify-center items-center">
        @foreach ($tasks as $task)
            <li wire:key="task-{{ $task->id }}" wire:sortable.item="{{ $task->id }}" class="bg-white shadow-lg my-2 w-full flex px-8 py-4">

                @if ($task->id == $editingTaskId)
                    <form wire:submit.prevent="updateTask" class="flex justify-between w-full">
                        <input type="text" wire:model.defer="editingTaskName" class="p-2 text-lg border font-semibold">
                        <div class="flex space-x-2">
                            <button type="submit" class="px-3 py-1 bg-slate-700 rounded text-white">Update</button>
                            <button type="button" wire:click="$set('editingTaskId', null)" class="px-3 py-1 bg-gray-200 rounded">Cancel</button>
                        </div>
                    </form>
                @else
                <h2 class="text-xl font-semibold">{{ $task->name }}</h2>
                <span class="flex-1"></span>
                <div class="flex">
                    <button wire:click="deleteTask({{ $task->id }})" class="bg-red-600 text-white rounded-full p-2">
                   <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M4 7l16 0"></path>
                    <path d="M10 11l0 6"></path>
                    <path d="M14 11l0 6"></path>
                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                    </svg> 
                    </button>
                    <button wire:click="startEditingTask({{ $task->id }})" class="bg-gray-200 rounded-full p-2 ml-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                        <path d="M16 5l3 3"></path>
                        </svg>
                    </button>
                    <span class="p-2 ml-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-grip-vertical" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M9 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                        <path d="M9 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                        <path d="M9 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                        <path d="M15 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                        <path d="M15 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                        <path d="M15 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                        </svg>
                    </span>
                </div>
                @endif

                
            </li>
        @endforeach
    </ul>
</div>
