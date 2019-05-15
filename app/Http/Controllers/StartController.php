<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartController extends Controller
{
    public function index()
    {
        $urlData = [
            ['label' => 'Test 1', 'url' => 'http://google.com'],
            ['label' => 'Test 2', 'url' => 'http://google.com'],
        ];

        return view('start.index', [
            'url_data' => $urlData
        ]);
    }

    public function json()
    {
        return [
            ['label' => 'Test 1', 'url' => 'http://google.com'],
            ['label' => 'Test 2', 'url' => 'http://google.com'],
        ];
    }
}
