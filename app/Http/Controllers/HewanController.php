<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\Category;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use \Illuminate\Support\Facades\Storage;


class HewanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.daleman.phewan', [
            'hewan' => Pet::where('user_id', auth()->user()->id)->paginate(5)
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.crud.hewan.addhewan',[
            'category' =>Category::all()
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
        $validatedData = $request->validate([
            'category_id' => 'required',
            'jenis'=> 'required|max:50',
            'slug'=> 'required',
            'warna' => 'required|max:50',
            'gender'=> 'required',
            'contact' => 'required',
            'nama_kalung' => 'max:30',
            'last'=> 'required',
            'reward'=> 'required',
            'spesial' => 'max:525',
            'sertifikat' => '|image|file|max:5120',
            'image' => 'image|file|max:5120',
        ]);
        if ($request->file('sertifikat')) {
            $validatedData['sertifikat'] = $request->file('sertifikat')->store('sertifikat-pet');
        }if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('pet');
        }
        $validatedData['user_id']=auth()->user()->id;
        Pet::create($validatedData);

        return redirect('/post_hewan')->with('success', 'Anda telah sukses menambahkan data kehilangan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function show(Pet $pet, $slug)
    {
        $semua=Pet::firstWhere('slug', $slug);

        
        return view('admin.crud.hewan.detail',[
            'hewan'=> $semua
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function edit(Pet $pet, $slug)
    {
        $semua=Pet::firstWhere('slug', $slug);

        $halo = Pet::find($semua->id);
        return view('admin.crud.hewan.edit',[
            'hewan' => $halo,
            'det' => Category::all()
        ]

    );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pet $pet, $slug)
    {
        $ini =Pet::firstWhere('id', $slug);
        $validatedData = $request->validate([
            'category_id' => 'required',
            'jenis'=> 'required|max:50',
            'slug'=> 'required',
            'warna' => 'required|max:50',
            'gender'=> 'required',
            'contact' => 'required',
            'nama_kalung' => 'max:30',
            'last'=> 'required',
            'reward'=> 'required',
            'spesial' => 'max:525',
            
            'image' => 'image|file|max:5120',
        ]);
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('pet');
        }
        
        $validatedData['user_id']=auth()->user()->id;
        Pet::create($validatedData);

        return redirect('/post_hewan/tambah')->with('success', 'Anda telah sukses menambahkan data kehilangan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pet $pet, $slug)
    {
        
        $delete=Pet::firstWhere('slug', $slug);

        
        if ($delete->image) {
            Storage::delete($delete->image);
        }

        Pet::destroy($delete->id);

        return redirect('/post_hewan')->with('danger', 'Anda telah sukses menghapus salah satu data kehilangan');
    }
        
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Pet::class, 'slug', $request->jenis);
        return response()->json(['slug' => $slug]);
    }
}
