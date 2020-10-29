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

Router::prefix('admin', function($routes){
    $routes->fallbacks(DashedRoute::class);
});

Router::scope('/', function (RouteBuilder $routes) {
    // Register scoped middleware for in scopes.
    $routes->registerMiddleware('csrf', new CsrfProtectionMiddleware([
        'httpOnly' => true
    ]));


    $routes->applyMiddleware('csrf');


    $routes->connect('/', ['controller' => 'Pages', 'action' => 'site']);
    $routes->connect('/projetos', ['controller' => 'Projects', 'action' => 'project_all']);
    $routes->connect('/posts', ['controller' => 'Blog', 'action' => 'blog']);
    $routes->connect('/admin', ['controller' => 'Users', 'action' => 'login']);
    $routes->connect('/contato', ['controller' => 'Contacts', 'action' => 'contato']);
    $routes->connect('/video', ['controller' => 'Videos', 'action' => 'video']);



    $routes->connect('/projetos/:id', ['controller' => 'Projects', 'action' => 'project'])->setPass(['id']);
    $routes->connect('/projeto/:id', ['controller' => 'Projects', 'action' => 'project_single'])->setPass(['id']);
    $routes->connect('/energia-solar/:id', ['controller' => 'SolarEnergy', 'action' => 'solarEnergy'])->setPass(['id']);
    $routes->connect('/sobre/:id', ['controller' => 'About', 'action' => 'about'])->setPass(['id']);
    $routes->connect('/como-funciona/:id', ['controller' => 'Operation', 'action' => 'operation'])->setPass(['id']);
    $routes->connect('/post/:id', ['controller' => 'Blog', 'action' => 'post'])->setPass(['id']);
    /**
     * ...and connect the rest of 'Pages' controller's URLs.
     */
    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);


    $routes->fallbacks(DashedRoute::class);

});



