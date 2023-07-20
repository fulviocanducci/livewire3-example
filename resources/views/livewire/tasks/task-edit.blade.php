<div>
    <form wire:submit="save">
        <input type="hidden" wire:model="form.id">
        <input type="text" wire:model="form.description">
        <div>
            @error('description') <span class="error">{{ $message }}</span> @enderror
        </div>
        <button type="submit">Alterar</button> <a href="/tasks" wire:navigate>Cancelar</a>
    </form>
</div>