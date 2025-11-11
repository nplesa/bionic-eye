<?php
namespace nplesa\BionicEye\Models;

use Illuminate\Database\Eloquent\Model;

class Detection extends Model
{
    protected $fillable = ['camera_id','type','confidence','timestamp','instance_id'];

    public function camera()
    {
        return $this->belongsTo(Camera::class);
    }
}
