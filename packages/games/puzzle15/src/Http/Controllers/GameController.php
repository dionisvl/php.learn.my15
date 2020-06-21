<?php

namespace Games\Puzzle15\Http\Controllers;

use App\Http\Controllers\Controller;
use Games\Puzzle15\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('puzzle::create');
    }

    /**
     * В запрос МОЖЕТ передаваться строка из 15 символов, считать, что эта последовательность является отсортированной корректно.
     * Если строка не передана, она должна сгенерироваться на сервере случайно.
     *
     * @param \Illuminate\Http\Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $row = 4;
        $col = 4;

        if (!empty($request->gameString)) {
            $gameString = explode(',', $request->gameString);
        } else {
            for ($i = 1; $i <= $row * $col; $i++) {
                $gameString[] = $i-1;
            }
            shuffle($gameString);
        }
        $k = 0;
        $gameStringBox = [];
        for ($i = 0; $i < $row; $i++) {
            for ($j = 0; $j < $col; $j++) {
                $k++;
                $gameStringBox[$i][$j] = $gameString[$k-1];
            }
        }

        $game = new Game;
        $game->user_id = Auth::id();
        $game->order_symbols_map = json_encode($gameStringBox);
        $game->save();
        $id = $game->id;
        return view('puzzle::store', ['gameString' => $gameStringBox, 'gameId' => $id]);

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Game $game
     * @return Response
     */
    public function show(Game $game)
    {
        $gameId = 1;
        $gameStringBox = [[10,15,2,9],[6,1,5,12],[11,4,13,0],[8,3,14,7]];
        return view('puzzle::start',['gameId'=>$gameId,'gameString' => $gameStringBox]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Game $game
     * @return Response
     */
    public function edit(Game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Game $game
     * @return Response
     */
    public function update(Request $request, Game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Game $game
     * @return Response
     */
    public function destroy(Game $game)
    {
        //
    }
}
