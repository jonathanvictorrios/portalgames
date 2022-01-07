<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlacaVideo extends Model
{
    use HasFactory;
    protected $table='placa_video';
    protected $primaryKey='placa_video_id';
    protected $fillable=array('nombre','descripcion');
    protected $hidden = ['created_at', 'updated_at'];

    public function build_pc(){
        return $this->belongsTo(BuildPc::class,'placa_video_id','placa_video_id');
    }

}
