@extends('layout')
@section('content')


<div class="hero-body">
    <div class="columns">
        <div class="column has-text-centered">
            <h2 class="title">«{{ $word->word }}»</h2>
                <div class="wordExplanation">
                    @foreach ($partOfSpeechArray as $partOfSpeech => $explain)
                        @php
                            $currentMethod = 'ukr_'.$partOfSpeech;
                        @endphp
                        @if ($word->$currentMethod == 1)
                            @if (is_array($explain))
                                @foreach ($explain as $partOfSpeechName => $partOfSpeechParam)
                                    <p>{{ $partOfSpeechName }}</p>
                                    @php
                                        $wordParam = App\test::wordParam($currentMethod,$word->id);
                                    @endphp
                                    @foreach ($wordParam as $wordParamName => $wordParamValue)
                                        @if ($wordParamValue == 1)

                                            @php
                                                $tmpParamName = substr($wordParamName,4);
                                            @endphp

                                            @if ($tmpParamName == true)
                                                <p>{{ $partOfSpeechParam[$tmpParamName] }}</p>
                                            @endif
                                        @endif
                                    @endforeach
                                @endforeach
                            @endif
                        @endif
                    @endforeach
                </div>
        @if (count($suggestions))
            <h6 class="has-text-centered subtitle">Приклади вживання слова:</h6>
            <div class="wordExplanation">
                @php
                    $rows = count($suggestions[0]);
                @endphp
                @for ($i = 0; $i < $rows ; $i++)
                    @if(($i % 3) == 0)
                        <div class="columns">
                    @endif
                        <div class="column">
                            {{ $suggestions[0][$i] }}
                        </div>
                    @if (($i % 3) == 2)
                        </div>
                    @endif
                @endfor
             </div>
        @endif

         </div>
    </div>
</div>
@endsection
