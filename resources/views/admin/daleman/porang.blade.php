@extends('admin.main')


@section('admin')
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix js-sweetalert">
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
                                @if (session()->has('success'))
                                <div class="alert alert-success">
                                    <strong>Berhasil!</strong> {{ session('success') }}
                                </div>
                                @elseif (session()->has('danger'))
                                <div class="alert alert-success">
                                    <strong>Berhasil Menghapus!</strong> {{ session('danger') }}
                                </div>
                                @endif
                                {{-- <div class="alert alert-success">
                                    <strong>Well done!</strong> You successfully read this important alert message.
                                </div> --}}



                                
                            <a href=" /post_orang/crud/create" class="btn btn-primary mb-7">klik Ini Jika <b>Kehilangan</b> Seseorang</a>
                            <a href="/post_orang/menemukan" class="btn btn-primary mb-3">Klik Ini Jika <b>Menemukan</b> Seseorang</a>
                            <hr>

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
                                                    <a href="{{ route('crud.edit', $post)}}" class="btn bg-orange">Edit</a>

                                                    <form  action="/post_orang/crud/{{ $post->slug }}" method="post" >
                                                        @method('delete')
                                                        @csrf
                                                        <button class="btn btn-danger" onclick="return confirm('Anda yakin!')">Hapus</button>
                                                    </form>
                                                    {{-- <a href="/dashboard/posts/create" class="btn btn-danger ">Hapus</a> --}}
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

<script>
$(function () {
    $('.js-sweetalert button').on('hapus', function () {
        var type = $(this).data('type');
        if (type === 'cancel') {
            showCancelMessage();
        }
    });
});

function showCancelMessage() {
    swal({
        title: "Are you sure?",
        text: "You will not be able to recover this imaginary file!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel plx!",
        closeOnConfirm: false,
        closeOnCancel: false
    }, function (isConfirm) {
        if (isConfirm) {
            swal("Deleted!", "Your imaginary file has been deleted.", "success");
        } else {
            swal("Cancelled", "Your imaginary file is safe :)", "error");
        }
    });
}
</script>
@endsection
