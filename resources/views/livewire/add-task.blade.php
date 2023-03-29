<div class="max-w-7xl mx-auto">
    <form wire:submit.prevent="submit" class="flex flex-col">
        <div>
            <input type="text" class=" w-full p-2 text-lg @error('name') is-invalid @enderror" id="name" wire:model="name" placeholder="Enter Task">
            @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <button type="submit" class="ml-auto my-4 text-white px-4 py-2 bg-slate-700 rounded">Add Task</button>
    </form>
</div>
