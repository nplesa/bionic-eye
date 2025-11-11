<?php
namespace nplesa\BionicEye\Models;

use Illuminate\Database\Eloquent\Model;

class DashboardInstance extends Model
{
    protected $fillable = ['name', 'user_id'];

    public function cameras()
    {
        return $this->hasMany(Camera::class, 'instance_id');
    }
}
