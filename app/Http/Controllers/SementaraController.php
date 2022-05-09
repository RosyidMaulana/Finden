<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SementaraController extends Controller
{
    public function orang(){
        return view('admin.crud.orang.addorang');
    }
    public function hewan(){
        return view('admin.crud.hewan.addhewan');
    }
    
}
