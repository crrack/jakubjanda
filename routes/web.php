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
$router->get('clanky/{category}', ['uses' => 'ArticleController@all']);
$router->get('clanek/{slug}', ['uses' => 'ArticleController@show']);

$router->get('zivotopis', ['uses' => 'ZivotopisController@show']);
$router->get('videa', ['uses' => 'VideoController@show']);

$router->post('contact-form/send', ['uses' => 'ContactFormController@send']);
$router->post('send-pdf/send', ['uses' => 'SendPdfController@send']);

$router->get('{page}', ['uses' => 'PageController@show']);

$router->get('admin', function () {
    return redirect('https://jakubjanda.headingcms.app');
});