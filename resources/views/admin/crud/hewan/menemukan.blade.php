@extends('admin.main')

@section('admin')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Tambah Data Kehilangan Hewan Peliharaan</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <form  method="post" action="/post_hewan" enctype="multipart/form-data">
                            @csrf
                            <div class="col-sm-8"></div>
                            <div class="form-group form-float  ">
                                <div class="form-line hidden">
                                    <input for="category_id" type="text" class="form-control " id="category_id" name="category_id"  
                                    value="{{ $category->find(2)->id}}" readonly>
                                    
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line @error('jenis') focused error @enderror">
                                    <input for="jenis" type="text" class="form-control" id="jenis" name="jenis" >
                                    <label class="form-label active">Jenis</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line ">
                                    <input for="slug" type="text" class="form-control" id="slug" name="slug"  readonly >
                                    <label class="form-label active"></label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line @error('warna') focused error @enderror">
                                    <input for="warna" type="text" class="form-control" id="warna" name="warna" >
                                    <label class="form-label">Warna</label>
                                </div>
                            </div>
                            <div class="form-group ">
                                <input  type="radio" name="gender" id="male" class="with-gap" value="jantan">
                                <label for="male">Jantan</label>

                                <input  type="radio" name="gender" id="female" class="with-gap" value="betina">
                                <label for="female" class="m-l-20">Betina</label>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line @error('contact') focused error @enderror">
                                    <input for="contact" type="text" class="form-control" id="contact" name="contact" >
                                    <label class="form-label">Kontak yang dapat di hubungi (disarankan menggunakan email / Nomor HP)</label>
                                </div>
                            </div>
                            
                            
                            <div class="form-group form-float">
                                <div class="form-line @error('nama_kalung') focused error @enderror">
                                    <input for="nama_kalung" type="text" class="form-control" id="nama_kalung" name="nama_kalung">
                                    <label class="form-label">Nama yang Terdapat pada kalung (jika ada)</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line @error('last') focused error @enderror">
                                    <input for="last" type="text" class="form-control" id="last" name="last">
                                    <label class="form-label">Terakhir Terlihat di..</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line @error('reward') focused error @enderror">
                                    <input for="reward" type="text" class="form-control" id="reward" name="reward">
                                    <label class="form-label">Imbalan Jika Menemukan</label>
                                    
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line @error('spesial') focused error @enderror">
                                    <textarea for="spesial" name="spesial" id="spesial" cols="30" rows="5" class="form-control no-resize" ></textarea>
                                    <label class="form-label">Ciri Ciri Khusus</label>
                                </div>

                            </div>

                            

                            <div class="form-group col-sm-6  ">
                                <label for="image" class="form-label">Foto</label>
                                <input class="form-control  @error('image')
                                is-invalid
                                @enderror"" type="file" id="image" name="image"  onchange="previewImage()">
                                <img class="img-preview img-fluid mb-2 col-sm-4 ">
                                {{-- <img src="{{ asset('images/123.jpg') }}" class="img-thumbnail mb-2 col-sm-4" > --}}
                            </div>

                            <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
     const jenis = document.querySelector('#jenis');
     const slug = document.querySelector('#slug');

     jenis.addEventListener('change', function() {
        fetch('/post_hewan/tambah/checkSlug?jenis=' + jenis.value)
            .then(response =>response.json())
            .then(data => slug.value = data.slug)
     });

     document.addEventListener('trix-file-accept', function() {
         e.preventDefault();
     })

     
    
     function sertif() {
         const image = document.querySelector('#sertifikat');
         const sertifikatM = document.querySelector('.img-sertif');

        sertifikatM.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            sertifikatM.src = oFREvent.target.result;
        }
     }

     function previewImage() {
         const image = document.querySelector('#image');
         const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
     }
</script>
@endsection