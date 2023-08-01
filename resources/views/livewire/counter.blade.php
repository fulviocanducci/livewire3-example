<?php

use function Livewire\Volt\{state};

state(['count' => 0]);

$increment = fn() => $this->count++;
$decrement = fn() => $this->count--;

?>

<div>
    <div>{{ $count }}</div>
    <button wire:click="increment">+</button><button wire:click="decrement">-</button>
</div>
