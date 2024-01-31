<?php

namespace App\Services;

class CodeKeys
{
    private array $lcdArray = [0 => [0 => ' _ ',
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

    public function getLcdArray(): array
    {
        return $this->lcdArray;
    }

    public function generateLcdNumber($number = null): ?array
    {

        if (is_null($number)) {
            return null;
        }

        $lcdArray = $this->getLcdArray();
        $lcdNumber = [];

        foreach (str_split($number) as $key => $digit) {
            foreach ($lcdArray[$digit] as $lcdDigit) {
                $lcdNumber[$key][] = $lcdDigit;
            }
        }
        return $lcdNumber;
    }


}
