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

.pozishn{
  text-align: center;
  margin-top: 20px;
}
    </style>
  </head>
  <body>
 <?php

    session_start();
    include 'php_function/functionPHP_bd.php';

    //echo '<br><br><br><br><br><br><br><br><br><br><br>';
    //echo 'Файл - '.$_SESSION['bd'].'<br>';

    if (file_exists('bd_all_sports/'.$_SESSION['bd'].'.txt')) {
   
    $arr_perekl = reed_from_file_bd_to_arr($_SESSION['bd']);
    //show_arr($arr_perekl);
    write_rewrite_file_posesh_grupps($arr_perekl);
    naznachenie_file_posesh_grupps($arr_perekl);
    //echo 'Файл - '.$_SESSION['pass_file_perekl'].'<br>';
    

}
   
  ?> 

<nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <!----><a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler justify0" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="navbarNav" >
    <ul class="navbar-nav pozishn">
      <li class="nav-item active">
        <a class="nav-link" href="grups.php">Ведение групп<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="menu.php">Регистрация</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Выход</a>
      </li>
      
    </ul>
  </div>
</nav>

 

<nav class="navbar fixed-top-menu_data navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <!----><a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler justify0" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="navbarNav1" >
    <ul class="navbar-nav">
      <li class="nav-item pozishn">
        <form action="club_sitting.php" method="POST"><input type="submit" value="Настройка параметров клуба" name="data1"></form>
      </li>
     </ul>
  </div>
</nav>  
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <script src="js\jquery-3.5.1.min.js"></script>
    <script src="js\bootstrap.min.js"></script>
  </body>
</html>