<?php
    namespace app\controllers;

    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use app\database\models\User;

    class UserController {

        private $user;
        public function __construct() {
            $this->user = new User();
        }

        public function index(Request $request, Response $response, $args) {

            $data = $this->user->all();
            $response->getBody()->write(json_encode($data));
            return $response;

        }
    }   