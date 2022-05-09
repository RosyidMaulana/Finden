@extends('home.layouts.main')

@section('home')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="/">Home</a></li>
          <li><a href="/Kehilangan-hewan">Kehilangan</a></li>
        </ol>
        <h2>Kehilangan Hewan Peliharan</h2>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">
          
          
          <div class="col-lg-8 entries">
            @if ($hewan->count())

            @foreach ($hewan as $r )
            <article class="entry">
                
              
              <div class="entry-img">
                <div class="position-absolute px-5 py-3 " style="background-color: rgba(253, 124, 4, 0.815)">
                  <a href="#" class="text-white">{{ $r->category->nama }}</a>
                </div>
                @if ($r->image)
                <img src="{{ asset('storage/' . $r->image ) }}" alt="" class="img-fluid">
                
                @else
                <img src="https://source.unsplash.com/800x600?animal" alt="" class="img-fluid">
                  
                @endif
                {{-- <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid"> --}}
              </div>
              
              <h2 class="entry-title">
                <a href="/kehilangan-hewan/{{ $r->slug }}">{{ $r->name }}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">{{ $r->pelapor->username }}</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{ $r->created_at->diffForHumans() }}</time></a></li>
                  {{-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li> --}}
                  <li class="d-flex align-items-center"><i class="bi bi-server"></i> <a href="blog-single.html">Rp. {{ $r->reward }}</a></li>
                {{-- </ul>
                <br>
                <ul> --}}
                  <li class="d-flex align-items-center"><i class="bi bi-server"></i> <a href="blog-single.html">{{ $r->gender }}</a></li>
                  
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  {{$r->spesial}}
                </p>
                <div class="read-more">
                  <a href="/kehilangan-hewan/{{ $r->slug }}">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->
            @endforeach
            @else
                <p class="text-center fs-4">No post found.</p>
            @endif

            <div class="blog-pagination">
              <ul class="justify-content-center"> 
                {{ $hewan->links() }}
                {{-- <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li> --}}
              </ul>
            </div>

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Search</h3>
                <div class="sidebar-item search-form">
                  <form action="/kehilangan-hewan">
                    @csrf
                    <input type="text" name="search" placeholder="cari...." value="{{ request('search') }}">
                    <button type="submit"><i class="bi bi-search"></i></button>
                  </form>
                </div><!-- End sidebar search formn-->

              <h3 class="sidebar-title">Filter</h3>
              <div class="sidebar-item categories">
                <ul>
                  {{-- <li><a href="#">General <span>(25)</span></a></li> --}}
                  @foreach ($kategori as $k )
                    
                  
                  <form action="/kehilangan-hewan" >
                      @csrf
                      <button name="category" value="{{ $k->nama }}" type="submit"><a >{{ $k ->nama }}
                        <span>(
                          {{-- {{$i = 1, $i < 3, $i++,
                           $sumsum->where('category_id', '=', $i )->count('category_id')}} --}}
                          @for ($i = 1; $i < 3; $i++)
                            
                          {{ $sumsum->where('category_id', '=', $i )->count('category_id')}}
                          @endfor
                         

                        )
                        </span></a></button>
                    </form>
                  
                  @endforeach              
                </ul>
              </div><!-- End sidebar categories-->

              <h3 class="sidebar-title">Filter Jenis kelamin Hewan</h3>
              <div class="sidebar-item tags">
                <ul>
                  <li><form action="/kehilangan-hewan" >
                        @csrf
                        <button name="filter" value="Jantan" type="submit">Jantan</button>
                      </form>
                  </li>
                  <li><form action="/kehilangan-hewan" >
                        @csrf
                        <button name="filter" value="Betina" type="submit">Betina</button>
                      </form>
                  </li>
                  
                 
                </ul>
              </div><!-- End sidebar tags-->

              
              <hr>
              <h3 class="sidebar-title">Postingan Terbaru</h3>
              
              <div class="sidebar-item recent-posts">
                
                <div class="post-item clearfix">
                  {{-- <img src="assets/img/blog/blog-recent-1.jpg" alt=""> --}}
                  @if ($terbaru[0]->image)
                  <img src="{{ asset('storage/' . $terbaru[0]->image ) }}" alt="" >
                  @else
                  <img src="https://source.unsplash.com/800x600?animal" alt="" >
                  @endif
                  <h4><a href="/kehilangan-hewan/{{ $terbaru[0]->slug }}">{{ $terbaru[0]->jenis }}</a></h4>
                  <time datetime="2020-01-01">{{ $terbaru[0]->created_at->diffForHumans() }}</time>
                </div>
                <br>
                <div class="post-item clearfix">
                  {{-- <img src="assets/img/blog/blog-recent-1.jpg" alt=""> --}}
                  @if ($terbaru[1]->image)
                  <img src="{{ asset('storage/' . $terbaru[1]->image ) }}" alt="" >
                  @else
                  <img src="https://source.unsplash.com/800x600?animal" alt="" >
                  @endif
                  <h4><a href="/kehilangan-hewan/{{ $terbaru[1]->slug }}">{{ $terbaru[1]->jenis }}</a></h4>
                  <time datetime="2020-01-01">{{ $terbaru[1]->created_at->diffForHumans() }}</time>
                  
                </div>
                <br>
                <div class="post-item clearfix">
                  {{-- <img src="assets/img/blog/blog-recent-1.jpg" alt=""> --}}
                  @if ($terbaru[2]->image)
                  <img src="{{ asset('storage/' . $terbaru[2]->image ) }}" alt="" >
                  @else
                  <img src="https://source.unsplash.com/800x600?animal" alt="" >
                  @endif
                  <h4><a href="/kehilangan-hewan/{{ $terbaru[2]->slug }}">{{ $terbaru[2]->jenis }}</a></h4>
                  <time datetime="2020-01-01">{{ $terbaru[2]->created_at->diffForHumans() }}</time>
                  
                </div>
                <br>
                
                

              </div><!-- End sidebar recent posts-->
              
            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- En
@endsection