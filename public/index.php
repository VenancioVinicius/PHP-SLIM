<?php
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use Slim\Factory\AppFactory;
    require __DIR__ . '/../vendor/autoload.php';
    $app = AppFactory::create();
    $app->addRoutingMiddleware();
    $errorMiddleware = $app->addErrorMiddleware(true, true, true);
    // Define uma rota


    $app->get('/', function (Request $request, Response $response, $args) {
        $response->getBody()->write("<h1>SLIM RUNNING</h1>");
        return $response;
    });

    //$app->run();

    $app = AppFactory::create();

    // Inclui o arquivo de rotas para usuários
    require "../app/routes/user.php";

    $app->addRoutingMiddleware();

    $errorMiddleware = $app->addErrorMiddleware(true, true, true);

    // Executa Aplicação
    $app->run();