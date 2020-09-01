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

.posesh_on{
  background: green;
}

.posesh_off{
  background: red; 
}

.dmY{
  text-align: center;
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
        <a class="nav-link" href="grups.php">Посещаемость<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="vizit.php">Перекличка</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="retrening.php">Отработка</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Взносы</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="menu_vibora.php">Выход</a>
      </li>
      
    </ul>
  </div>
</nav>


<div class="container">
<br><br><br><br><br><br>






<?php


echo '<div class="mx-auto" style="width: 100px;"><form action="pai_sitting.php" method="POST"><input type="submit" value="Взносы" name="vznos"></form></div><br><br><br><br>';



if (file_exists('bd_all_sports/'.$_SESSION['bd'].'.txt')) {
   
    $arr_bd = reed_from_file_bd_to_arr($_SESSION['bd']);
/*
    $num_bd =  count($arr_bd);
for ($i=0; $i < $num_bd; $i++) { 
    $pieces_row = explode("*", $arr_bd[$i]);
    $num_arr_grupp =  count(${$pieces_row[14]});
    if ($num_arr_grupp == 0) {
       ${$pieces_row[14]}[0] = $pieces_row[0].' '.$pieces_row[1].'*END'.PHP_EOL;
    }
    else{
       ${$pieces_row[14]}[$num_arr_grupp] = $pieces_row[0].' '.$pieces_row[1].'*END'.PHP_EOL;
    }
    $num_arr_name_grupp =  count($arr_name_grupp);
    if ($num_arr_name_grupp < 1) {
       $arr_name_grupp[0] = $pieces_row[14];
       $sovpadenie = 'on';
    }
    if ($num_arr_name_grupp >= 1){
        for ($k=0; $k < $num_arr_name_grupp; $k++) {
            $sovpadenie = 'off';
            if ($arr_name_grupp[$k] == $pieces_row[14]) {
               $sovpadenie = 'on';
            }
        }
    }
    if ($sovpadenie == 'off') {
       $arr_name_grupp[$num_arr_name_grupp] = $pieces_row[14];
    }
 }


$_SESSION['grupp_for_perekl'] = ${$arr_name_grupp[0]};
$_SESSION['name_pass_file'] = $pass_file = 'bd_all_sports/grupps'.$_SESSION['bd'].'/'.$arr_name_grupp[0].date('m').date('Y').'.txt';

*/



    //print_arr_grupps($arr_sorev);
    //write_rewrite_file_posesh_grupps($arr_sorev);
    mack_menu_pai_grupp($arr_bd);
}



   print_table_pai_grupp($_SESSION['pass_file_perekl']);


?> 



</div>

<br><br><br><br><br><br><br><br><br>

    <script src="js\jquery-3.5.1.min.js"></script>
    <script src="js\bootstrap.min.js"></script>
  </body>
</html>