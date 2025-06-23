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
@foreach ($supports as $support)
    <tr>
        <td>{{$support['subject']}}</td>
        <td hidden>{{$support['status']}}</td>
        <td>{{$support['body']}}</td>
        <td>
            <a href="{{route('supports.show', $support['id'])}}">Ir</a>
            <a href="{{route('supports.edit', $support['id'])}}">Editar</a>
        </td>
    </tr>
@endforeach
</tbody>
</table>