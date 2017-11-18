<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categorias extends Model
{
    use SoftDeletes;
    protected $table = 'categoria';
    protected $fillable = ['id', 'nombre', 'deleted_at'];
    protected $dates = ['deleted_at'];


    public function categorias() {
        return $this->hasMany(BlogPost::class, 'idCategoria', 'id');
    }
}
