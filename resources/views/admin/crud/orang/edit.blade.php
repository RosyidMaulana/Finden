@extends('admin.main')

@section('admin')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Edit Data Kehilangan Anak/Kerabat</h2>
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
                    {{-- <div class="col-lg-8"></div> --}}
                    <div class="body">
                        <form  method="post" action="{{ route('crud.update', $post)}}" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="col-sm-8"></div>
                            <div class="form-group form-float  ">
                                <div class="form-line hidden">
                                    <input for="category_id" type="text" class="form-control " id="category_id" name="category_id"  
                                    value="{{ $category->find(2)->id}}" readonly>
                                    
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line @error('name') focused error @enderror">
                                    <input for="name" type="text" class="form-control" id="name" name="name" value="{{ old('name', $post->name) }}">
                                    <label class="form-label active">Nama Lengkap</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line ">
                                    <input for="slug" type="text" class="form-control" id="slug" name="slug"  readonly value="{{ old('slug', $post->slug) }}">
                                    <label class="form-label active"></label>
                                </div>
                            </div>
                            <div class="form-group ">
                                <input  type="radio" name="gender" id="male" class="with-gap" value="Perempuan">
                                <label for="male">Perempuan</label>

                                <input  type="radio" name="gender" id="female" class="with-gap" value="Laki-laki">
                                <label for="female" class="m-l-20">Laki-laki</label>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line @error('age') focused error @enderror">
                                    <input for="age" type="text" class="form-control" id="age" name="age" value="{{ old('age', $post->age) }}">
                                    <label class="form-label">Umur</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line @error('contact') focused error @enderror">
                                    <input for="contact" type="text" class="form-control" id="contact" name="contact" value="{{ old('contact', $post->contact) }}">
                                    <label class="form-label">Kontak yang dapat di hubungi (disarankan menggunakan email / Nomor HP)</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line @error('rambut') focused error @enderror">
                                    <input for="rambut" type="text" class="form-control" id="rambut" name="rambut" value="{{ old('rambut', $post->rambut) }}">
                                    <label class="form-label">Jenis Dan Warna rambut</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line @error('mata') focused error @enderror">
                                    <input for="mata" type="text" class="form-control" id="mata" name="mata" value="{{ old('mata', $post->mata) }}">
                                    <label class="form-label">Warna Mata</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line @error('tinggi') focused error @enderror">
                                    <input for="tinggi" type="text" class="form-control" id="tinggi" name="tinggi" value="{{ old('tinggi', $post->tinggi) }}">
                                    <label class="form-label">Tinggi badan</label>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <label class="form-label text-muted">Terakhir Terlihat Di..</label>
                                    <select class="form-control show-tick" name="jatim_id">
                                        <option value="">-- Silahkan pilih --</option>
                                        @foreach ($jatim as $j )
                                        {{-- <option value="{{ $j->id }}">{{ $j->nama }}</option>10</option> --}}
                                        @if (old('jatim_id',$post->jatim_id) ==$j->id)

                                        <option value="{{ $j->id }}" selected>{{ $j->nama }}</option>
                                        @else

                                        <option value="{{ $j->id }}" >{{ $j->nama }}</option>
                                        @endif
                                                                            
                                        @endforeach
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line @error('last') focused error @enderror">
                                    <input for="last" type="text" class="form-control" id="last" name="last"  value="{{ old('last', $post->last) }}">
                                    <label class="form-label">Rincian Terakhir Terlihat</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line @error('reward') focused error @enderror">
                                    <input for="reward" type="text" class="form-control" id="reward" name="reward" value="{{ old('reward', $post->reward) }}">
                                    <label class="form-label">Imbalan Jika Menemukan</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line @error('spesial') focused error @enderror">
                                    <textarea for="spesial" name="spesial" id="spesial" cols="30" rows="5" class="form-control no-resize" 
                                    >{{ old('spesial', $post->spesial) }}</textarea>
                                    <label class="form-label">Ciri Ciri Khusus</label>
                                </div>
                            </div>
                            <div class="form-group col-sm-6  ">
                                <label for="image" class="form-label">Foto</label><br>
                                <input type="hidden" name="oldImage" value="{{ $post->image }}">
                                @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image ) }}"  class="img-fluid mb-2 col-sm-4 d-block">
                                @else                                   
                                <img class="img-preview img-fluid mb-2 col-sm-4 d-block">
                                
                                @endif
                                {{-- <img src="{{ asset('images/123.jpg') }}" class="img-thumbnail mb-2 col-sm-4" > --}}
                                <input class="form-control  @error('image')is-invalid @enderror" type="file" id="image" name="image"  onchange="previewImage()">
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
     const name = document.querySelector('#name');
     const slug = document.querySelector('#slug');

     name.addEventListener('change', function() {
        fetch('/post_orang/crud/checkSlug?name=' + name.value)
            .then(response =>response.json())
            .then(data => slug.value = data.slug)
     });

     document.addEventListener('trix-file-accept', function() {
         e.preventDefault();
     })

     
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