<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Daerah;
use \App\Models\Category;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PostOrangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.daleman.porang', [
            'posts' => Post::where('user_id', auth()->user()->id)->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.crud.orang.addorang',[
            'category' =>Category::all(),
            'jatim' =>Daerah::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        
        $validatedData = $request->validate([
            'jatim_id' => 'required',
            'category_id'=> 'required',
            'name'=> 'required|max:255',
            'slug' => 'required|unique:posts',
            'gender'=> 'required',
            'age'=> 'max:15',
            'contact'=> 'required|max:255',
            'rambut'=> 'required|max:100',
            'mata'=> 'max:30',
            'tinggi' => 'max:30',
            'last'  => 'required|max:255',
            'reward' => 'required',
            'spesial' => 'max:255',
            'image' => 'image|file|max:5120',
        ]);
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id']= auth()->user()->id;
        Post::create($validatedData);

        return redirect('/post_orang/crud')->with('success', 'Anda telah sukses menambahkan data kehilangan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post, $slug)
    {
        $baru=Post::firstWhere('slug', $slug);

        
        return view('admin.crud.orang.detail',[
            
            'orang'=> $baru,
            'jatim' =>Daerah::all(),
        ]);

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post, $slug)
    {
        $semua=Post::firstWhere('slug', $slug);

       

        $halo = Post::find($semua->id);

        return view('admin.crud.orang.edit',[
            'post' => $halo,
            'category' =>Category::all(),
            'jatim' =>Daerah::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post, $slug)
    {
        $semua=Post::firstWhere('slug', $slug);

        $validatedData = $request->validate([
            'jatim_id' => 'required',
            'category_id'=> 'required',
            'name'=> 'required|max:255',
            'slug' => 'required',
            'gender'=> 'required',
            'age'=> 'max:15',
            'contact'=> 'required|max:255',
            'rambut'=> 'required|max:100',
            'mata'=> 'max:30',
            'tinggi' => 'max:30',
            'last'  => 'required|max:255',
            'reward' => 'required',
            'spesial' => 'max:255',
            'image' => 'image|file|max:5120',
        ]);
        
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        $validatedData['user_id']= auth()->user()->id;
        // $validatedData = $request->validate($rules);

        Post::where('id',$semua->id)->update($validatedData);

        return redirect('/post_orang/crud')->with('success', 'Anda telah sukses mengubah salah satu data kehilangan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post, $slug)
    {
        $delete=Post::firstWhere('slug', $slug);

        
        if ($delete->image) {
            Storage::delete($delete->image);
        }

        Post::destroy($delete->id);

        return redirect('/post_orang/crud')->with('danger', 'Anda telah sukses menghapus salah satu data kehilangan');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
