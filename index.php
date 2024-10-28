<?php 


include "./core/app.php";
include "./core/model.php";
include "./core/const.php";
include "./core/controller.php";
include "./core/route.php";

\Core\Route::group("amirali", "cripto");
\Core\Route::group("test", "test");

new Core\App() ;