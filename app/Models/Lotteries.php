<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lotteries extends Model
{
    use HasFactory;

    public function draws()
    {
        return $this->hasMany(Draws::class);
    }

    
}
