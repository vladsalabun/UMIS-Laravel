@extends('layout')

@section('content')
<div class="container section">


    <h2 class="pageTitle">Відновлення паролю:</h2>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form class="form-horizontal" method="POST" action="{{ route('password.email') }}" autocomplete="off">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="column">
                    <label for="email" class="col-md-4 control-label">Введіть E-Mail:</label>
                </div>
                <div class="column">
                    <input id="email" type="email" class="form-control input" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="column">
                <button type="submit" class="button is-white">
                    Відновити
                </button>
            </div>
        </form>


</div>
@endsection
