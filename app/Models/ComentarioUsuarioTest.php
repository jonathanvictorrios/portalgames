<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComentarioUsuarioTest extends Model
{
    use HasFactory;
    protected $table='comentario_usuario_test';
    protected $primaryKey='comentario_usuario_test_id';
    protected $fillable=array('comentario_id','usuario_id','test_setup_fps_id');
    protected $hidden = ['created_at', 'updated_at'];
}
