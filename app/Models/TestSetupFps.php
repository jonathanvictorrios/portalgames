<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestSetupFps extends Model
{
    use HasFactory;
    protected $table='test_setup_fps';
    protected $primaryKey='test_setup_fps_id';
    protected $fillable=array('1min','001min','averageFps','build_pc_id','user_id','juego_id');
    protected $hidden = ['created_at', 'updated_at'];

    public function build_pc(){
        return $this->belongsTo(BuildPc::class,'build_pc_id','build_pc_id');
    }
    public function juego(){
        return $this->belongsTo(Juego::class,'user_id','user_id');
    }
    public function usuario(){
        return $this->belongsTo(Usuario::class,'juego_id','juego_id');
    }
}
