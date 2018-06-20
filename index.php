<?php

require 'vendor/autoload.php'; 

require 'init.php'; 

$app = new \Slim\App([

    'settings' => [
        'displayErrorDetails' => true
    ]

]);
  
$app->get('/', function ()
{
    $ListController = new \App\Controllers\ListController;
    $ListController->index();
});

$app->get('/relatorios', function ()
{
    $ListController = new \App\Controllers\ListController;
    $ListController->grafics();
});
 
$app->get('/cadastrar', function ()
{
    $ListController = new \App\Controllers\ListController;
    $ListController->create();
});
 
$app->post('/cadastrar', function ()
{
    $ListController = new \App\Controllers\ListController;
    $ListController->store();
});
 
 
$app->get('/editar/{id}', function ($request)
{
    $id = $request->getAttribute('location_id');
 
    $ListController = new \App\Controllers\ListController;
    $ListController->edit($id);
});
 

$app->post('/editar', function ()
{
    $ListController = new \App\Controllers\ListController;
    $ListController->update();
});
 
$app->get('/remover/{id}', function ($request)
{
    $id = $request->getAttribute('location_id');
 
    $ListController = new \App\Controllers\ListController;
    $ListController->remove($id);
});
 
$app->run();