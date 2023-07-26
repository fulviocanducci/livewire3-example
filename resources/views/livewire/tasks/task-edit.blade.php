<div>
    <h1>Tarefa: modificações</h1>
    <hr/>
    <form wire:submit="save">
        <input type="hidden" wire:model="form.id">
        <div class="form-group mb-2">
            <label for="form-id" class="form-label mb-0">Código: </label>
            <input wire:model.live="form.id" id="form-id" class="form-control form-control-sm" type="text" disabled/>
        </div>
        <div class="form-group mb-2">
            <label for="form-description" class="form-label mb-0">Descrição: </label>
            <input type="text" id="form-description" class="form-control form-control-sm" wire:model.live="form.description" autofocus />        
            <div>
                @error('form.description') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>        
        <div class="mt-2">
            <button type="submit" class="btn btn-sm btn-primary"><i class="bi bi-save2"></i> Alterar</button> 
            <a href="/tasks" class="btn btn-sm btn-danger" wire:navigate><i class="bi bi-x-octagon"></i>  Cancelar</a>
        </div>
        @if (session('message'))
        <div>{{session('message')}}</div>
        @endif
    </form>
</div>