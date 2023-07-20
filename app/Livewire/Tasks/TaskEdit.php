<?php

namespace App\Livewire\Tasks;

use App\Livewire\Forms\TaskForm;
use App\Models\Task;
use Livewire\Component;

class TaskEdit extends Component
{
    public TaskForm $form;
    
    public function mount(Task $task)
    {
        $this->form->load($task);     
    }

    public function save()
    {
        $this->form->update();

        return $this->redirect('/tasks', navigate: true);
    }
    
    public function render()
    {
        return view('livewire.tasks.task-edit');
    }
}
