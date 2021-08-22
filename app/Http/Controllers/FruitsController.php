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


    public function show(Fruit $id){
        $fruit = $id;
        return view('layouts.showFruit',compact('fruit'));
    }
}
