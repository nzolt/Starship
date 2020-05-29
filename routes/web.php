<?php

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

use Illuminate\Http\Request;
use App\Http\Controllers\StarshipController;

// Just left for http test
$router->get('/', function () use ($router) {
    return $router->app->version();
});
/**
 * If need to handle multiple API versions:
 * Use /api/* for current version
 * Use /api/vX.X/*  for previous versions
 * E.g. $router->get('/api/{version}/token', ['middleware' => 'apiAuth', 'uses' => 'ApiTokenController@update']);
 *   and handle the versions in Controller with different Resources App\Resources
 */
$router->get('/api/token', ['middleware' => 'apiAuth', 'uses' => 'ApiTokenController@update']);
// Starship
$router->get('/api/starship', ['middleware' => 'apiAuth', 'uses' => 'StarshipController@get']);
$router->post('/api/starship', ['middleware' => 'apiAuth', 'uses' => 'StarshipController@post']);
/*$router->delete('/api/starship', ['middleware' => 'apiAuth', 'uses' => 'StarshipController@delete']);
$router->patch('/api/starship', ['middleware' => 'apiAuth', 'uses' => 'StarshipController@update']);
// Starships | optional {paginate:['records': 20, 'page': 2]}
$router->get('/api/starships', ['middleware' => 'apiAuth', 'uses' => 'StarshipsController@list']);
// Armament
$router->get('/api/armament', ['middleware' => 'apiAuth', 'uses' => 'ArmamentController@show']);
$router->post('/api/armament', ['middleware' => 'apiAuth', 'uses' => 'ArmamentController@create']);
$router->patch('/api/armament', ['middleware' => 'apiAuth', 'uses' => 'ArmamentController@update']);
$router->delete('/api/armament', ['middleware' => 'apiAuth', 'uses' => 'ArmamentController@delete']);
// Armaments | optional {paginate:['records': 20, 'page': 2]}
$router->get('/api/armaments', ['middleware' => 'apiAuth', 'uses' => 'ArmamentsController@list']);
*/

