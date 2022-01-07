<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuildPc extends Model
{
    use HasFactory;
    protected $table='build_pc';
    protected $primaryKey='build_pc_id';
    protected $fillable=array('descripcion','procesador_id','placa_video_id','ram_id');
    protected $hidden = ['created_at', 'updated_at'];

    public function test_setup_fps(){
        return $this->hasMany(TestSetupFps::class,'test_setup_fps_id','test_setup_fps_id');
    }
    public function placa_video(){
        return $this->hasOne(PlacaVideo::class,'placa_video_id','placa_video_id');
    }
    public function procesador(){
        return $this->hasOne(Procesador::class,'procesador_id','procesador_id');
    }
    public function ram(){
        return $this->hasOne(Ram::class,'ram_id','ram_id');
    }
}
