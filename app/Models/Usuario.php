<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table='usuario';
    protected $primaryKey='usuario_id';
    protected $fillable=array('dni','nombre','apellido','email','clave','rol_id');
    protected $hidden = ['created_at', 'updated_at'];

    public function rol(){
        return $this->belongsTo(Rol::class,'rol_id','rol_id');
    }
    public function test_setup_fps(){
        return $this->hasMany(TestSetupFps::class,'test_setup_fps_id','test_setup_fps_id');
    }
}
