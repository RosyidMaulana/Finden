<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
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
        return view('home.login.register',[
            "title" => "Registrasi",
    
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
            'name' => 'required|max:255|min:5',
            'username' => ['required','min:3', 'max:255' , 'unique:users'],
            'email' =>'required|email|unique:users',
            'password' => 'required|min:3|max:255',
        ]);

        $validatedData['password'] =Hash::make($validatedData['password']);

        User::create($validatedData);

        $request->session()->flash('success','Registrasi berhasil nih! coba login deh!');

        return redirect('/login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $popo = auth()->user()->id;
        $kik = User::find($popo);
        return view('admin.daleman.profil',[
            'profil' => $kik
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        
        $popo = auth()->user()->id;
        $kik = User::find($popo);

        $validatedData = $request->validate([
            'name' => 'required|max:255|min:5',
            'username' => ['required','min:3', 'max:255' , 'unique:users'],
        ]);
        User::where('id',$kik->id)->update($validatedData);

        return redirect('/register/{$popo}/edit')->with('success', 'Anda telah sukses mengubah salah satu data kehilangan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
