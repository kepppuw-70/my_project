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
    //echo "string".$_SESSION['bd'];
               $_SESSION['$korekt'] = 999;
               $_SESSION['$korekt_p0'] = 'korekt0';
               $_SESSION['$korekt_p1'] = 'korekt1';
               $_SESSION['$korekt_p2'] = 'korekt2';
               $_SESSION['$korekt_p3'] = 'korekt3';
               $_SESSION['$korekt_p456'] = 'korekt456';
               $_SESSION['$korekt_p7'] = 'korekt7';
               $_SESSION['$korekt_p8'] = 'korekt8';
               $_SESSION['$korekt_p9'] = 'korekt9';
    include 'php_function/functionPHP_bd.php'; 

    if($_POST['data1']){
            $_SESSION['data1'] = 'on';
            $_SESSION['data2'] = 'off';
            $_SESSION['data3'] = 'off';
            $_SESSION['data4'] = 'off';
            $_SESSION['data5'] = 'off';
        }
    if($_POST['data2']){
            $_SESSION['data1'] = 'off';
            $_SESSION['data2'] = 'on';
            $_SESSION['data3'] = 'off';
            $_SESSION['data4'] = 'off';
            $_SESSION['data5'] = 'off';
        }
    if($_POST['data3']){
            $_SESSION['data1'] = 'off';
            $_SESSION['data2'] = 'off';
            $_SESSION['data3'] = 'on';
            $_SESSION['data4'] = 'off';
            $_SESSION['data5'] = 'off';
        }
    if($_POST['data4']){
            $_SESSION['data1'] = 'off';
            $_SESSION['data2'] = 'off';
            $_SESSION['data3'] = 'off';
            $_SESSION['data4'] = 'on';
            $_SESSION['data5'] = 'off';
        }
    if($_POST['data5']){
           $_SESSION['data1'] = 'off';
            $_SESSION['data2'] = 'off';
            $_SESSION['data3'] = 'off';
            $_SESSION['data4'] = 'off';
            $_SESSION['data5'] = 'on';
        }
  ?> 

<nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <!----><a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler justify0" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="navbarNav" >
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Главная <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="add.php">Регистрация</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="korekt.php">Редактировать</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="menu_sel_sorev.php">Соревнования</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="menu_vibora.php">Выход</a>
      </li>
      
    </ul>
  </div>
</nav>








<div class="container">












<nav class="navbar fixed-top-menu_data navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <!----><a class="navbar-brand" href="#"></a>
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
</nav>

<br><br><br><br><br><br>
<?php
echo '<div class="mx-auto" style="width: 200px;"><h2>Главная</h2><br></div>';
?> 
<div class="mx-auto" style="width: 400px;"><h2>Список спортсменов</h2></div>

<!--
 <script>
var scrollHeight = Math.max(
  document.body.scrollHeight, document.documentElement.scrollHeight,
  document.body.offsetHeight, document.documentElement.offsetHeight,
  document.body.clientHeight, document.documentElement.clientHeight
);

alert( 'Высота с учётом прокрутки: ' + scrollHeight );

    </script>
-->


<?php


if ($_SESSION['data1'] == 'on') {
//$arr_sex = reed_file_to_arr_without_PHP_EOL($_SESSION['bd']);
$file_name = $_SESSION['bd'];
$filename = 'bd_all_sports/'.$file_name.'.txt';
  if (file_exists($filename)) {
    ${'arr_'.$file_name} = $arr00;
     $f = fopen($filename,'r');
     $i = 0;
     while (!feof($f)){
           $string = fgets($f);
           ${'arr_'.$file_name}[$i] = $string;
           $i++;
     }
     fclose($f);

$num = count(${'arr_'.$file_name});
     unset(${'arr_'.$file_name}[$num-1]);
  $arr_sex = ${'arr_'.$file_name};
  }


$num_str =  count($arr_sex);
  
if ($num_str >= 1) {
echo '<table class="table" border="1">
   <caption></caption> 
   <tr>
    <th width="40">№</th>
    <th scope="col">Фамилия Имя Отчество</th>
    <th scope="col">Пол</th>
    <th scope="col">Дата рождения</th>
   
    
   </tr>';

  $num_str =  count($arr_sex);
  for ($i=0; $i < $num_str; $i++) { 
      $pieces = explode("*", $arr_sex[$i]);
      
      $born = explode("/", $pieces[4]);
      $d = $born[0];
      $m = $born[1];
      $y = $born[2];
      $age = getAge($d, $m, $y);

              
        echo '<tr><th scope="row">'.($i+1).'</th><td>'.$pieces[0].' '.$pieces[1].' '.$pieces[2].'</td><td>'.$pieces[3].'</td><td>'.$pieces[4].'  '.$age.'лет'.'</td></tr>';
      

  }
echo '</table>';
}
}


