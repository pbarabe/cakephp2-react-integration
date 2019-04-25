<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 */

/**
 * Route / to PagesController::index()
 */
    Router::connect('/', ['controller' => 'pages', 'action' => 'index', 'home']);

    CakePlugin::routes();
    require CAKE . 'Config' . DS . 'routes.php';
