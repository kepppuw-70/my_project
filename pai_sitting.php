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

.dmY{
  text-align: center;
}

.zaglav{
  text-align: center;
}
    </style>
  </head>
  <body>
    <br><br><br>
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
      
       <li class="nav-item">
        <a class="nav-link" href="pai.php">Выход</a>
      </li>
      
    </ul>
  </div>
</nav>
<div class="container">
<br><br><br>




<?php



echo '<h2 class="zaglav">Настройка параметров взносов</div>';



?> 

<br><br><br><br>














<?php


$pai = 380;  // сумма последнего платежа
$cast_van_day = 41.5; // стоимость одного дня занятий
$pai_for_day = Floor($pai/$cast_van_day); //число оплаченных дней
$day_last_of_pai = '30/12/2020'; // дата последнего платежа
$pis_day_last_of_pai = explode("/", $day_last_of_pai);
$day = $pis_day_last_of_pai[0]; //день последнего платежа
$munz = $pis_day_last_of_pai[1]; //месяц последнего платнжа
$yar = $pis_day_last_of_pai[2]; //год последнего платежа
// Дни треннеровок группы: 0 - воскресеньн и т.д.
$tr1 = 1; 
$tr2 = 3;
$tr3 = 5;
//

//echo $pai_for_day;
$days_in_munz = date("t", mktime(0, 0, 0, $munz, $day, $yar));
//echo $days_in_munz.'<br>';
$k = 0;
for ($i=$day; $i <= $days_in_munz; $i++) {
   if ($k < $pai_for_day + 1) {
      if (date("w", mktime(0, 0, 0, $munz, $i, $yar)) == $tr1) {
         $arr_tr_day[$k] = $i;
         $k++;    
      }
      if (date("w", mktime(0, 0, 0, $munz, $i, $yar)) == $tr2) {
         $arr_tr_day[$k] = $i;
         $k++;    
      }
      if (date("w", mktime(0, 0, 0, $munz, $i, $yar)) == $tr3) {
         $arr_tr_day[$k] = $i;
         $k++;    
      }
    }
}
$num = count($arr_tr_day);
if ($num < $pai_for_day + 1) {
  if ($munz == 12) {
    $munz = 1;
    $yar = $yar + 1;
  }
  else{
    $munz = $munz+1;
  }
  $days_in_munz = date("t", mktime(0, 0, 0, $munz  , $day, $yar));
  $k = $num;
  for ($i=0; $i < $days_in_munz; $i++) {
    if ($k < $pai_for_day + 1) {
      if (date("w", mktime(0, 0, 0, $munz  , $i+1, $yar)) == $tr1) {
         $arr_tr_day[$k] = $i+1;
         $k++;    
      }
      if (date("w", mktime(0, 0, 0, $munz  , $i+1, $yar)) == $tr2) {
         $arr_tr_day[$k] = $i+1;
         $k++;    
      }
      if (date("w", mktime(0, 0, 0, $munz  , $i+1, $yar)) == $tr3) {
         $arr_tr_day[$k] = $i+1;
         $k++;    
      }
    }

  }
  
}

$data_next_pai = $arr_tr_day[$pai_for_day];
unset($arr_tr_day[$pai_for_day]);
show_arr($arr_tr_day, 'name');
echo 'заплпнированная дата нового взноса - '.$data_next_pai.'/'.$munz.'/'.$yar;

?>



</div>
<br><br><br>
    <script src="js\jquery-3.5.1.min.js"></script>
    <script src="js\bootstrap.min.js"></script>
  </body>
</html>