if ($_SESSION['data2'] == 'on') {
//$arr_sex = reed_file_to_arr_without_PHP_EOL($_SESSION['bd']);
$file_name = $_SESSION['bd'];
$filename = 'bd_all_sports/'.$file_name.'.txt';
  if (file_exists($filename)) {
    ${'arr_'.$file_name} = $arr00;
     $f = fopen($filename,'r');
     $i = 0;
     while (!feof($f)){
           $string = fgets($f);
           ${'arr_'.$file_name}[$i] = $string;
           $i++;
     }
     fclose($f);

$num = count(${'arr_'.$file_name});
     unset(${'arr_'.$file_name}[$num-1]);
  $arr_sex = ${'arr_'.$file_name};
  }


$num_str =  count($arr_sex);
  
if ($num_str >= 1) {
echo '<table class="table" border="1">
   <caption></caption> 
   <tr>
    <th width="40">№</th>
    <th>Фамилия Имя Отчество - англ.</th>
    <th>Степень</th>
    <th>Сертификаты</th>
   
    
   </tr>';

  $num_str =  count($arr_sex);
  for ($i=0; $i < $num_str; $i++) { 
      $pieces = explode("*", $arr_sex[$i]);
      
      $born = explode("/", $pieces[4]);
      $d = $born[0];
      $m = $born[1];
      $y = $born[2];
      $age = getAge($d, $m, $y);

              
        echo '<tr><th scope="row">'.($i+1).'</th><td>'.$pieces[6].' '.$pieces[7].' '.$pieces[8].'</td><td>'.$pieces[5].'</td><td>'.$pieces[13].'</td></tr>';
      

  }
echo '</table>';
}
}



if ($_SESSION['data3'] == 'on') {
//$arr_sex = reed_file_to_arr_without_PHP_EOL($_SESSION['bd']);
$file_name = $_SESSION['bd'];
$filename = 'bd_all_sports/'.$file_name.'.txt';
  if (file_exists($filename)) {
    ${'arr_'.$file_name} = $arr00;
     $f = fopen($filename,'r');
     $i = 0;
     while (!feof($f)){
           $string = fgets($f);
           ${'arr_'.$file_name}[$i] = $string;
           $i++;
     }
     fclose($f);

$num = count(${'arr_'.$file_name});
     unset(${'arr_'.$file_name}[$num-1]);
  $arr_sex = ${'arr_'.$file_name};
  }


$num_str =  count($arr_sex);
  
if ($num_str >= 1) {
echo '<table class="table" border="1">
   <caption></caption> 
   <tr>
    <th width="40">№</th>
    <th>Категория</th>
    <th>Вес</th>
    <th>Соревнования</th>
   
    
   </tr>';

  $num_str =  count($arr_sex);
  for ($i=0; $i < $num_str; $i++) { 
      $pieces = explode("*", $arr_sex[$i]);
      
      $born = explode("/", $pieces[4]);
      $d = $born[0];
      $m = $born[1];
      $y = $born[2];
      $age = getAge($d, $m, $y);

              
        echo '<tr><th scope="row">'.($i+1).'</th><td>'.$pieces[9].'</td><td>'.$pieces[10].'</td><td>'.$pieces[11].'</td></tr>';
      

  }
echo '</table>';
}
}

