<?php

    require __DIR__ . "/../App/Config/App.php";

    use App\Controllers\UserController;

    (new UserController())->Register($_POST);