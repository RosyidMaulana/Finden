<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Halo!!</div>
                  <div class="card-body">
                   @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                           {{ __('A fresh mail has been sent to your email address.') }}
                       </div>
                   @endif
                   <h1>{{ $name }}</h1>
                    <h2>Dari {{ $email }}</h2>
                   <p>{!! $content !!}</p>
               </div>
           </div>
       </div>
   </div>
</div>