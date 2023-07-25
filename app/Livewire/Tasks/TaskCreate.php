<?php

namespace App\Livewire\Tasks;

use App\Livewire\Forms\TaskForm;
use Livewire\Component;

class TaskCreate extends Component
{
    public TaskForm $form;

    public function render()
    {        
        return view('livewire.tasks.task-create');
    }

    public function save()
    {
        $this->form->save();        

        return $this->redirect("/task/edit/{$this->form->id}", navigate: true);
    }
}
