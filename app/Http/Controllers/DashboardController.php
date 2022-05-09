<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\Post;
use App\Models\User;
use App\Models\Daerah;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $user = User::count('id');
        $orang = Post::count('id');
        $hewan = Pet::count('id');
        $b = [];
        $total =  [];


        return view('admin.daleman.index',[
            'user' =>$user ,
            'orang' => $orang,
            'hewan' => $hewan,
        ]);
    }

    public function lihatorang(){
        return view('admin.daleman.porang');
    }

    public function lihathewan(){
        return view('admin.daleman.phewan');
    }

    public function riwayat(){
        return view('admin.daleman.post1');
    }
    
    public function profil(){
        return view('admin.daleman.profil');
    }
    public function orang(){
        return view('admin.crud.orang.addorang');
    }
    public function menemukan(){
        return view('admin.crud.orang.addmenemukan',[
            'category' =>Category::all(),
            'jatim' =>Daerah::all(),
        ]);
    }
    
    public function nemuHewan(){
        return view('admin.crud.hewan.menemukan',[
            'category' =>Category::all()
        ]);
    }
    public function home(){
        return view('admin.daleman.home',[
            'home'=>Post::paginate(6)
        ]);
    }

    public function show(){
        return view('admin.slug.people',[
            'post'=>Post::all()
        ]);
    }
    
    public function kehilangan($slug){
        $orang=Post::all();

        foreach($orang as $p){
            if($p['slug']===$slug){
                $baru= $p;
            }
        }
        return view('admin.slug.people',[
            
            'orang'=> $baru
        ]);
    }
}    
