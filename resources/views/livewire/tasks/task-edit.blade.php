<div>
    <form wire:submit="save">
        <input type="hidden" wire:model="form.id">
        <div>
            Id: {{$form !== null ? $form->id: 0}} 
        </div>
        <input type="text" wire:model.live="form.description">        
        <div>
            @error('form.description') <span class="error">{{ $message }}</span> @enderror
        </div>
        <button type="submit">Alterar</button> <a href="/tasks" wire:navigate>Cancelar</a>
    </form>
</div>