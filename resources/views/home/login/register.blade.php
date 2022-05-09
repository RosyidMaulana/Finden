@extends('home.layouts.main')

@section('home')
    
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
	<div class="container">
	  <ol>
		<li><a href="/">Home</a></li>
		<li>Registrasi</li>
	  </ol>
	  <h2>Registrasi</h2>
	</div>
  </section><!-- End Breadcrumbs -->
  <section class="contact">
	<div class="container">
		<div class="row justify-content-center" data-aos="fade-up" >
			<div class="col-xl-6 col-lg-9 mt-4">
				<h3>Silahkan registrasi disini, OK!</h3>
				<form form action="/register" method="post"  class="ocid">
					@csrf

                            
					<div class=" form-group">
						<input class="form-control" id="name" type="text" class="@error('name') is invalid @enderror" name="name" placeholder="Nama Lengkap" 
                        velue="{{ old('name') }}" required>
						@error('name')
                            <small>{{ $message }}</small>
                         @enderror
					</div>
                    <div class=" form-group mt-3">
						<input class="form-control" id="username" type="text" class="@error('username') is invalid @enderror" name="username" placeholder="Nama Panggilan" 
                        velue="{{ old('username') }}" required>
						@error('username')
                            <div class="invalid-feedback color-pink" >
                                {{ $message }}
                            </div>
                         @enderror
					</div>
					<div class=" form-group mt-3">
						<input class="form-control"id ="email" type="email" class=" @error('email') is invalid @enderror" name="email" placeholder="Email" 
                        velue="{{ old('email') }}" required>
						@error('email')
                            <div class="invalid-feedback color-pink" >
                                {{ $message }}
                            </div>
                         @enderror
					</div>
					<div class=" form-group mt-3">
						<input class="form-control" id ="password" type="password" class="@error('password') is invalid @enderror" name="password" placeholder="password" 
                        velue="{{ old('password') }}" required>
						@error('password')
                            <div class="invalid-feedback color-pink" >
                                {{ $message }}
                            </div>
                         @enderror
					</div><br>
                    <div class="text-center"><button type="submit">Registrasi</button></div>
				</form>
			</div>
		</div>
  	</div>
</section>
					

                        
                            
                        
    @endsection
    
