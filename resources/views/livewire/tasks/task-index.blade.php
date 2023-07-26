<div>
    <h1>Lista de Tarefas</h1>
    <div class="d-flex justify-content-center mb-2 mt-1">
        <a href="/task/create" class="btn btn-success btn-sm" wire:navigate>
            <i class="bi bi-plus-circle"></i> Novo
        </a>
    </div>
    <div class="table-responsive">
        <table class="table table-sm table-hover table-bordered">
            <thead>
                <tr class="table-primary">
                    <th class="text-center" scope="col">Id</th>
                    <th class="text-center" scope="col">Descrição</th>
                    <th class="text-center" scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                @forelse($tasks as $task)
                <tr>
                    <td class="text-center">{{$task->id}}</td>
                    <td class="text-start text-truncate">
                        <div class="text-truncate">
                            {{$task->description}}
                        </div>
                    </td>
                    <td class="text-center">
                        <a href="/task/edit/{{$task->id}}" class="btn btn-primary btn-sm" wire:navigate>
                            <i class="bi bi-pen"></i>
                        </a>
                    </td>            
                @empty
                    <td colspan="3" class="text-center">Nenhum item</td>
                @endforelse  
                </tr>                      
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">
                        <div  class="d-flex justify-content-center mt-3">
                            {{ $tasks->links('vendor.livewire.bootstrap') }}
                        </div>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
