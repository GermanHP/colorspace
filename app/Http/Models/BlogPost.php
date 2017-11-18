<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogPost extends Model
{
    use SoftDeletes;
    protected $table = 'post';
    protected $fillable = ['id', 'titulo', 'texto', 'idCategoria', 'deleted_at'];
    protected $dates = ['deleted_at'];


    public function posts() {
        return $this->belongsTo(Categorias::class, 'nombre', 'id');
    }
}
