<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juego extends Model
{
    use HasFactory;
    protected $table='juego';
    protected $primaryKey='juego_id';
    protected $fillable=array('nombre','descripcion','anioLanzamiento','genero','urlImage');
    protected $hidden = ['created_at', 'updated_at'];

    public function test_setup_fps(){
        return $this->hasMany(TestSetupFps::class,'test_setup_fps_id','test_setup_fps_id');
    }

}
