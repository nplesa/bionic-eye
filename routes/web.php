<?php
use nplesa\BionicEye\Http\Controllers\DetectionController;

Route::post('/api/detections', [DetectionController::class, 'store']);
