<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;
use Livewire\WithPagination;

class TaskIndex extends Component
{
    use WithPagination;
    
    public function render()
    {
        return view('livewire.tasks.task-index', 
            [
                'tasks' => Task::paginate()
            ]
        );
    }
}
