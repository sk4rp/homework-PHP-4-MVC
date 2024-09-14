<?php

namespace App\Services;

use Philo\Blade\Blade;
use App\Controllers\PageController;

class Router
{
    protected Blade $blade;
    protected PageController $pageController;

    public function __construct()
    {
        $views = __DIR__ . '/../Views';
        $cache = __DIR__ . '/../../cache';
        $this->blade = new Blade($views, $cache);
        $this->pageController = new PageController();
    }

    public function handleRequest(): void
    {
        $uri = $_SERVER['REQUEST_URI'];

        switch ($uri) {
            case '/mvc/':
            case '/mvc/home':
                $this->pageController->home();
                break;

            case '/mvc/about':
                $this->pageController->about();
                break;

            case '/mvc/contacts':
                $this->pageController->contacts();
                break;
            case '/mvc/php-info':
                $this->pageController->phpInfo();
                break;
            default:
                echo 'Page not found';
                break;
        }
    }
}
