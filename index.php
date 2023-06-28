<?php
error_reporting(E_ALL);
ini_set('display_errors', true);

define('APP_DIR', dirname(__DIR__));

require_once APP_DIR . '/OOP/vendor/autoload.php';

use App\Application;
use App\Contracts\ConfigContract;
use App\Controllers\AdminController;
use App\Controllers\ApiCarsController;
use App\Controllers\CatalogController;
use App\Controllers\LoginController;
use App\Controllers\PagesController;
use App\Router;
use Illuminate\Database\Capsule\Manager as Capsule;
use Symfony\Component\HttpFoundation\Request;

require_once APP_DIR . '/OOP/bootstrap.php';

$router = new Router();

$router->get('/', [PagesController::class, 'home']);

$router->get('/catalog', [CatalogController::class, 'catalog']);
$router->get('/catalog/*', [CatalogController::class, 'detail']);

$router->get('/api/cars', [ApiCarsController::class, 'cars']);

$router->get('/admin', [AdminController::class, 'admin']);

$router->get('/login/', [LoginController::class, 'login']);
$router->post('/login', [LoginController::class, 'authorize']);
$router->get('/logout', [LoginController::class, 'logout']);

$application = new Application($router, new Capsule(), container()->get(ConfigContract::class));

$response = $application->run(Request::createFromGlobals());

$response->send();