<?php

namespace App\Livewire\Forms;

use App\Models\Task;
use Livewire\Attributes\Rule;
use Livewire\Form;

class TaskForm extends Form
{    
    public $id;

    #[Rule('required|min:3')]    
    public $description;

    public function load(Task $task)
    {
        $this->id = $task->id;
        $this->description = $task->description;
    }

    public function save()
    {
        $this->validate();
        $model = Task::create($this->all());
        if ($model !== null){
            $this->load($model);
        }
    }

    public function update()
    {
        $this->validate();
        Task::where('id', $this->id)->update(
            [
                'description' => $this->description
            ]
        );
    }
}