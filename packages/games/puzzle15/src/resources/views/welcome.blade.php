@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @auth
                            You are logged in!<br>
                            userId: {!! $userId!!}<br>
                        @endauth
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="title m-b-md">
                <h1>Пятнашки</h1>
            </div>

            <div class="links">
                @auth
                    <div>Вы можете:</div>
                    @isset($gameId)
                        <a class='button' href="{{route('game.show',['gameId' => $gameId])}}">
                            продолжить не законченную игру ({!! $gameId !!})</a> или
                    @endisset

                    <a class="button" href="{{ url('/game/create') }}">Создать новую игру</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        </div>
    </div>
@endsection


