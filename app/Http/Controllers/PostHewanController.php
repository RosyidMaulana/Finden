<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\KomentarHewan;


class PostHewanController extends Controller
{
    public function detailHewan(){
        $mm = Pet::all();

        return view ('home.HewanS',[
            'hewan' => Pet::with(['category', 'pelapor'])->latest()->filter(request(['search', 'filter' , 'category']))->paginate(4),
            'terbaru' => Pet::with(['category', 'pelapor'])->latest()->get(),
            'kategori' => Category::all(),
            'sumsum' => $mm,
        ]);
    }
    public function slugHewan($slug){
        $hewan=Pet::firstWhere('slug' , $slug);
        $id = $hewan-> id;

        return view('home.slugHewan',[
            'hai'=>Pet::firstWhere('slug', $slug),
            'komentarHewan'=>KomentarHewan::all(),
            'totalKomentar' =>KomentarHewan::where('hewan_id','=',$id)->count('komentar')
        ]);
    }

    function tambahKomentar(Request $request,$slug){
        $hewan=Pet::firstWhere('slug' , $slug);
        $id = $hewan-> id;

        $validation=$request->validate([
            'komentar'=> 'required',
        ]);

        $validation['hewan_id']=$id;
        $validation['user_id']=auth()->user()->id;

        KomentarHewan::create($validation);
        return redirect ('kehilangan-hewan/'. $slug);

    }
}
