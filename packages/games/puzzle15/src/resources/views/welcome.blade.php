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
                            You are logged in!
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
                    <a href="{{ url('/home') }}">На главную</a>
                    <a href="{{ url('/api/game/create') }}">Create game</a>
                    <a href="{{ url('/logout') }}">Выйти</a>
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


