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

        session()->flash('message', 'Alterado com sucesso.');

        return $this->redirect("/task/edit/{$this->form->id}", navigate: true);
    }
    
    public function render()
    {
        return view('livewire.tasks.task-edit');
    }
}
