<?php
namespace App\Units\Test;

use App\Constracts\Test;

class TestC implements Test
{
    public function index()
    {
        return 'this is constracts --- index';
    }

    public function hello()
    {
        return 'this is constracts --- hello';
    }
}
