<?php

namespace App\Http\Controllers;

use App\Services\Lottery;
use App\Models\Draws;

class WinningTicketController extends Controller
{

    public function index(Lottery $lottery, Draws $draws)
    {
        $drawsIds = $lottery->getDrawsIdsByLotteryName('GG World X');

        $winners = $draws->getWinnersByDrawsIds($drawsIds);

        return view('Lottery/index', ['winners' => $winners]);
    }
}
