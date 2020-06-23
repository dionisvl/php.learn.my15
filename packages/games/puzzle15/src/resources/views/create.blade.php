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

            <form action="{{route('game.store')}}">
{{--                <input type="hidden" value="11,13,14,15,1,2,3,6,5,4,7,8,9,0,10,12" name="gameString">--}}
                <button type="submit">Создать новую игру 4х4</button>
            </form>
        </div>
    </div>
@endsection


