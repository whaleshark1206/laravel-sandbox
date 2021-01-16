<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    public function testCommunication()
    {
        $testString = 'テスト表示';

        return $testString;
    }
}
