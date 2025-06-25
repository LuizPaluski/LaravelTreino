<h1>Lista</h1>
<a href="{{route('supports.create')}}">Criar</a>
<table>
    <thead>
    <th>Assunto</th>
    <th hidden>Status</th>
    <th>Descricao</th>
    <th></th>
</thead>

<tbody>
@foreach ($supports->items() as $support)
    <tr>
        <td>{{$support->subject}}</td>
        <td >{{$support->status}}</td>
        <td>{{$support->body}}</td>
        <td>
            <a href="{{route('supports.show', $support->id)}}">Ir</a>
            <a href="{{route('supports.edit', $support->id)}}">Editar</a>
        </td>
    </tr>
@endforeach
</tbody>
</table>


<x-pagination :paginator="$supports"/>