if ($_SESSION['data4'] == 'on') {
//$arr_sex = reed_file_to_arr_without_PHP_EOL($_SESSION['bd']);
$file_name = $_SESSION['bd'];
$filename = 'bd_all_sports/'.$file_name.'.txt';
  if (file_exists($filename)) {
    ${'arr_'.$file_name} = $arr00;
     $f = fopen($filename,'r');
     $i = 0;
     while (!feof($f)){
           $string = fgets($f);
           ${'arr_'.$file_name}[$i] = $string;
           $i++;
     }
     fclose($f);

$num = count(${'arr_'.$file_name});
     unset(${'arr_'.$file_name}[$num-1]);
  $arr_sex = ${'arr_'.$file_name};
  }


$num_str =  count($arr_sex);
  
if ($num_str >= 1) {
echo '<table class="table" border="1">
   <caption></caption> 
   <tr>
    <th width="40">№</th>
    <th>Место тренеровок</th>
    <th>Тренер</th>
    <th>Сборы/Лагеря</th>
  </tr>';

  $num_str =  count($arr_sex);
  for ($i=0; $i < $num_str; $i++) { 
      $pieces = explode("*", $arr_sex[$i]);
      
      $born = explode("/", $pieces[4]);
      $d = $born[0];
      $m = $born[1];
      $y = $born[2];
      $age = getAge($d, $m, $y);

      if ($_SESSION['bd'] == 'EO') {
        $trener = 'Толмачёв Е.О.';
      }

      if ($_SESSION['bd'] == 'PG') {
        $trener = 'Евсега П.Г.';
      }

      if ($_SESSION['bd'] == 'RV') {
        $trener = 'Филатенко Р.В.';
      }

      if ($_SESSION['bd'] == 'IG') {
        $trener = 'Подгорский И.Г.';
      }

      if ($_SESSION['bd'] == 'AM') {
        $trener = 'Кравченко А.Ь.';
      }

              
        echo '<tr><th scope="row">'.($i+1).'</th><td>'.$pieces[14].'</td><td>'.$trener.'</td><td>'.$pieces[12].'</td></tr>';
      

  }
echo '</table>';
}
}

if ($_SESSION['data5'] == 'on') {
//$arr_sex = reed_file_to_arr_without_PHP_EOL($_SESSION['bd']);
$file_name = $_SESSION['bd'];
$filename = 'bd_all_sports/'.$file_name.'.txt';
  if (file_exists($filename)) {
    ${'arr_'.$file_name} = $arr00;
     $f = fopen($filename,'r');
     $i = 0;
     while (!feof($f)){
           $string = fgets($f);
           ${'arr_'.$file_name}[$i] = $string;
           $i++;
     }
     fclose($f);

$num = count(${'arr_'.$file_name});
     unset(${'arr_'.$file_name}[$num-1]);
  $arr_sex = ${'arr_'.$file_name};
  }


$num_str =  count($arr_sex);
  
if ($num_str >= 1) {
echo '<table class="table" border="1">
   <caption></caption> 
   <tr>
    <th width="40">№</th>
    <th>Учёба/Работа</th>
    <th>Телефон</th>
    <th>Email</th>
   
    
   </tr>';

  $num_str =  count($arr_sex);
  for ($i=0; $i < $num_str; $i++) { 
      $pieces = explode("*", $arr_sex[$i]);
      
      $born = explode("/", $pieces[4]);
      $d = $born[0];
      $m = $born[1];
      $y = $born[2];
      $age = getAge($d, $m, $y);

              
        echo '<tr><th scope="row">'.($i+1).'</th><td>'.$pieces[15].'</td><td>'.$pieces[16].'</td><td>'.$pieces[17].'</td></tr>';
      

  }
echo '</table>';
}
}





//echo "string";
/*
if ($_SESSION['data1'] == 'on') {
 print_arr_for_see1(reed_file_to_arr_without_PHP_EOL($_SESSION['bd']));
}

if ($_SESSION['data2'] == 'on') {
 print_arr_for_see2(reed_file_to_arr_without_PHP_EOL($_SESSION['bd']));
}
if ($_SESSION['data3'] == 'on') {
 print_arr_for_see3(reed_file_to_arr_without_PHP_EOL($_SESSION['bd']));
} 
*/
 ?> 
<br><br>


    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <script src="js\jquery-3.5.1.min.js"></script>
    <script src="js\bootstrap.min.js"></script>
  </body>
</html>