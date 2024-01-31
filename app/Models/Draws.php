<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Draws extends Model
{
    use HasFactory;

    public function tickets()
    {
        return $this->hasMany(Tickets::class);
    }

    public function lotteries()
    {
        return $this->belongsTo(Lotteries::class);
    }

    public function getWinnersByDrawsIds($drawsIds)
    {
        $draws = Draws::whereIn('id', $drawsIds)->get();

        $winners = [];
        foreach ($draws as $draw) {
            foreach ($draw->tickets as $tickets) {
                if ($tickets->number === $draw->won_number) {
                    $winners[] = $tickets->id;
                }
            }
        }
        return $winners;
    }
}
