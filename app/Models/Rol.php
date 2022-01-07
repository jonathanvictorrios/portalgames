<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;
    protected $table='rol';
    protected $primaryKey='rol_id';
    protected $fillable=array('nombre');
    protected $hidden = ['created_at', 'updated_at'];

    public function usuario(){
        return $this->hasMany(Usuario::class,'usuario_id','usuario_id');
    }
}
