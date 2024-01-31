<?php

namespace Database\Seeders;

use App\Models\Draws;
use Illuminate\Database\Seeder;

class DrawsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [1, 1, '2021-06-15 14:00:00', 32],
            [2, 1, '2021-07-15 14:00:00', 47],
            [3, 1, '2021-08-15 14:00:00', 5],
            [4, 1, '2021-09-15 14:00:00', null],
            [5, 2, '2021-07-01 16:00:00', 29],
            [6, 2, '2021-08-01 16:00:00', 4],
            [7, 2, '2021-09-01 16:00:00', null],
            [8, 2, '2024-02-23 16:00:00', null],
        ];

        $keys = ['id', 'lotteries_id', 'draw_date', 'won_number'];

        foreach ($data as $row) {
            $rowData = array_combine($keys, $row);
            Draws::create($rowData);
        }


    }
}
