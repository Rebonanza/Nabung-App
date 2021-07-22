<?php

namespace App\Controllers;

class Portfolio extends BaseController
{
    public function index()
    {
        return view('portfolio/index');
    }
    public function nabung()
    {
        return view('portfolio/nabung');
    }
}
