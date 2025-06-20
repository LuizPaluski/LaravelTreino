<h1>Novo Suporte</h1>

<form action="{{route('supports.store')}}" method="post">
    @csrf
    <input type="text" placeholder="Assunto" name="subject" value="">
    <textarea name="body" cols="30" rows="5" placeholder="descricao" ></textarea>
    <button type="submit">Enviar</button>
</form>