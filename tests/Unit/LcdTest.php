<?php

namespace Tests\Unit;

use Mockery;
use PHPUnit\Framework\TestCase;
use App\Services\CodeKeys;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Http\Controllers\LcdController;

class LcdTest extends TestCase
{

    protected CodeKeys $codeKeys;

    protected function setUp(): void
    {
        $this->codeKeys = new CodeKeys();
    }

    public function testGenerateLcdNumberWithSingleDigit()
    {
        $expected = [0 => [0 => ' _ ',
            1 => '| |',
            2 => '|_|'],
            1 => [0 => '   ',
                1 => '  |',
                2 => '  |'],

            2 => [0 => ' _ ',
                1 => ' _|',
                2 => '|_ '],

            3 => [0 => ' _ ',
                1 => ' _|',
                2 => ' _|'],
            4 => [0 => '   ',
                1 => '|_|',
                2 => '  |'],
            5 => [0 => ' _ ',
                1 => '|_ ',
                2 => ' _|'],
            6 => [0 => ' _ ',
                1 => '|_ ',
                2 => '|_|'],
            7 => [0 => ' _ ',
                1 => '  |',
                2 => '  |'],
            8 => [0 => ' _ ',
                1 => '|_|',
                2 => '|_|'],
            9 => [0 => ' _ ',
                1 => '|_|',
                2 => ' _|'],
        ];
        for ($i = 0; $i < 1; $i++) {
            $this->assertEquals($expected[$i], $this->codeKeys->generateLcdNumber($i)[0]);
        }
    }


    public function testGenerateLcdNumberWithMultipleDigits()
    {
        $expected = [
            [0 => ' _ ',
                1 => '  |',
                2 => '  |'],
            [0 => '   ',
                1 => '|_|',
                2 => '  |'],
            [0 => ' _ ',
                1 => '|_|',
                2 => ' _|'],


        ];

        $numbers = 749;
        $this->assertEquals($expected, $this->codeKeys->generateLcdNumber($numbers));

    }

    public function testGenerateLcdNumberWithEmptyField()
    {
        $this->assertNull($this->codeKeys->generateLcdNumber());
    }


}
