<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ram extends Model
{
    use HasFactory;
    protected $table='ram';
    protected $primaryKey='ram_id';
    protected $fillable=array('nombre','descripcion','cantidad');
    protected $hidden = ['created_at', 'updated_at'];

    public function build_pc(){
        return $this->belongsTo(BuildPc::class,'ram_id','ram_id');
    }
}
