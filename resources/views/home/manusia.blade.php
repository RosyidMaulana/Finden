@extends('home.layouts.main')

@section('home')


    <div class="container-fluid">
        <article>
        <h2>{{ $human1["nama"] }}</h2>
        <h3>{{ $human1["jenis_kelamin"] }}</h3>
        <p>{{ $human1["ciri"] }}</p>
    </article>
    <a href="/miss1">kembali ke miss1</a> 
    </div>
@endsection