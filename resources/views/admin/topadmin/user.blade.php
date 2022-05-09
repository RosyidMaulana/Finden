@extends('admin.main')


@section('admin')
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-15 col-sm-12 col-md-12 col-lg-15">
                    <div class="card">
                        <div class="header">
                            <h2>Daftar Users</h2>

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
                                
                                <table
                                    class="table table-hover dashboard-task-infos"
                                >
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>Tanggal Dibuat</th>                    
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $r)
                                            
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $r->name }}</td>
                                            <td>{{ $r->created_at }}</td>
                                            
                                            <td>
                                                <a href="/dashboard/posts/create" class="btn bg-pink waves-effect">Detail</a>
                                                
                                            </td>
                                        </tr>
                                        @endforeach
                                       

                                    </tbody>
                                </table>

                            </div>



                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
