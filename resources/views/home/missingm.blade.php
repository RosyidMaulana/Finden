@extends('home.layouts.main')

@section('home')

<h1 class="text-center mt-3 ">KEHILANGAN SESEORANG</h1>
<br>
<div class="container-fluid ">

    @foreach ($human as $wong)
    <article class="mb-5">
        <h2>
            <a href="/miss1/{{ $wong['slug'] }}">{{ $wong["nama"] }}</a>
        </h2>
        <br>
        <h3>{{ $wong["jenis_kelamin"] }}</h3>
        <br>
        <p>{{ $wong["ciri"] }}</p>
        <hr>
    </article>
    
    @endforeach
</div>
@endsection
