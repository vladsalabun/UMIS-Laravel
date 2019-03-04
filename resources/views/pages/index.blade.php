@extends('layout')

@section('content')
<div class="hero-body">
    <div class="container">
        <div class="columns">
          <div class="column">
            <h2 class="title has-text-centered intimeLogo">УМІС</h2>
            <p class="has-text-centered intimeLogoDescription">Українська мовно-інформаційна система</p>
            <p class="has-text-centered intimeLogoDescriptionMini"></p>
          </div>
        </div>
    </div>
</div>

<section class="hero is-medium">
<div class="hero-body">
    <div class="container has-text-centered">

        <form class="form-horizontal" method="POST" action="{{ URL::to('/word/') }}" id="wordSearch" autocomplete="off">
        {{csrf_field()}}
        <div class="field is-grouped">
          <p class="control is-expanded">

            <input name="word" class="input" id="searchWord" type="text" placeholder="Введіть слово українською">

          </p>
          <p class="control">
            <button class="button intime-button" form="wordSearch">
              Пошук
            </a>
          </p>
        </div>
        </form>

    </div>

    <div class="container has-text-centered">
    <span class="example_explanation">наприклад:</span> <span class="example_word" id="example_word">{{ $word->word }}</span>
    </div>

<script>

    // Запуск функции по таймеру:
    $(document).on('click','.example_word',function(){
        var t = $("span#example_word").text();
        $('#searchWord').val(t);
    });
</script>

</div>
</section>
@endsection
