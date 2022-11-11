<?php

namespace App\Http\Controllers;

use App\Models\DeviceType;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DeviceTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('devices.index');
    }

    public function datatables()
    {
        $query = DeviceType::query();

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
        return view('devices.create');
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
            'name' => ['required'],
        ]);

        $data = $request->all();

        DeviceType::create($data);

        return redirect()->route('devices.index')
        ->with('success', 'Rekod berjaya ditambah');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DeviceType  $deviceType
     * @return \Illuminate\Http\Response
     */
    public function show(DeviceType $deviceType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DeviceType  $deviceType
     * @return \Illuminate\Http\Response
     */
    public function edit(DeviceType $deviceType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DeviceType  $deviceType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DeviceType $deviceType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DeviceType  $deviceType
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeviceType $deviceType)
    {
        //
    }
}
