<?php

namespace App\Services;

class CodeDecrypt
{

    private $key = [
        '!' => 'a',
        ')' => 'b',
        '"' => 'c',
        '(' => 'd',
        '£' => 'e',
        '*' => 'f',
        '%' => 'g',
        '&' => 'h',
        '>' => 'i',
        '<' => 'j',
        '@' => 'k',
        'a' => 'l',
        'b' => 'm',
        'c' => 'n',
        'd' => 'o',
        'e' => 'p',
        'f' => 'q',
        'g' => 'r',
        'h' => 's',
        'i' => 't',
        'j' => 'u',
        'k' => 'v',
        'l' => 'w',
        'm' => 'x',
        'n' => 'y',
        'o' => 'z',
        '1' => 'ą',
        '2' => 'ć',
        '3' => 'ę',
        '4' => 'ł',
        '5' => 'ń',
        '6' => 'ó',
        '7' => 'ś',
        '8' => 'ź',
        '9' => 'ż',
    ];

    public function decrypt(string $message): string
    {
        $decryptedMessage = [];
        $signs = mb_str_split($message,1,'utf-8');

        foreach ($signs as $sign) {

            if (key_exists($sign, $this->key)) {
                $decryptedMessage[] = $this->key[$sign];
            } else {
                $decryptedMessage[] = $sign;
            }

        }

        return implode($decryptedMessage);

    }

    public function encrypt(string $message): string
    {
        $decryptedMessage = [];
        $signs = mb_str_split($message,1,'utf-8');

        $encodeKey = array_flip($this->key);

        foreach ($signs as $sign) {

            if (key_exists($sign, $encodeKey)) {
                $decryptedMessage[] = $encodeKey[$sign];
            } else {
                $decryptedMessage[] = $sign;
            }

        }

        return implode($decryptedMessage);

    }


}
