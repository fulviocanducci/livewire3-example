<div>
    <form wire:submit="save">
        <input type="text" wire:model.live="form.description">
        <div>
            @error('form.description') <span class="error">{{ $message }}</span> @enderror
        </div>
        <button type="submit">Incluir</button> <a href="/tasks" wire:navigate>Cancelar</a>
    </form>        
</div>
