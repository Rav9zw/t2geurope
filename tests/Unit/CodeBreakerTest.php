<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\CodeDecrypt;

class CodeBreakerTest extends TestCase
{
    private CodeDecrypt $codeDecrypt;

    public function setUp(): void
    {
        $this->codeDecrypt = new CodeDecrypt();
    }

    public function testDecryptMessage()
    {
        $decryptedMessage = $this->codeDecrypt->decrypt('! ) " ( £ * % & > < @ a b c d e f g h i j k l m n o');

        $this->assertEquals($decryptedMessage, 'a b c d e f g h i j k l m n o p q r s t u v w x y z');
    }


    public function testKeyDoesntExist()
    {
        $decryptedMessage = $this->codeDecrypt->decrypt('+ =');

        $this->assertEquals($decryptedMessage, '+ =');
    }

    public function testEncryptMessage()
    {
        $message = 'Zażółć, gęślą jaźń.';
        $encryptedMessage = $this->codeDecrypt->encrypt($message);
        $decryptedMessage = $this->codeDecrypt->decrypt($encryptedMessage);


        $this->assertEquals($decryptedMessage, $message);
    }

}

