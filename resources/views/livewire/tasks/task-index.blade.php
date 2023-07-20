<div>
    <h1>Lista de Tarefas</h1>
    <div>
        <a href="/task/create" wire:navigate>Nova tarefa</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Descrição</th>
                <th>...</th>
            </tr>
        </thead>
        <tbody>
            @forelse($tasks as $task)
            <tr>
                <td>{{$task->id}}</td>
                <td>{{$task->description}}</td>
                <td>
                    <a href="/task/edit/{{$task->id}}" wire:navigate>Editar</a>
                </td>            
            @empty
                <td colspan="3">Nenhum item</td>
            @endforelse  
            </tr>          
        </tbody>
    </table>
</div>
