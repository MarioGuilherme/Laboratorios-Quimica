<?php

    require __DIR__ . "/App/Config/App.php";

    use App\Controllers\ReportController;

    (new ReportController)->Index();