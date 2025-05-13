<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function homepage(): string
    {
        return view('homepage');
    }
}
