<?php

namespace App\Http\Controllers;

use App\Models\Tmnode;
use App\Imports\NodeImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function node(Request $request)
    {
        Excel::import(new NodeImport, $request->file('file'));

        return back()->with('success', 'All good!');
    }
}
