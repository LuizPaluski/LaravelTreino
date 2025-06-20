<h1>Id do suporte {{$support->id}}</h1>

<form action="{{route('supports.update', $support->id)}}" method="post">
    @csrf
    <input type="text" value="PUT" name="_method" hidden>
    <input type="text" placeholder="Assunto" name="subject" value="{{$support->subject}}" required>
    <textarea name="body" cols="30" rows="5" placeholder="descricao" >{{$support->body}}</textarea>
    <button type="submit">Enviar</button>
</form>