<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function inicio(){
        return view('admin.inbox');
    }

    public function nuevoPost(){
        return view('blog.formularios.entradasBlog');
    }
}
