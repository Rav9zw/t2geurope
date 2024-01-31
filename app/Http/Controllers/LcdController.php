<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CodeKeys;

class LcdController extends Controller
{
    public function index(CodeKeys $codeKeys)
    {
        $number = session()->get('number');
        $lcdNumber = $codeKeys->generateLcdNumber($number);

        return view('Lcd/index', ['lcdNumber' => $lcdNumber]);
    }


    public function showNumber(Request $request)
    {
        session()->flush();
        $validated = $request->validate(['number' => 'required|integer']);
        session()->put('number', $validated['number']);

        return redirect()->route('lcd');
    }
}
