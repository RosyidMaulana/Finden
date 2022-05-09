@extends('home.layouts.main')

@section('home')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="/">Home</a></li>
          <li><a href="/Kehilangan-orang">Kehilangan</a></li>
        </ol>
        <h2>Kehilangan</h2>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">
          
          
          <div class="col-lg-8 entries">
            @if ($orang->count())

            @foreach ($orang as $r )
            <article class="entry">
                
              
              <div class="entry-img">
                <div class="position-absolute px-5 py-3 " style="background-color: rgba(253, 124, 4, 0.815)">
                  <a href="#" class="text-white">{{ $r->category->nama }}</a>
                </div>
                @if ($r->image)
                <img src="{{ asset('storage/' . $r->image ) }}" alt="" class="img-fluid">
                
                @else
                <img src="https://source.unsplash.com/800x600?people" alt="" class="img-fluid">
                  
                @endif
                
              </div>
              
              <h2 class="entry-title">
                <a href="/kehilangan-orang/{{ $r->slug }}">{{ $r->name }}</a> 
                
              </h2>
              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">{{ $r->pelapor->username }}</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="#">12 Comments</a></li>
                  
                  <li class="d-flex align-items-center"><i class="bi bi-gender-ambiguous"></i> <a href="blog-single.html">{{ $r->gender }}</a></li>
                  {{-- <li class="d-flex align-items-center"><i class="bi bi-server"></i> <a href="blog-single.html">{{ $r->jatim->nama }}</a></li> --}}
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  {{$r->spesial}}
                </p>

                <p>Reward <a href="#">Rp.{{ $r->reward }}</a></p>
                <div class="read-more">
                  <i class="bi bi-clock"></i> <small>{{ $r->created_at->diffForHumans() }}</small>
                  
                  <a href="/kehilangan-orang/{{ $r->slug }}">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->
            @endforeach
            @else
                <p class="text-center fs-4">No post found.</p>
            @endif

            <div class="blog-pagination">
              <ul class="justify-content-center"> 
                {{ $orang->links() }}
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
                  <form action="/kehilangan-orang">
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
                    
                  
                  <form action="/kehilangan-orang" >
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

              <h3 class="sidebar-title">Filter Jenis kelamin</h3>
              <div class="sidebar-item tags">
                <ul>
                  <li><form action="/kehilangan-orang" >
                        @csrf
                        <button name="filter" value="Laki-laki" type="submit">Laki Laki</button>
                      </form>
                  </li>
                  <li><form action="/kehilangan-orang" >
                        @csrf
                        <button name="filter" value="perempuan" type="submit">Perempuan</button>
                      </form>
                  </li>
                  
                 
                </ul>
              </div><!-- End sidebar tags-->

              <h3 class="sidebar-title">Filter Daerah</h3>
              <div class="sidebar-item tags">
                <ul>
                  <li><form action="/kehilangan-orang" >
                        @csrf
                        <select class="form-select" name="jatim">
                          <option selected>Pilih Daerah</option>
                          @foreach ($jatim as $r)
                            
                          <option value="{{ $r->nama }}">{{ $r->nama }}</option>
                          @endforeach
                        </select>
                        <br>
                        <button  type="submit" >Filter Daerah</button>
                        {{-- <select class="form-control" name="jatim_id">
                          <option value="">-- Silahkan pilih --</option>
                          @foreach ($jatim as $j )
                          
                          @if (old('jatim_id') ==$j->id)

                          <option value="{{ $j->id }}" selected>{{ $j->nama }}</option>
                          @else

                          <option value="{{ $j->id }}" >{{ $j->nama }}</option>
                          @endif
                                                              
                          @endforeach
                          
                        </select> --}}
                        
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
                  <img src="https://source.unsplash.com/800x600?people" alt="" >
                  @endif
                  <h4><a href="blog-single.html">{{ $terbaru[0]->name }}</a></h4>
                  <time datetime="2020-01-01">{{ $terbaru[0]->created_at->diffForHumans() }}</time>
                </div>
                <br>
                <div class="post-item clearfix">
                  {{-- <img src="assets/img/blog/blog-recent-1.jpg" alt=""> --}}
                  @if ($terbaru[1]->image)
                  <img src="{{ asset('storage/' . $terbaru[1]->image ) }}" alt="" >
                  @else
                  <img src="https://source.unsplash.com/800x600?people" alt="" >
                  @endif
                  <h4><a href="blog-single.html">{{ $terbaru[1]->name }}</a></h4>
                  <time datetime="2020-01-01">{{ $terbaru[1]->created_at->diffForHumans() }}</time>
                  
                </div>
                <br>
                <div class="post-item clearfix">
                  {{-- <img src="assets/img/blog/blog-recent-1.jpg" alt=""> --}}
                  @if ($terbaru[2]->image)
                  <img src="{{ asset('storage/' . $terbaru[2]->image ) }}" alt="" >
                  @else
                  <img src="https://source.unsplash.com/800x600?people" alt="" >
                  @endif
                  <h4><a href="blog-single.html">{{ $terbaru[2]->name }}</a></h4>
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