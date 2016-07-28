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
$app->get('encode', function (\Illuminate\Http\Request $request) {
    return response()->json([
        'result' => base64_encode($request->input('value')),
    ]);
});

$app->get('decode', function (\Illuminate\Http\Request $request) {
    return response()->json([
        'result' => base64_decode($request->input('value')),
    ]);
});
$app->get('/', function () use ($app) {
    return $app->version();
});
