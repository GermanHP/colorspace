<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use App\Models\BlogPost;
use App\Models\Categorias;

class BlogController extends Controller
{

    public function index(){
        $entradas = BlogPost::all();

        return View('blog.blogTemp', compact('entradas'));
    }

    public function nuevoPost(){

        $tipoCategoria = Categorias::all('nombre', 'id');

        return View('blog.formularios.entradasBlog', compact('tipoCategoria'));
    }

    public function Insertar(Request $request){
        $postBlog = new BlogPost();

        $postBlog->fill([
           "titulo"=>$request["tituloPost"],
           "texto"=>$request["cuerpoPost"],
            "idCategoria"=>$request["categoria"]
        ]);
        $postBlog->save();

        flash('Post Creado Exitosamente', 'succes');
        return redirect()->back();
    }


}
