<?php

namespace App\Http\Controllers;

use \App\Models\Post;
use Illuminate\Http\Request;
use \App\Models\User;
use \Illuminate\Database\Eloquent\Collection;

class AdminKategoriController extends Controller
{
    
    public function kategori(){
        $this->authorize('admin');
        return view('admin.topadmin.categories');
    }
    public function add(){
        $this->authorize('admin');
        return view('admin.topadmin.tambahkategori');
    }

    public function users(){
        $this->authorize('admin');
        return view('admin.topadmin.user',[
            'users' => User::all()
        ]);
    }
    public function orang(){
        $this->authorize('admin');
        return view('admin.topadmin.allorang',[
            'posts' => Post::paginate(5)
        ]);
    }
}
