@extends('layout')

@section('content')

<div class="hero-body">
        <div class="columns">
          <div class="column">
                <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                <thead>
                <tr>
                    <th>id:</th>
                    <th>Name:</th>
                    <th>E-Mail:</th>
                <tr>
                </thead>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                </tr>
                @endforeach
                </table>
                {{ $users->links() }}
          </div>
        </div>
</div>


@endsection