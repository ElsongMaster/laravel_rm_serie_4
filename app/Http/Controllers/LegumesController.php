<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Legume;

class LegumesController extends Controller
{
    public function index(){
        $datas = Legume::all();
        return view('pages.legumes',compact('datas'));
    }

    public function show(Legume $id){
        $legume = $id;

        return view('layouts.showLegume',compact('legume'));
    }
}
