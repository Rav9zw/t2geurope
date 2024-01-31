<?php

namespace App\Http\Controllers;
use App\Models\Draws;
class TimeCounterController extends Controller
{
    public static function index()
    {
        $draw = Draws::latest('draw_date')->first();
        return view('TimeCounter/index',['drawDate'=>$draw->draw_date]);
    }

}
