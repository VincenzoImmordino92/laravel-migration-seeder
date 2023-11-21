<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $trains = Train::all();
        return view('home', compact('trains'));
    }

    public function trainTest(){
        $trains = Train::where('Data','>=','2023-11-21')
        /* ->where() */
        ->get();
        /* $race_train = $trains->addSelect('Stazione_di_partenza') */
        return view('test', compact('trains'));
    }
}
