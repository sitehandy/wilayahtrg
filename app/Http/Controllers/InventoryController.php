<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Inventory;
use App\Models\DeviceType;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inventories.index');
    }

    public function datatables()
    {
        $query = Inventory::query();

        return DataTables::of($query)
        ->editColumn('qrcode', function ($inventory) {
            return QrCode::size(150)->generate(route('tracking.info', $inventory->serial_number));
        })
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $selectDevices = DeviceType::select('name', 'name')->get();
        $selectBrands = Brand::select('name', 'name')->get();

        return view('inventories.create', compact('selectDevices', 'selectBrands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'type' => ['required'],
            'brand' => ['required'],
            'serial_number' => ['required'],
            'tarikh_dapat' => ['required'],
            'tarikh_installation' => ['required'],
            'remarks' => ['required']
        ]);

        Inventory::create($data);

        return redirect()->route('inventories.index')
        ->with('success', 'Rekod berjaya ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function show(Inventory $inventory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventory $inventory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventory $inventory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventory $inventory)
    {
        //
    }
}
