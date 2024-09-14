<?php

namespace App\Controllers;

class PageController
{
    public function about()
    {
        return view('about');
    }

    public function contacts()
    {
        return view('contacts');
    }
}