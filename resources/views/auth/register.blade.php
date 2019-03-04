@extends('layout')

@section('content')

<div class="container section">
    <h2 class="pageTitle">Реєстрація:</h2>

    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <div class="column">
            <label for="name" class="control-label">Ім'я:</label>
            </div>
            <div class="column">
                <input id="name" type="text" class="form-control input" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <div class="column">
            <label for="email" class="col-md-4 control-label">Пошта:</label>
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

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <div class="column">
            <label for="password" class="col-md-4 control-label">Введіть пароль:</label>
            </div>
            <div class="column">
                <input id="password" type="password" class="form-control input" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="column">
            <label for="password-confirm" class="col-md-4 control-label">Повторіть пароль:</label>
            </div>
            <div class="column">
                <input id="password-confirm" type="password" class="form-control input" name="password_confirmation" required>
            </div>
        </div>

        <div class="column">
            <button type="submit" class="button is-white">
                Зареєструватись
            </button>
        </div>
    </form>

</div>
@endsection
