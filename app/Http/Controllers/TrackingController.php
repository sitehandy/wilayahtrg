<?php

namespace App\Http\Controllers;

use App\Models\Tracking;
use Illuminate\Http\Request;

class TrackingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $senaraiTrackings = Tracking::paginate(10);

        return view('trackings.index', compact('senaraiTrackings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trackings.create');
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
            'zone' => ['required'],
            'jenis_item' => ['required'],
            'jumlah_item' => ['required', 'integer'],
            'item_selesai' => ['required', 'integer'],
            'node' => ['required'],
            'nota' => ['sometimes'],
            'status' => ['required']
        ]);

        Tracking::create($data);

        return redirect()->route('trackings.index')->with('success', 'Rekod berjaya ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function show(Tracking $tracking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function edit(Tracking $tracking)
    {
        return view('trackings.edit', compact('tracking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tracking $tracking)
    {
        $data = $request->validate([
            'zone' => ['required'],
            'jenis_item' => ['required'],
            'jumlah_item' => ['required', 'integer'],
            'item_selesai' => ['required', 'integer'],
            'node' => ['required'],
            'nota' => ['sometimes'],
            'status' => ['required']
        ]);

        $tracking->update($data);

        return redirect()->route('trackings.index')->with('success', 'Rekod berjaya dikemaskini');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tracking $tracking)
    {
        $tracking->delete();

        return redirect()->route('trackings.index')->with('success', 'Rekod berjaya dihapuskan');
    }
}
