<?php
require __DIR__ . '/vendor/autoload.php';

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

$app = AppFactory::create();

$app->get('/uma-api', function (Request $request, Response $response) {
    $response->getBody()->write("API é um conjunto de regras que permite a comunicação entre sistemas.");
    return $response->withHeader('Content-Type', 'text/plain');
});

$app->get('/codigos', function (Request $request, Response $response) {
    $response->getBody()->write("Códigos HTTP indicam o resultado da requisição. Ex: 200 (OK), 404 (Não encontrado), 500 (Erro interno).");
    return $response->withHeader('Content-Type', 'text/plain');
});

$app->get('/erro', function (Request $request, Response $response) {
    $response->getBody()->write("Não encontrado");
    return $response->withStatus(404)->withHeader('Content-Type', 'text/plain');
});

$app->run();
