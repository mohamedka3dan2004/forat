<?php

namespace App\Http\Controllers;

use App\Models\Farmer;
use Illuminate\Http\Request;

class FarmerController extends Controller
{
    public function index(){
        $farmers=Farmer::all();
        return view('particals.farmers.index',compact('farmers'));

    }
}
