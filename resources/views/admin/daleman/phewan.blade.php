@extends('admin.main')


@section('admin')
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-15 col-sm-12 col-md-12 col-lg-15">
                    <div class="card">
                        <div class="header">
                            <h2>Data Kehilangan Hewan Peliharaan</h2>

                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a
                                        href="javascript:void(0);"
                                        class="dropdown-toggle"
                                        data-toggle="dropdown"
                                        role="button"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        <i class="material-icons"
                                            >more_vert</i
                                        >
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:void(0);"
                                                >Action</a
                                            >
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                >Another action</a
                                            >
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                >Something else here</a
                                            >
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                @if (session()->has('success'))
                                <div class="alert alert-success">
                                    <strong>Berhasil!</strong> {{ session('success') }}
                                </div>
                                @elseif (session()->has('danger'))
                                <div class="alert alert-success">
                                    <strong>Berhasil Menghapus!</strong> {{ session('danger') }}
                                </div>
                                @endif
                                <a href=" /post_hewan/create" class="btn btn-primary mb-5">klik Ini Jika <b>Kehilangan</b> Hewan Peliharaan</a>
                                <a href="/post-hewan/datamenemukan" class="btn btn-primary mb-3">Klik Ini Jika <b>Menemukan</b> Hewan Peliharaan</a>
                               <hr>
                               
                                <table
                                    class="table table-hover dashboard-task-infos"
                                >
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Jenis</th>
                                        <th>Jenis Kelamin</th>
                                        <th>warna</th>
                                        <th>Progress</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                    
                                    
                                        @foreach($hewan as $pet )
                                        
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $pet->jenis }}</td>
                                                <td>{{ $pet->gender}}</td>
                                                <td>{{ $pet->warna}}</td>
                                                
                                                
                                                <td>
                                                    <a href="/post_hewan/{{ $pet->slug }}" class="btn btn-success ">Detail</a>
                                                    <a href="/post_hewan/{{ $pet->slug }}/edit " class="btn bg-orange">Edit</a>

                                                    <form  action="/post_hewan/{{ $pet->slug }}" method="post" >
                                                        @method('delete')
                                                        @csrf
                                                        <button class="btn btn-danger" onclick="return confirm('Anda yakin!')">Hapus</button>
                                                    </form>
                                                    {{-- <a href="/dashboard/hewan/create" class="btn btn-danger ">Hapus</a> --}}
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                    
                                </table>
                                {{ $hewan->links() }}

                            </div>



                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
