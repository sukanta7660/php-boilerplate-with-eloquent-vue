<?php
/**
 * @var $route
 */

$route->get('/test', [\App\Http\Controllers\WelcomeController::class, 'testApi']);
