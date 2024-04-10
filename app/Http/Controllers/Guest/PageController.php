<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        
        $trains = Train::where('Data_partenza', date('Y-m-d'))->get(); 

        return view('welcome', compact('trains'));
    }
}