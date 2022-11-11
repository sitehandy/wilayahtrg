<?php

namespace App\Http\Controllers;

use App\Models\Cpe;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CpeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cpe.index');
    }

    public function datatables()
    {
        $query = Cpe::query();

        return DataTables::of($query)
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cpe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'zone' => ['required'],
            'serial_number' => ['required'],
            'tarikh' => ['required'],
            'customer' => ['required'],
            'remarks' => ['required'],
            'gambar' => ['mimes:jpg,bmp,png']
        ]);

        $data = $request->all();

        Cpe::create($data);

        return redirect()->route('cpe.index')
        ->with('success', 'Rekod berjaya ditambah');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
