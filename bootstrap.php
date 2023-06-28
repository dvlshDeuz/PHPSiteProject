<?php

use App\Auth;
use App\Config;
use App\Contracts\CarsRepositoryContract;
use App\Contracts\ConfigContract;
use App\Contracts\FlashMessagesContract;
use App\FlashMessages;
use App\Repositories\CarsRepository;
use Dotenv\Dotenv;
use Illuminate\Container\Container;
use Symfony\Component\HttpFoundation\Session\Session;

function container(): Container
{
    return Container::getInstance();
}

function auth(): Auth
{
    return container()->get(Auth::class);
}

$dotenv = Dotenv::createImmutable(APP_DIR . '/OOP/');
$dotenv->load();

container()->singleton(CarsRepositoryContract::class, CarsRepository::class);
container()->singleton(ConfigContract::class, function () {
    return (new Config(APP_DIR . '/OOP/config'))->load();
});

container()->singleton(Session::class, function () {
    $session = new Session();
    $session->start();
    return $session;
});

container()->singleton(FlashMessagesContract::class, FlashMessages::class);
