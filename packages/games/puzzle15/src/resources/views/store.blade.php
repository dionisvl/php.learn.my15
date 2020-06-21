@extends('puzzle::layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div>Игра успешно созданна.</div>
                    <div>Сгенерированная строка для игры:</div>
<pre>
    <code id="gameString">{!! json_encode($gameString) !!}</code>
</pre>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>

                    <a href="{{route('game.show')}}">Начать игру</a>
                </div>
            </div>
        </div>
    </div>

@endsection
