<?php

namespace App\Http\Controllers;

use App\Services\CodeDecrypt;

class CodeDecryptController extends Controller
{
    public function index(CodeDecrypt $codeDecrypt)
    {
        $message = ')g!ld, j(!ad "> h>£ gdol>!o!" o!(!c>£';
        $decryptedMessage = $codeDecrypt->decrypt($message);

        return view('CodeBreaker/index', compact('message', 'decryptedMessage'));
    }


}
