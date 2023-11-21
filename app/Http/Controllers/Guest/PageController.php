<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $trains = Train::orderBy('Data')
        ->orderBy('Orario_di_partenza')
        ->get();

        $trains_order_desc = Train::orderBy('id','desc')
        ->get();



        return view('home', compact('trains','trains_order_desc'));
    }

    public function trainTest(Request $request){
        $data = $request->input('data',now());

        $trains = Train::where('Data','>=',$data)
        ->get();


        return view('test', compact('trains'));
    }
}
