@extends('layout')

@section('content')

<div class="hero-body">
    <div class="container">
        <div class="columns">
          <div class="column">
            <p class="has-text-centered intimeLogoDescription">Вітаємо, {{ Auth::user()->name }}!</p>
          </div>
        </div>
    </div>
</div>

@endsection
