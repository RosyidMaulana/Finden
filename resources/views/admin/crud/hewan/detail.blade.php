
@extends('admin.main')


@section('admin')


<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header ">
                        <h2>Postingan</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">       
                        <div style="max-height: 350px; overflow:hidden;">
                            @if ($hewan->image)
                            <img src="{{ asset('storage/' . $hewan->image ) }}"  class="img-fluid mt-3" style="max-height: 500px;">
                            
                            @else
                            <img src="https://source.unsplash.com/900x750?animal" alt="" class="img-fluid" >
                            
                            @endif
                    
                        </div>
              
                        <h1 class="text-center">
                            
                           
                            <span class="label @if ($hewan->category->nama==="DICARI")label-danger @else label-success
                            
                                @endif">  {{ $hewan->category->nama }}</span>
                        </h1>
                        <ul>
                            <h3>Jenis : {{ $hewan->jenis }}</h3>
                            <h3>Warna    : {{ $hewan ->warna }} </h3>
                            <h3>Jenis Kelamin : {{ $hewan ->gender }} </h3>
                            <p>Ciri Ciri Khusus</p>
                            <p>{{ $hewan->spesial }}</p>
                            <a href="/post_hewan">Kembali kehalaman utama...</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection