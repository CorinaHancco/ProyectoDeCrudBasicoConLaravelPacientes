@extends('../layouts/plantilla')
@section('title','Comentarios')
@section('content')
    <a href="{{route('comentarios.edit',$comentarios->id)}}">Editar el Comentario</a>
    <h1>El Comentario es de: {{$comentarios->email}}</h1><br><br>
    <p>Descripcion: {{$comentarios->descripcion}}</p> <br><br>
    <p>Estado: {{$comentarios->estado}}</p>
    <p>IdPosts: {{$comentarios->idPosts}}</p>
    <form action="{{route('comentarios.destroy',$comentarios->id)}}" method="post">
        @method('delete')
        @csrf
        <button type="submit">Eliminar comentario</button>
    </form>
@endsection