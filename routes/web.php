<?php

use App\Livewire\Home\Index;
use Illuminate\Support\Facades\Route;

use App\Livewire\Tasks\TaskIndex;
use App\Livewire\Tasks\TaskCreate;
use App\Livewire\Tasks\TaskEdit;

Route::get('/', Index::class);
Route::get('/tasks', TaskIndex::class);
Route::get('/task/create', TaskCreate::class);
Route::get('/task/edit/{task}', TaskEdit::class);
