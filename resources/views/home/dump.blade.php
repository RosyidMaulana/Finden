@foreach ( $sumsum as $s ) {}
        
@endforeach{{ $s->nama }}
<hr>
{{ $sum }}

    
{{-- @foreach ($sumsum->slice(0, 1) as $s ) --}}
{{-- 
@for ($i = 1; $i<=$sumsum->length; $i++)
            
        {{ ($sumsum->where('category_id', '=', $i )->count('category_id'))}}
        @endfor --}}
        {{-- @endforeach                     --}}
    

{{-- @foreach ($sumsum as $ha)
                          {{ $ha }}
                          @endforeach --}}
                          {{-- @for ($sumsum->category_id = 0; $sumsum->category_id < 2; $sumsum->category_id++)
                          {{ $sumsum->category_id }}
                          @endfor --}}