<?php

namespace App\Http\Controllers;

use App\Models\Core;
use Illuminate\Http\Request;

class FiberInfoController extends Controller
{
    public function index(Request $request)
    {
        $cores = Core::with('customer', 'node')->paginate(15);

        return view('template_dashboard', compact('cores'));
    }
}
