<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class AddTask extends Component
{
    public $name;

    public function submit()
    {
        $this->validate([
            'name' => 'required|max:255',
        ]);
        $lastTask = Task::orderBy('priority', 'desc')->first();
        $priority = $lastTask ? $lastTask->priority + 1 : 1;

        Task::create([
            'name' => $this->name,
            'priority' => $priority,
        ]);
        
        session()->flash('success', 'Task added successfully.');

        $this->reset();
    }
    public function render()
    {
        return view('livewire.add-task');
    }
}
