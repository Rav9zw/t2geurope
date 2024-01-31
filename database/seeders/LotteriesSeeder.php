<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lotteries;

class LotteriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [1, 'GG World Million', 10.49, 300.00],
            [2, 'GG World X', 12.99, 400.00],
        ];

        $keys = ['id', 'name', 'ticket_price', 'prize'];

        foreach ($data as $row) {
            $rowData = array_combine($keys, $row);
            Lotteries::create($rowData);
        }
    }
}
