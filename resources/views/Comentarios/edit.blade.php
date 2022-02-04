@extends('../layouts/plantilla')
@section('title','Comentarios Create')

@section('content')
<h1>Formulario para editar comentario de {{$comentarios->email}}</h1>
    <form action="{{route('comentarios.update',$comentarios)}}" method="post">
        @csrf
        @method('PUT')
        <label for="">
            Email <br>
            <input type="text" name="email" value="{{old('email',$comentarios->email)}}">
        </label> <br>
        @error('email')
            <p><strong>{{$message}}</strong></p>
        @enderror
        <label for="">
            Descripcion <br>
            <input type="text" name="descripcion" value="{{old('descripcion',$comentarios->descripcion)}}">
        </label><br>
        @error('descripcion')
            <p><strong>{{$message}}</strong></p>
        @enderror
        <label for="">
            Estado <br>
            <input type="text" name="estado" value="{{old('estado',$comentarios->estado)}}">
        </label><br>
        @error('estado')
            <p><strong>{{$message}}</strong></p>
        @enderror
        <label for="">
            idPost <br>
            <input type="number" name="idPosts" value="{{old('idPosts',$comentarios->idPosts)}}">
        </label>
        <br>
        @error('idPosts')
            <p><strong>{{$message}}</strong></p>
        @enderror
        <br>
        <button tipe="submit"> Enviar</button>
    </form>
@endsection
   