<?php

namespace App\Http\Controllers;

use App\Models\Tickets;
use App\Services\Lottery;

class EarningStatsController extends Controller
{
    public function index(Lottery $lottery)
    {
        $results = $lottery->getEarningStatsByDates('2021-07-01 00:00:00', '2021-07-31 23:59:59');

        return view('Lottery/stats', ['results' =>$results]);
    }
}
