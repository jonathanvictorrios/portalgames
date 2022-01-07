<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procesador extends Model
{
    use HasFactory;
    protected $table='procesador';
    protected $primaryKey='procesador_id';
    protected $fillable=array('nombre','descripcion');
    protected $hidden = ['created_at', 'updated_at'];

    public function build_pc(){
        return $this->belongsTo(BuildPc::class,'procesador_id','procesador_id');
    }
}
