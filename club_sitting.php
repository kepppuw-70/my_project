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

.pozishn{
  text-align: center;
  margin-top: 20px;
}

.pozishn_menu{
  text-align: center;
}
.but1{
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
  <a class="navbar-brand" href="#"></a>
<!---->
  <button class="navbar-toggler justify0" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-center" id="navbarNav" >
    <ul class="navbar-nav">
      
       <li class="nav-item pozishn_menu">
        <a class="nav-link" href="menu_vibora.php">Выход</a>
      </li>
      
    </ul>
  </div>
</nav>
<div class="container">
<br><br><br>




<?php



echo '<h2 class="zaglav">Настройка параметров клуба</div>';



?> 


<br><br><br>

    <h4 style="text-align: center;">Активированные группы</h4>
<div>
    <table class="pozisn_cente" border="1">
      <tr>
        <th  width="40" class="cell">№</th>
        <th class="cell">Клуб/Группа</th>
        <th class="cell">Дни занятий</th>
        <th class="cell">Цена тр./ф.м.</th>
      </tr>
      <?php
        echo '<tr>
                 <td>'.'1'.'</td>
                 <td></td>
                 <td></td>
                 <td></td>
            </tr>';
      ?>
      
    </table>
</div>   


<br><br>

<?php
/*

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
?>

<div class="pozishn_menu">

<?php  
show_arr($arr_tr_day, 'name');
echo 'заплпнированная дата нового взноса - '.$data_next_pai.'/'.$munz.'/'.$yar;

echo '</div>';


*/
?>














<fieldset class="pozishn">
  <legend>
    <b>Активация места тренеровок</b>
  </legend>
<form action="club_sitting.php" method="POST">
<?php
 
 if ($_SESSION['bd'] == 'EO') {
  $_SESSION['sity'] = 'Dnepr';
  
 echo '<div>г.Днепр,</div>';
 echo '<div class="club"><label for="club">Клуб</label>
   <select name="club">
     <option id="club" value="School54">СШ54</option>
   </select></div>';
 echo '<div class="grup"><label for="grupp">Группа</label>
   <select name="grupp">
     <option id="grupp" value="g1">Группа 1</option>
     <option id="grupp" value="g2">Группа 2</option>
     <option id="grupp" value="g3">Группа 3</option>
     <option id="grupp" value="g4">Группа 4</option>
     <option id="grupp" value="g5">Группа 5</option>
     <option id="grupp" value="g6">Группа 6</option>
     <option id="grupp" value="g7">Группа 7</option>
     <option id="grupp" value="g8">Группа 8</option>
     <option id="grupp" value="g9">Группа 9</option>
   </select></div>';
   
}

 if ($_SESSION['bd'] == 'PG') {
  $_SESSION['sity'] = 'Dnepr';
  
 echo '<div>г.Днепр,</div>';
 echo '<div class="club"><label for="club">Клуб</label>
   <select name="club">
     <option id="club" value="School102">СШ102</option>
     
  </select></div>';
 echo '<div class="grup"><label for="grupp">Группа</label>
   <select name="grupp">
     <option id="grupp" value="g1">Группа 1</option>
     <option id="grupp" value="g2">Группа 2</option>
     <option id="grupp" value="g3">Группа 3</option>
     <option id="grupp" value="g4">Группа 4</option>
     <option id="grupp" value="g5">Группа 5</option>
     <option id="grupp" value="g6">Группа 6</option>
     <option id="grupp" value="g7">Группа 7</option>
     <option id="grupp" value="g8">Группа 8</option>
   </select></div>';
  
}

 if ($_SESSION['bd'] == 'RV') {
  $_SESSION['sity'] = 'Dnepr';
  
 echo '<div>г.Днепр,</div>';
 echo '<div class="club"><label for="club">Клуб</label>
   <select name="club">
     <option id="club" value="School55">СШ55</option>
     <option id="club" value="School99">СШ99</option>
   </select></div>';
 echo '<div class="grup"><label for="grupp">Группа</label>
   <select name="grupp">
     
     <option id="grupp" value="g1">Группа 1</option>
     <option id="grupp" value="g2">Группа 2</option>
     <option id="grupp" value="g3">Группа 3</option>
     <option id="grupp" value="g4">Группа 4</option>
     <option id="grupp" value="g5">Группа 5</option>
     <option id="grupp" value="g6">Группа 6</option>
     <option id="grupp" value="g7">Группа 7</option>
     <option id="grupp" value="g8">Группа 8</option>
   </select></div>';
   
}

 if ($_SESSION['bd'] == 'IG') {
  $_SESSION['sity'] = 'Dnepr';
  
 echo '<div>г.Днепр,</div>';
 echo '<div class="club"><label for="club">Клуб</label>
   <select name="club">
     <option id="club" value="School1">СШ1</option>
     <option id="club" value="School133">СШ133</option>
     <option id="club" value="School00">Клуб</option>
     
  </select></div>';
 echo '<div class="grup"><label for="grupp">Группа</label>
   <select name="grupp">
    
     <option id="grupp" value="g1">Группа 1</option>
     <option id="grupp" value="g2">Группа 2</option>
     <option id="grupp" value="g3">Группа 3</option>
     <option id="grupp" value="g4">Группа 4</option>
     <option id="grupp" value="g5">Группа 5</option>
     <option id="grupp" value="g6">Группа 6</option>
     <option id="grupp" value="g7">Группа 7</option>
     <option id="grupp" value="g8">Группа 8</option>
   </select></div>';
   
}

 if ($_SESSION['bd'] == 'AM') {
  $_SESSION['sity'] = 'Dnepr';
  
 echo '<div>г.Днепр,</div>';
 echo '<div class="club"><label for="club">Клуб</label>
   <select name="club">
     
     <option id="club" value="School119">СШ119</option>
     <option id="club" value="School119">СШ101</option>
     <option id="club" value="School137">СШ137</option>
     <option id="club" value="School00">Детсад</option>
  </select></div>';
 echo '<div class="grup"><label for="grupp">Группа</label>
   <select name="grupp">
     
     <option id="grupp" value="g1">Группа 1</option>
     <option id="grupp" value="g2">Группа 2</option>
     <option id="grupp" value="g3">Группа 3</option>
     <option id="grupp" value="g4">Группа 4</option>
     <option id="grupp" value="g5">Группа 5</option>
     <option id="grupp" value="g6">Группа 6</option>
     <option id="grupp" value="g7">Группа 7</option>
     <option id="grupp" value="g8">Группа 8</option>
   </select></div>';
   
}




?>


   <p>
    <input id="mon" type="checkbox" name="mon" value="1">
    <label for="mon">Понедельник</label>
    <input id="tues" type="checkbox" name="tues" value="2">
    <label for="tues">Вторник</label>
    <input id="wed" type="checkbox" name="wed" value="3">
    <label for="wed">Среда</label>
    <input id="thurs" type="checkbox" name="thurs" value="4">
    <label for="thurs">Четверг</label>
    <input id="fri" type="checkbox" name="fri" value="5">
    <label for="fri">Пятница</label>
    <input id="sat" type="checkbox" name="sat" value="6">
    <label for="sat">Суббота</label>
    <input id="sun" type="checkbox" name="sun" value="0">
    <label for="sun">Воскресенье</label>
   </p>


<!--<legend>
    <b>Открытые группы</b>
  </legend>
-->
 </fieldset>
<fieldset style="text-align: center;">
  
    <h5>Взнос за одну тренировку</h5>
  

  <div class="row">
    <div class="col">
      <input type="text" class="form-control-born" size="1" placeholder="41.5" required name="pay_1_tren">
    </div>
    
  </div>

</fieldset>
<br>

<fieldset style="text-align: center;">
  
    <h5>Число не возвращаемых занятий</h5>
  

  <div class="row">
    <div class="col">
      <input type="text" class="form-control-born" size="1" placeholder="5" required name="free_trenings">
    </div>
    
  </div>

</fieldset>
<br>

<div class="but1">
  <button type="submit" >Активировать</button>
</div>

</form>

</div>
<br><br><br>
    <script src="js\jquery-3.5.1.min.js"></script>
    <script src="js\bootstrap.min.js"></script>
  </body>
</html>