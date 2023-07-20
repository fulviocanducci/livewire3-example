<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;

class TaskIndex extends Component
{
    public $tasks = [];

    public function mount()
    {
        $this->tasks = Task::all();
    }

    public function render()
    {
        return view('livewire.tasks.task-index');
    }
}
