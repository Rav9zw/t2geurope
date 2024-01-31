<?php

namespace App\Services;

use App\Models\Lotteries;
use App\Models\Tickets;

class Lottery
{

    public function getDrawsIdsByLotteryName($name): array
    {
        $lotteries = Lotteries::where('name', $name)->first();
        $drawsIds = [];

        foreach ($lotteries->draws as $lottery) {
            $drawsIds[] = $lottery->id;
        }

        return $drawsIds;

    }

    public function getEarningStatsByDates($start, $end): array
    {

        $tickets = Tickets::whereBetween('bought_date', [$start, $end])->get();

        $results = [];
        foreach ($tickets as $ticket) {

            $lotteryName = $ticket->draws->lotteries->name;

            $results[$lotteryName] ??= ['earning' => 0, 'cancelled' => 0];
            $results[$lotteryName]['earning'] += $ticket->draws->lotteries->ticket_price;

            if ($this->ticketIsValid($ticket)) {
                $results[$lotteryName]['cancelled']+= $ticket->draws->lotteries->ticket_price;
            }


        }

        return $results;

    }


    private function ticketIsValid($ticket): bool
    {
        return !($ticket->bought_date > $ticket->draws->draw_date);
    }


}
