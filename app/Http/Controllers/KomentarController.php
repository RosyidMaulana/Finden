<?php

namespace App\Http\Controllers;

use App\Models\Coment;
use Illuminate\Http\Request;

class KomentarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {   
        $validation = $request->validate([
            'komentar' => 'max:255',
            'balas' => 'max:255',
            'rebalas' => 'max:255',
            'post_id' => $id,
            

        ]);
        $validation['user_id']= auth()->user()->id;
        Coment::create($validation);

        return redirect ('/kehilangan-orang')->with('success', 'Anda telah sukses mengirimkan komentar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coment  $coment
     * @return \Illuminate\Http\Response
     */
    public function show(Coment $coment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coment  $coment
     * @return \Illuminate\Http\Response
     */
    public function edit(Coment $coment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coment  $coment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coment $coment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coment  $coment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coment $coment)
    {
        //
    }
}
