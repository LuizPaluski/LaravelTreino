<h1>Id do suporte {{$support->id}}</h1>

@if ($errors->any())
    @foreach ($errors->all() as $error)
        {{$error}}
    @endforeach
@endif

<form action="{{route('supports.update', $support->id)}}" method="post">
    @method('PUT')
    @include('admin.supports.partials.form')
</form>