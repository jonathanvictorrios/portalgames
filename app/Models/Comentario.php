<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;
    protected $table='comentario';
    protected $primaryKey='comentario_id';
    protected $fillable=array('descripcion');
    protected $hidden = ['created_at', 'updated_at'];
}
