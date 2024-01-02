


<div>
    <div class="book-{{ $slug }}target{{ $page + 1 }} d-none justify-center">
        <h3>{{$chapter}}</h3>
       <ol>
        {{-- @dd($verses) --}}
        @foreach ($verses as $verse)
             <li>{{$verse}}</li>
        @endforeach
       </ol>
    </div>

</div>
