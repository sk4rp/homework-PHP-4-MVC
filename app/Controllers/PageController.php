<?php

namespace App\Controllers;

use Philo\Blade\Blade;

class PageController
{
    protected Blade $blade;

    public function __construct()
    {
        $views = __DIR__ . '/../Views';
        $cache = __DIR__ . '/../../cache';
        $this->blade = new Blade($views, $cache);
    }

    public function home(): void
    {
        echo $this->blade->view()?->make('home', [
            'title' => 'Home Page',
            'content' => 'Welcome to the home page. Here are some useful links.'
        ])->render();
    }

    public function about(): void
    {
        echo $this->blade->view()?->make('about', [
            'title' => 'About Us',
            'content' => 'This is the about page content'
        ])->render();
    }

    public function contacts(): void
    {
        echo $this->blade->view()?->make('contacts', [
            'title' => 'Contact Us',
            'content' => 'This is the contact page content'
        ])->render();
    }
    public function phpInfo(): void
    {
        phpinfo();
    }
}
