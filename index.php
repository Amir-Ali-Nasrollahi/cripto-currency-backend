<?php 


include "./core/app.php";
include "./core/model.php";
include "./core/const.php";
include "./core/controller.php";
include "./core/route.php";

\Core\Route::group("amirali", "cripto", "test_mid");
\Core\Route::group("test", "test", "test_mid");

new Core\App() ;