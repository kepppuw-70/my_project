<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css\bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Hello, world!</title>
    <style type="text/css">
.fixed-top-menu_data {
  position: fixed;
  top: 50px;
  right: 0;
  left: 0;
  z-index: 1029;
}

.justify0{
  margin-right: 45vw;
}
    </style>
  </head>
  <body>
 <?php

    session_start();
   
    include 'php_function/functionPHP_bd.php'; 

   
  ?> 

<nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <!----><a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler justify0" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="navbarNav" >
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="menu.php">Главная <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="add.php">Регистрация</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="korekt.php">Редактировать</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="">Соревнования</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="menu_vibora.php">Выход</a>
      </li>
      
    </ul>
  </div>
</nav>

<div class="container">


<!--
<nav class="navbar fixed-top-menu_data navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler justify0" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="navbarNav1" >
    <ul class="navbar-nav">
      <li class="nav-item active">
        <form action="menu.php" method="POST"><input type="submit" value="1-Данные" name="data1"></form>
      </li>
      <li class="nav-item">
        <form action="menu.php" method="POST"><input type="submit" value="2-Данные" name="data2"></form>
      </li>
      <li class="nav-item">
        <form action="menu.php" method="POST"><input type="submit" value="3-Данные" name="data3"></form>
      </li>
       <li class="nav-item">
        <form action="menu.php" method="POST"><input type="submit" value="4-Данные" name="data4"></form>
      </li>
       <li class="nav-item">
        <form action="menu.php" method="POST"><input type="submit" value="5-Данные" name="data5"></form>
      </li>
      
    </ul>
  </div>
</nav><div class="mx-auto" style="width: 400px;"><h2>Список спортсменов</h2></div>
-->
<br><br><br><br>
<?php
echo '<div class="mx-auto" style="width: 200px;"><h2>Соревнования</h2><br></div>';
if (file_exists('bd_sorevn/'.'zajv_'.$_SESSION['bd'].'.txt')) {
   echo '<h2>Заявка на соревнования</h2>';
    $arr_sorev = reed_from_file_to_arr_zajv($_SESSION['bd']);
    print_arr_sorevn($arr_sorev);
}

echo '<h2>Список спортсменов</h2>';

$arr = reed_file_to_arr_without_PHP_EOL($_SESSION['bd']);
print_arr_for_see_sorev($arr);

 ?> 


</div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js\jquery-3.5.1.min.js"></script>
    <script src="js\bootstrap.min.js"></script>
  </body>
</html>