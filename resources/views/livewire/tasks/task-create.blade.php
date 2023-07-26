<div>
    <h1>Tarefa: Novo</h1>
    <hr/>
    <form wire:submit="save">
        <div class="form-group mb-2">
            <label for="form-id" class="form-label mb-0">Código: </label>
            <input id="form-id" value="0" class="form-control form-control-sm" type="text" disabled/>
        </div>
        <div class="form-group mb-2">
            <label for="form-description" class="form-label mb-0">Descrição: </label>
            <input type="text" id="form-description" class="form-control form-control-sm @(error('form.description') ? ' is-invalid' :' is-valid')" wire:model.live="form.description" autofocus>
            <div>
                @error('form.description') <span class="is-invalid text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="mt-2">
            <button type="submit" class="btn btn-sm btn-primary"><i class="bi bi-hdd-rack"></i> Incluir</button> 
            <a href="/tasks" class="btn btn-sm btn-danger" wire:navigate><i class="bi bi-x-octagon"></i> Cancelar</a>
        </div>
    </form>        
</div>
