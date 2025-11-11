<?php
namespace nplesa\BionicEye\Http\Livewire;

use Livewire\Component;
use nplesa\BionicEye\Models\DashboardInstance;

class CameraDashboard extends Component
{
    public $instance_id;

    public function mount($instance_id)
    {
        $this->instance_id = $instance_id;
    }

    public function render()
    {
        $instance = DashboardInstance::with('cameras')->findOrFail($this->instance_id);
        return view('bionic-eye::livewire.camera-dashboard', ['instance' => $instance]);
    }
}
