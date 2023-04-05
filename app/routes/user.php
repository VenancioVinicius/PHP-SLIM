<?php

    use app\controllers\UserController;

    $app->get('/user', 'app\controllers\UserController:index');