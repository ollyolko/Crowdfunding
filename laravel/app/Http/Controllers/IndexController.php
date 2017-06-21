<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Data;

class IndexController extends Controller
{
    //
    public function show(){
        $arr=[];
        $data = Data::all();
        foreach ($data as $value){
            $arr[$value->name]=$value->value;
        }
        return view('index',$arr);
    }
}
