<?php

namespace Tests\Unit;

use App\Models\Lotteries;
use App\Models\Draws;
use App\Models\Tickets;
use App\Services\Lottery;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class LotteryTest extends TestCase
{
    use RefreshDatabase;

    public function testLotteryNameWithNoDraws(): void
    {
        $lotteries = Lotteries::factory()->create();

        $lotteryService = new Lottery();
        $draws = $lotteryService->getDrawsIdsByLotteryName($lotteries->name);

        $this->assertEquals([], $draws);
    }

    public function testGetEarningStatsByDates(): void
    {

        $lottery = Lotteries::factory()->create();

        $draw = Draws::factory()->create([
            'lotteries_id' => $lottery->id,
            'draw_date' => '2023-10-02',
        ]);

        $ticket = Tickets::factory()->create([
            'draws_id' => $draw->id,
            'bought_date' => '2023-10-01',
        ],);

        $invalidTicket = Tickets::factory()->create([
            'draws_id' => $draw->id,
            'bought_date' => '2023-10-03',
        ]);

        $lotteryService = new Lottery();
        $earningStats = $lotteryService->getEarningStatsByDates('2023-10-01', '2023-10-31');
        $sumEarnings = $ticket->draws->lotteries->ticket_price + $invalidTicket->draws->lotteries->ticket_price;

        $this->assertEquals($earningStats[$lottery->name]['earning'], $sumEarnings);
        $this->assertEquals($earningStats[$lottery->name]['cancelled'], $invalidTicket->draws->lotteries->ticket_price);
    }
}
