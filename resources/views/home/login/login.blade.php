@extends('home.layouts.main')

@section('home')
	
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
	<div class="container">
	  <ol>
		<li><a href="/">Home</a></li>
		<li>Login</li>
	  </ol>
	  <h2>Login</h2>
	</div>
  </section><!-- End Breadcrumbs -->


  <div class="row">
					
	@if (session()->has('success'))
				
		<h3 class="text-center" >{{ session('success') }}</h3>
		<br>
	
		@endif
	@if (session()->has('salahlogin'))
				
		<h3 class="text-center " >{{ session('salahlogin') }}</h3>
		<br>
		{{-- <p class="font-bold col-teal">Text teal color</p> --}}
		@endif
</div>
<section class="contact">
	<div class="container">
		<div class="row justify-content-center" data-aos="fade-up" >
			<div class="col-xl-6 col-lg-9 mt-4">
				<h3>Hai, Selamat datang!</h3>
				<form form action="/login" method="post"  class="ocid">
					@csrf
					
					<div class=" form-group">
						<input class="form-control" type="email" class="@error ('email') is-invalid @enderror" name="email" id="email" placeholder="Alamat Email" required>
						@error('email')
							<div class="invalid-feedback">
							{{ $message }}
							</div>
						@enderror
					</div>
					
					
					<div class=" form-group mt-3">
					
					<input class="form-control" type="password" class=" @error ('email') is-invalid @enderror" name="password" id="password" placeholder="Password" required>
						@error('password')
							<div class="invalid-feedback">
							{{ $message }}
							</div>
						@enderror
					</div>
					
					

					<small class="d-block text-center">Belum Registrasi? <a href="/register/create">Registrasi Sekarang!</a></small><br>
					<div class="text-center"><button type="submit">Login</button></div>
				</form>
			</div>
		</div>
  	</div>
</section>





		@endsection
	
	
	
