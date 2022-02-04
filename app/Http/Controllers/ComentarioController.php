<?php

namespace App\Http\Controllers;
use App\Models\comentario;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    public function index(){
        //return 'Todos los comentarios';
//        $coment = comentario::all();
    /*    //$coment = comentario::select('id','email','estado')->where('estado','Inactivo')->take(5)->get();
       // $coment = comentario::select('id','email as correo','estado')->where('estado','Activo')->first();
        //$coment = comentario::select('id','email as correo','estado')->orderBy('id','desc')->get();
        //$coment = comentario::select('id','email as correo','estado')->orderBy('id','asc')->get();
        //$coment = comentario::select('email as correo','descripcion','estado')->take(10)->get();
     //  return $coment;
     //return view('Comentarios.index',['comentarios'=>$coment]);*/

     $coment = comentario::orderBy('id','desc')->paginate();  //para el paginator
     return view('Comentarios.index',compact('coment'));   
    }

    public function create(){
        return view('Comentarios.create');
    }
    public function store(Request $request){
       /* $comentario = new comentario();
        $comentario->email = $request->email;
        $comentario->descripcion = $request->descripcion;
        $comentario->estado = $request->estado;
        $comentario->idPosts = $request->idPosts;
        $comentario->save();*/
        $request->validate([     //asi seria para validar la cosa .... 
          'email'=>'required',
          'descripcion'=>'required',
          'estado'=>'required',
          'idPosts'=>'required',
        ]);
        $comentario = new comentario();
        $comentario->email = $request->email;
        $comentario->descripcion = $request->descripcion;
        $comentario->estado = $request->estado;
        $comentario->idPosts = $request->idPosts;
        $comentario->save();                          // guardamos 
        
       // return $request;
       return redirect()->route('comentarios.index');
    }
    
    public function show(comentario $comentarios){
        return view('Comentarios.show',compact('comentarios'));
    }

    public function edit(comentario $comentarios){
        return view('Comentarios.edit',compact('comentarios'));
    }

    public function update(Request $request, comentario $comentarios){
        $request->validate([
            'email'=>'required',
            'descripcion'=>'required',
            'estado'=>'required',
            'idPosts'=>'required',
          ]);
          /*$comentarios->email = $request->email;
          $comentarios->descripcion = $request->descripcion;
          $comentarios->estado = $request->estado;
          $comentarios->idPosts = $request->idPosts;
          $comentarios->save();*/
          $comentarios->update($request -> all()); // si usamos este entonces tambien usamos el fillable en el modelo
        return view('Comentarios.show',compact('comentarios'));
    }
    public function destroy(comentario $comentarios){
        $comentarios->delete();
        return redirect()->route('comentarios.index');
    }

}
