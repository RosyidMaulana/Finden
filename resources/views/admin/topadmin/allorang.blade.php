@extends('admin.main')


@section('admin')
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-15 col-s
                m-12 col-md-12 col-lg-15">
                    <div class="card">
                        <div class="header">
                            <h2>Data Kehilangan Seseorang</h2>
                            
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
                            <a href=" /post_orang/crud/create" class="btn btn-primary mb-5">klik Ini Jika <b>Kehilangan</b> Seseorang</a>
                            <a href="/addorang/menemukanorang" class="btn btn-primary mb-3">Klik Ini Jika <b>Menemukan</b> Seseorang</a>
                                <table
                                    class="table table-hover dashboard-task-infos"
                                >
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Umur</th>
                                        <th>Progress</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                    
                                    
                                        @foreach($posts as $post )
                                        
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $post->name }}</td>
                                                <td>{{ $post->gender}}</td>
                                                <td>{{ $post->age}}</td>
                                                
                                                
                                                <td>
                                                    <a href="/post_orang/crud/{{ $post->slug }}" class="btn btn-success ">Detail</a>
                                                    <a href="/dashboard/posts/create" class="btn bg-orange">Edit</a>
                                                    <a href="/dashboard/posts/create" class="btn btn-danger ">Hapus</a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                    
                                </table>
                                {{ $posts->links() }}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
