<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', ['as' => 'home-page', 'uses' => 'IndexController@show']);
$router->get('clanky', ['uses' => 'ArticleController@all']);
$router->get('clanek/{slug}', ['uses' => 'ArticleController@show']);

$router->post('contact/send', ['uses' => 'ContactController@send']);

$router->get('{page}', ['uses' => 'PageController@show']);