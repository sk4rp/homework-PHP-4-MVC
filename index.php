<?php
require 'vendor/autoload.php';

use Philo\Blade\Blade;
use App\Controllers\PageController;

$views = __DIR__ . '/app/Views';
$cache = __DIR__ . '/cache';

const ABOUT_URL = '/about';
const CONTACTS_URL = '/contacts';

$blade = new Blade($views, $cache);

$pageController = new PageController();

if ($_SERVER['REQUEST_URI'] === ABOUT_URL) {
    echo $blade->view()->make('about')->render();
} elseif ($_SERVER['REQUEST_URI'] === CONTACTS_URL) {
    echo $blade->view()->make('contacts')->render();
} else {
    echo "Page not found";
}

