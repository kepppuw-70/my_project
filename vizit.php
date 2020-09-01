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

.but_otrabot{
  position: absolute;
  right: 100px; 
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
        <a class="nav-link" href="#">Перекличка</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="retrening.php">Отработка</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pai.php">Взносы</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="menu_vibora.php">Выход</a>
      </li>
      
    </ul>
  </div>
</nav>


 


<!--

<nav class="navbar fixed-top-menu_data navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler justify0" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="navbarNav1" >
<?php
/*
//echo 'clubs - '.$_SESSION['clubs'].'<br>';

$pieces_clubs = explode("*", $_SESSION['clubs']);
$num_pieces_clubs =  count($pieces_clubs);
for ($i=0; $i < $num_pieces_clubs; $i++) { 
  $pieces_sity_club = explode(",", $pieces_clubs[$i]);
  $pieces_sity[$i] = $pieces_sity_club[0];
  $pieces_club[$i] = $pieces_sity_club[1];
}


//echo '0 - '.$pieces_club[0].'<br>';
//echo '1 - '.$pieces_club[1].'<br>';
echo '<form action="vizit.php" method="POST">';
echo '<div class="sity"><label for="sity">Город</label>

   <select name="sity">
     <option id="sity" value="'.$pieces_sity[0].'">'.$pieces_sity[0].'</option>
   </select></div>';

echo '<div class="club"><label for="club">Клуб</label><select name="club">';
   
$num_club =  count($pieces_club);

for ($k=0; $k < $num_club; $k++) { 
      echo '<option id="club" value="'.$pieces_club[$k].'">'.$pieces_club[$k].'</option>'; 
}  
   
   echo '</select></div>';   

echo '<div class="grup"><label for="grupp">Группа</label>
   <select name="grupp">
     <option id="grupp" value="g0">Самоподготовка</option>
     <option id="grupp" value="g1">Группа 1</option>
     <option id="grupp" value="g2">Группа 2</option>
     <option id="grupp" value="g3">Группа 3</option>
     <option id="grupp" value="g4">Группа 4</option>
     <option id="grupp" value="g5">Группа 5</option>
     <option id="grupp" value="g6">Группа 6</option>
     <option id="grupp" value="g7">Группа 7</option>
     <option id="grupp" value="g8">Группа 8</option>
   </select></div>';

echo '<button type="submit" >Выбрать</button></form>';

*/

?>
  </div>
</nav>


-->
<?php

if (file_exists('bd_all_sports/'.$_SESSION['bd'].'.txt')) {
   
    $arr_bd = reed_from_file_bd_to_arr($_SESSION['bd']);
    //print_arr_grupps($arr_sorev);
    mack_menu_for_pereklichki($arr_bd);
}

?> 

<div class="container">






<br><br><br>









<div class="mx-auto" style="width: 400px;"><h2>Проверка группы</h2></div>

<br>

<?php
echo '<div class="mx-auto" style="width: 350px;"><h3>'.$_SESSION['name_grupp'].'</h3></div><br><br>';

$file_for_sich = 'bd_all_sports/'.$_SESSION['bd'].'.txt';

//echo "путь - ".$file_for_sich.'<br>';

if (file_exists($file_for_sich)) {
    //$arr_perekl = reed_from_file_perekl_to_arr($file_for_sich);
    print_arr_perekl($_SESSION['grupp_for_perekl']);
}
show_arr($_SESSION['arr_perekl']);
//show_arr($_SESSION['arr_from_file_perekl']);
//echo 'num_arr_from_file_perekl - '.$_SESSION['num_arr_from_file_perekl'].'<br>';
//echo 'str - '.$_SESSION['str'].'<br>';
show_arr($_SESSION['str']);
//show_arr($_SESSION['file_perekl']);
?> 

<!--
<div class="mx-auto" style="width: 400px;"><h2>Списки групп</h2></div>


 
-->


<?php
/*
if (file_exists('bd_all_sports/'.$_SESSION['bd'].'.txt')) {
   
    $arr_sorev = reed_from_file_bd_to_arr($_SESSION['bd']);
    print_arr_grupps($arr_sorev);
}

*/
?> 


<br><br><br><br>
<?php
/*
if (file_exists('bd_sorevn/'.'zajv_'.$_SESSION['bd'].'.txt')) {
   echo '<h2>Заявка на соревнования</h2>';
    $arr_sorev = reed_from_file_to_arr_zajv($_SESSION['bd']);
    print_arr_sorevn($arr_sorev);
}

echo '<h2>Список спортсменов</h2>';

$arr = reed_file_to_arr_without_PHP_EOL($_SESSION['bd']);
print_arr_for_see_sorev($arr);
*/
 ?> 
</div>

<br><br><br><br><br><br><br><br><br>


<?php

 ?> 
<br><br>


    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <script src="js\jquery-3.5.1.min.js"></script>
    <script src="js\bootstrap.min.js"></script>
  </body>
</html>