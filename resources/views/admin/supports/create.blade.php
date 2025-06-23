<h1>Novo Suporte</h1>

@if ($errors->any())
    @foreach ($errors->all() as $error)
        {{$error}}
    @endforeach
@endif

<form action="{{route('supports.store')}}" method="post">
    @include('admin.supports.partials.form')
</form>