@extends('layout')

@section('content')

<div class="container section">
    <h2 class="pageTitle">Вхід в особистий кабінет:</h2>

    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <div class="column">
                <label class="control-label">E-mail або ім'я користувача</label>
            </div>
            <div class="column">
                <input id="email" type="email" placeholder="Введіть ім'я користувача" class="form-control input" name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>


        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <div class="column">
                <label for="password" class="control-label">Пароль:</label>
            </div>
            <div class="column">
                <input id="password" type="password" placeholder="Введіть пароль" class="form-control input" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="column">
                <label class="checkbox">
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Запам'ятати мене
                </label>
            </div>
        </div>

        <div class="column">
            <button type="submit" class="button is-white">
                Увійти
            </button>
        </div>
        <div class="column">
            <a class="btn btn-link" href="{{ route('password.request') }}">
                Відновити пароль
            </a>
        </div>
    </form>

</div>


<script>
</script>


@endsection
