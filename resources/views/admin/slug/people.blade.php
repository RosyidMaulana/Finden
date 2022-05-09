
@extends('admin.main')


@section('admin')


<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header bg-deep-orange">
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
                        <h1 class="text-center">
                            Foto 
                            <br>
                            <span class="label @if ($orang->category->nama==="Dicari")bg-deep-purple @else label-success
                            
                                @endif">  {{ $orang->category->nama }}</span>
                        </h1>
                        <ul>
                            <h3>Nama : {{ $orang->name }}</h3>
                            <h3>Umur    : {{ $orang ->age }} </h3>
                            <h3>Jenis Kelamin : {{ $orang ->gender }} </h3>
                            <p>Ciri Ciri Khusus</p>
                            <p>{{ $orang->spesial }}</p>
                            <a href="/dashboard/homepage">kembali...</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection