@extends('layout')
@section('content')
    
<div class="hero-body">
        <div class="columns">
          <div class="column">
                <h2 class="has-text-centered title">all words</h2>
                <p class="has-text-centered">id: {{ $word->id }}</p>
                <p class="has-text-centered">word: <a href="https://vocabulary.yy/word/{{ $word->id }}">{{ $word->word }}</a></p>
          </div>
        </div>
</div>
    
@endsection