<?php
namespace nplesa\BionicEye\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use nplesa\BionicEye\Models\Detection;

class DetectionController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'camera_id' => 'required|integer',
            'type' => 'required|string',
            'confidence' => 'nullable|numeric',
            'timestamp' => 'required|date',
            'instance_id' => 'required|integer'
        ]);

        return Detection::create($data);
    }
}
