@extends('home.layouts.main')

@section('home')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="/">Home</a></li>
          <li><a href="/kehilangan-orang">Kehilangan</a></li>
          <li><a href="/kehilangan-orang/{{ $hai->slug }}">single</a></li>
        </ol>
        <h2>single</li></h2>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= single</li> Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">
          <div class="position-relative px-5 py-3 " style="background-color: rgba(253, 124, 4, 0.815)">
           
            <h3 class="text-white text-center"><b>{{ $hai->category->nama }}</b></h3>
          </div>
          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              
              <div class="swiper-wrapper align-items-center">
                

                <div class="swiper-slide">
                  
                  @if ($hai->image)
                  <img src="{{ asset('storage/' . $hai->image ) }}" alt="" >
                  
                  @else
                  <img src="https://source.unsplash.com/600x400?people" alt="" >
                    
                  @endif
                </div>

                <div class="swiper-slide">
                  <img src="https://source.unsplash.com/600x400?people" alt="">
                </div>

                <div class="swiper-slide">
                  @if ($hai->image)
                  <img src="{{ asset('storage/' . $hai->image ) }}" alt="" >
                  
                  @else
                  <img src="https://source.unsplash.com/600x400?people" alt="" >
                    
                  @endif
                </div>

              </div>
              <div class="swiper-pagination"></div>
              
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Data Informasi</h3>
              <ul>
                <li><strong>Bernama </strong>: {{$hai->name}}</li> </li>
                <li><strong>Jenis kelamin </strong>: {{ $hai->gender}}</li> </li>
                <li><strong>Umur </strong>: {{ $hai->age}}</li> </li>
                <li><strong>Berambut </strong>: {{ $hai->rambut }}</li>
                <li><strong>Warna Mata </strong>: {{ $hai->mata }}</li>
                <li><strong>Tinggi badan </strong>: {{ $hai->tinggi }} cm</li>
                <li><strong>Terakhir terlihat disekitar </strong>: {{ $hai->jatim->nama }}</li>
                <li><strong>Detail tempat terakhir terlihat </strong>: {{ $hai->last }}</li>
                <li><strong>Kontak</strong>: {{ $hai->contact }}</li>
                <li><strong>Reward</strong>: Rp.{{ $hai->reward }}</li>
              </ul>
            </div>
            
          </div>
          <div class="portfolio-description">
            <h2>Penjelasan Tambahan</h2>
            <p>
              {{ $hai->spesial }}  
            </p>
          </div>
        </div>

        
      </div>
    </section><!-- End Portfolio Details Section -->
   
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-8 entries">
            <div class="blog-comments">
              <h4 class="comments-count">{{ $totalComment }} Comments</h4>

              @foreach ($comment as $comments)
                
              @if ($comments->post_id==$hai->id)
              <div id="comment" class="comment">
                <div class="d-flex">
                  <div class="comment-img"><img src="{{ asset('assets/img/blog/comments-2.jpg') }}" alt=""></div>
                  <div>
                    <h5><a href="">{{ $comments->pelapor->name }}</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Balas</a></h5>
                    <time datetime="2020-01-01">{{ $comments->created_at->diffForHumans() }}</time>
                    <p>
                      {{ $comments->komentar }}
                    </p>
                  </div>
                </div>
                  @if ($comments->balas)
                  <div id="comment-reply" class="comment comment-reply">
                    <div class="d-flex">
                      <div class="comment-img"><img src="{{ asset('assets/img/blog/comments-3.jpg') }}" alt=""></div>
                      <div>
                        <h5><a href="">Lynda Small</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Balas</a></h5>
                        <time datetime="2020-01-01">{{ $comments->created_at->diffForHumans() }}</time>
                        <p>
                          {{$comments->balas}}
                        </p>
                      </div>
                    </div>
                  </div>
                  @else
                    <br>
                  @endif

              @else
                <hr>
              @endif
              @endforeach

              

                
{{-- 
                  <div id="comment-reply" class="comment comment-reply">
                    <div class="d-flex">
                      <div class="comment-img"><img src="{{ asset('assets/img/blog/comments-4.jpg') }}" alt=""></div>
                      <div>
                        <h5><a href="">Sianna Ramsay</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Balas</a></h5>
                        <time datetime="2020-01-01">01 Jan, 2020</time>
                        <p>
                          Et dignissimos impedit nulla et quo distinctio ex nemo. Omnis quia dolores cupiditate et. Ut unde qui eligendi sapiente omnis ullam. Placeat porro est commodi est officiis voluptas repellat quisquam possimus. Perferendis id consectetur necessitatibus.
                        </p>
                      </div>
                    </div>

                  </div><!-- End comment reply #2-->

                </div><!-- End comment reply #1--> --}}

              {{-- </div><!-- End comment #2-->  --}}

              

              

              <div class="reply-form">
                <h4>Tambahkan Komentar</h4>
                <p>Alamat email Anda tidak akan dipublikasikan. </p>
                <form method="post" action="../komentar/{{ $hai->slug }}">
                  @csrf
                  <div class="row">
                    <div class="col form-group">  
                      <textarea name="komentar" id="komentar"  class="form-control" placeholder="Komentar Anda*"></textarea>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Kirim Komentar</button>

                </form>

              </div>

            </div><!-- End blog comments -->

          </div><!-- End blog entries list -->


          </div><!-- End blog sidebar --> 

        </div>

      </div>
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->
  @endsection