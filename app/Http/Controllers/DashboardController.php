<?php

namespace App\Http\Controllers;

use App\Models\Core;
use App\Models\Tracking;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {

        // $selectItem = Tracking::groupby('jenis_item')->select('jenis_item')->get();

        // $sql = Tracking::query();

        // if ($request->has('jenis_item'))
        // {
        //     $sql->where('jenis_item', '=', $request->input('jenis_item'));
        // }
        // else
        // {
        //     $sql->where('jenis_item', '=', 'Tiang');
        // }

        // $data = $sql->get();

        // $labels = [];
        // $items = [];
        // $borderColors = [];
        // $backgroundColors = [];

        // foreach ($data as $item)
        // {
        //     $labels[] = $item->zone;
        //     $items[] = $item->item_selesai;
        //     $backgroundColors[] = self::bm_random_rgb();
        //     $borderColors[] = self::bm_random_rgb();

        // }

        //dd($labels);

        // return view('template_dashboard', compact('selectItem', 'labels', 'items', 'borderColors', 'backgroundColors'));
        return view('template_dashboard');
    }
}
