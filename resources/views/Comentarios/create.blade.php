@extends('../layouts/plantilla')
@section('title','Comentarios Create')

@section('content')
<h1>Formulario para crear un comentario</h1>
    <form action="{{route('comentarios.store')}}" method="post">
        @csrf
        <label for="">
            Email <br>
            <input type="text" name="email" value="{{old('email')}}">
        </label> <br>
        @error('email')
            <p><strong>{{$message}}</strong></p>
        @enderror
        <label for="">
            Descripcion <br>
            <input type="text" name="descripcion" value="{{old('descripcion')}}">
        </label><br>
        @error('descripcion')
            <p><strong>{{$message}}</strong></p>
        @enderror
        <label for="">
            Estado <br>
            <input type="text" name="estado" value="{{old('estado')}}">
        </label><br>
        @error('estado')
            <p><strong>{{$message}}</strong></p>
        @enderror
        <label for="">
            idPost <br>
            <input type="number" name="idPosts" value="{{old('idPosts')}}">
        </label>
        <br>
        @error('idPosts')
            <p><strong>{{$message}}</strong></p>
        @enderror
        <br>
        <button tipe="submit"> Enviar</button>
    </form>
@endsection
   