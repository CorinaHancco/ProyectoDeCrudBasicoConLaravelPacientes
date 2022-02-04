@extends('../layouts/plantilla')
@section('title','Comentarios')
@section('content')
    <h1>Pagina de Comentarios</h1>
    <ul>
        @foreach($coment as $comentario)
        {{$comentario->email}}
        <ul> <a href="{{route('comentarios.show',$comentario)}}">Mas Informacion</a></ul>
        @endforeach
    </ul>

    {{$coment->links()}}
@endsection