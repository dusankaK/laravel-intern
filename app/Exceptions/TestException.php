<?php

namespace App\Exceptions;

use Exception;

class TestException extends Exception
{
    public function render()
    {
        return response()->json(['foo' => 'bar']);
    }
}