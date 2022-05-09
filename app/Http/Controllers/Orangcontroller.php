<?php

namespace App\Http\Controllers;

Use Illuminate\Support\Facades\DB;
use App\Models\Post;
use \App\Models\Orang;
use App\Models\Coment;
use App\Models\Daerah;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Builder;

class Orangcontroller extends Controller
{

    
    

    
    public function detail(){
        $halo=Post::raw('count(category_id)');
        $count = Post::select(array('category_id', $halo))->groupBy('category_id')->get();
        $by = collect($count);

        // $komentar=Coment::
        // $totalKomentar=collect($komentar);

        $mm=Post::all();
        $g = collect($mm);
        return view ('home.utama', [
            'orang' => Post::with(['category', 'pelapor'])->latest()->filter(request(['search', 'filter', 'jatim' , 'category']))->paginate(4),
            'terbaru' => Post::with(['category', 'pelapor'])->latest()->get(),
            'kategori' => Category::all(),
            'sumsum' => $mm,
            'jatim' => Daerah::all(),
            // 'komentar' => $totalKomentar

            // 'sumsum' => Post::collect(where('category_id', '=', 2)->count('category_id'),         
            // 'sumsum' => Post::groupBy($count)->count($count)->toArray()              
        ]);

    }
    
    public function daleman($slug){
        $orang=Post::firstWhere('slug', $slug);
        $id=$orang->id;
        
        return view ('home.ichi',[

            'hai'=>Post::firstWhere('slug', $slug),
            'comment'=>Coment::all(),
            'totalComment' =>Coment::where('post_id','=',$id)->count('komentar'),

        ]);
    }

    function komentar(Request $request, $slug){
        
        $orang=Post::firstWhere('slug', $slug);
        $id=$orang->id;
        
        $validation = $request->validate([
            'komentar' => 'max:255',
            
        ]);
        $validation['post_id']= $id;
        $validation['user_id']= auth()->user()->id;

        Coment::create($validation);

        return redirect('kehilangan-orang/'. $slug);
    }

}
