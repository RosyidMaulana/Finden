
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
                            @if ($orang->image)
                            <img src="{{ asset('storage/' . $orang->image ) }}"  class="img-fluid mt-3" style="max-height: 500px;">
                            
                            @else
                            <img src="https://source.unsplash.com/900x750?people" alt="" class="img-fluid" >
                            
                            @endif
                    
                        </div>
              
                        <h1 class="text-center">
                            
                           
                            <span class="label @if ($orang->category->nama==="DICARI")label-danger @else label-success
                            
                                @endif">  {{ $orang->category->nama }}</span>
                        </h1>
                        <ul>
                            <h3>Nama : {{ $orang->name }}</h3>
                            <h3>Umur    : {{ $orang ->age }} </h3>
                            <h3>Jenis Kelamin : {{ $orang ->gender }} </h3>
                            <p>Ciri Ciri Khusus</p>
                            <p>{{ $orang->spesial }}</p>
                            <a href="/post_orang/crud/">Kembali kehalaman utama...</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection