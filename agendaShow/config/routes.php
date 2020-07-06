<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Http\Middleware\CsrfProtectionMiddleware;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 * Cache: Routes are cached to improve performance, check the RoutingMiddleware
 * constructor in your `src/Application.php` file to change this behavior.
 *
 */
Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    // Register scoped middleware for in scopes.
    $routes->registerMiddleware('csrf', new CsrfProtectionMiddleware([
        'httpOnly' => true,
    ]));

    $routes->applyMiddleware('csrf');

    $routes->connect('/', ['controller' => 'Home', 'action' => 'index']);

    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);

    $routes->fallbacks(DashedRoute::class);
});

Router::scope('/api', function (RouteBuilder $routes) {

    $routes->connect('/loginapp', ['controller' => 'Api/Users', 'action' => 'loginapp']);
    $routes->connect('/getEventos', ['controller' => 'Api/Eventos', 'action' => 'list']);
    $routes->connect('/getEvento', ['controller' => 'Api/Eventos', 'action' => 'view']);
    $routes->connect('/getEstabelecimentos', ['controller' => 'Api/Estabelecimentos', 'action' => 'list']);
    $routes->connect('/getEstabelecimento', ['controller' => 'Api/Estabelecimentos', 'action' => 'view']);
    $routes->connect('/getCidades', ['controller' => 'Api/Estabelecimentos', 'action' => 'listCidades']);
    $routes->connect('/getCategorias', ['controller' => 'Api/Estabelecimentos', 'action' => 'listCategorias']);
    $routes->connect('/getCliente', ['controller' => 'Api/Clientes', 'action' => 'view']);
    $routes->connect('/addCliente', ['controller' => 'Api/Clientes', 'action' => 'add']);
    $routes->connect('/editCliente', ['controller' => 'Api/Clientes', 'action' => 'edit']);
    $routes->connect('/addUser', ['controller' => 'Api/Users', 'action' => 'add']);
    $routes->connect('/addAvaliacao', ['controller' => 'Api/Avaliacoes', 'action' => 'add']);
    $routes->connect('/getAvaliacao', ['controller' => 'Api/Avaliacoes', 'action' => 'view']);
    $routes->connect('/getAvaliacoes', ['controller' => 'Api/Avaliacoes', 'action' => 'list']);
    $routes->connect('/editAvaliacao', ['controller' => 'Api/Avaliacoes', 'action' => 'edit']);

});
