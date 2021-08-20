<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Fruit;

class FruitsController extends Controller
{
        public function index(){
            $datas = Fruit::all();
        return view('pages.fruits',compact('datas'));
    }
}
