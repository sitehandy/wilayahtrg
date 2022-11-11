<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InfoTrackingController extends Controller
{
    public function show($serialNumber)
    {
        $info = Inventory::where('serial_number', '=', $serialNumber)->firstOrFail();

        return view('info.show', compact('info'));
    }
}
