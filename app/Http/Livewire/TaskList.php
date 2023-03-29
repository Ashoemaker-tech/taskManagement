<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;
use Illuminate\Support\Facades\Http;

class TaskList extends Component
{
    public $tasks;
    public $editingTaskId;
    public $editingTaskName;

    public function mount()
    {
        $this->tasks = Task::orderBy('priority')->get();
    }

    public function deleteTask($taskId)
    {
        Task::find($taskId)->delete();

        session()->flash('success', 'Task deleted successfully.');

        $this->tasks = Task::orderBy('priority')->get();
    }

     public function startEditingTask($taskId)
    {
        $this->editingTaskId = $taskId;
        $this->editingTaskName = Task::find($taskId)->name;
    }

    public function updateTask()
    {
        $task = Task::find($this->editingTaskId);
        $task->name = $this->editingTaskName;
        $task->save();

        session()->flash('success', 'Task updated successfully.');

        $this->editingTaskId = null;
        $this->editingTaskName = null;
        $this->tasks = Task::orderBy('priority')->get();
    }

    public function reorderTasks($taskOrder)
    {
       foreach($taskOrder as $item) {
        Task::find($item['value'])->update(['priority' => $item['order']]);
       } 

        $this->tasks = Task::orderBy('priority')->get();
    }

    public function render()
    {
        return view('livewire.task-list');
    }
}
