<?php

namespace App\Http\Controllers;

use App\Exports\DataExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function data()
    {
        return Excel::download(new DataExport, now(). '.xlsx');
    }
}
