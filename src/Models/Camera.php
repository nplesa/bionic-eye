<?php
namespace Nplesa\BionicEye\Models;

use Illuminate\Database\Eloquent\Model;

class Camera extends Model
{
    protected $fillable = ['label', 'source', 'instance_id'];

    public function instance()
    {
        return $this->belongsTo(DashboardInstance::class, 'instance_id');
    }
}
