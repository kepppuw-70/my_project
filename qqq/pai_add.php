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

.form-control-born {
  display: block;
  width: 6rem;
  margin-left: 6rem; 
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.form-control-wate {
  display: block;
  width: 6rem;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.form-control-email{
  display: block;
  width: 10rem;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.form-control-telef{
  display: block;
  width: 10rem;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.born-marg{
  margin-left: 3rem;
}
    </style>
  </head>
  <body>
 <?php

   session_start();include 'php_function/functionPHP_bd.php'; 
    $arr_sex = reed_file_to_arr_without_PHP_EOL($_SESSION['bd']);
    $num_str =  count($arr_sex);
    $_SESSION['$korekt'] = $num_str;

    if($_POST['data1k']){
            $_SESSION['delta'] = 0;
        }
    if($_POST['data2k']){
            $_SESSION['delta'] = 3;
        }
    if($_POST['data3k']){
            $_SESSION['delta'] = 6;
        }
    if($_POST['data4k']){
            $_SESSION['delta'] = 9;
        }
    if($_POST['data5k']){
            $_SESSION['delta'] = 12;
        }
    if($_POST['data6k']){
            $_SESSION['delta'] = 15;
        }

 $file_name = $_SESSION['bd'];
 $arr1 = reed_file_to_arr_without_PHP_EOL($file_name);
 $arr_dva = transformation_arr1_to_arr2($arr1);
 $num_line = count($arr1);
 $num_row = count(explode("*", $arr1[0]));
 for ($i=0; $i < $num_line; $i++) { 
    for ($k=0; $k < $num_row; $k++) { 
        if($_POST['piec'.$i.$k]){
            $_SESSION['$korekt'.$i.$k] = 'korekt';
            $_SESSION['$line'] = $i;
            $_SESSION['$row'] = $k;
        }
        else{
            $_SESSION['$korekt'.$i.$k] = 'but';
        }
    }
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
        <a class="nav-link" href="menu.php">Главная <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Регистрация</a>
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
        <form action="add.php" method="POST"><input type="submit" value="1-Данные" name="data1k"></form>
      </li>
      <li class="nav-item">
        <form action="add.php" method="POST"><input type="submit" value="2-Данные" name="data2k"></form>
      </li>
      <li class="nav-item">
        <form action="add.php" method="POST"><input type="submit" value="3-Данные" name="data3k"></form>
      </li>
       <li class="nav-item">
        <form action="add.php" method="POST"><input type="submit" value="4-Данные" name="data4k"></form>
      </li>
       <li class="nav-item">
        <form action="add.php" method="POST"><input type="submit" value="5-Данные" name="data5k"></form>
      </li>

       <li class="nav-item">
        <form action="add.php" method="POST"><input type="submit" value="6-Данные" name="data6k"></form>
      </li>
      
    </ul>
  </div>
</nav>

<br><br><br><br><br><br>
<div class="mx-auto" style="width: 400px;"><h2>Список спортсменов</h2></div>







<?php
//print_arr_for_see_reg0(reed_file_to_arr_without_PHP_EOL($_SESSION['bd']));


if ($num_line >= 1) {
/*    
echo '<table border="1">
   <caption></caption> 
   <tr>';
   for ($i=0; $i < $num_row; $i++) {
    echo '<th>Колонка_'.($i+1).'</th>';
   }
   echo '</tr>';
*/
   
echo '<table class="table" border="1">
   <caption></caption> 
   <tr>
    <th width="40">№</th>';
if ($_SESSION['delta'] == 0) {
    echo '<th>Фамилия</th>
    <th>Имя</th>
    <th>Отчество</th>';
    $x = 0;
}

if ($_SESSION['delta'] == 3) {
    echo '<th>Пол</th>
    <th>Дата рождения</th>
    <th>Степень</th>';
    $x = 0;
}


if ($_SESSION['delta'] == 6) {
    echo '<th>Фамилия</th>
    <th>Имя</th>
    <th>Отчество</th>';
$x = 0;
  }
if ($_SESSION['delta'] == 9) {
    echo '<th>Категория</th>
    <th>Вес</th>
    <th>Достижения</th>';
    $x = 0;
}


if ($_SESSION['delta'] == 12) {
    echo '<th>Сборы/Лагеря</th>
    <th>Сертификаты</th>
    <th>Место тренеровки</th>';
$x = 0;
}

    if ($_SESSION['delta'] == 15) {
    echo '<th>Место учёбы</th>
    <th>Телефон</th>
    <th>Email</th>';
    $x = 0;
}
   echo '</tr>';
 
  //for ($i=0; $i < $num_line; $i++) {}

    $i=$num_line-1;
     echo '<tr><td>'.($i+1).'</td>';
     for ($k=$_SESSION['delta']; $k < 3+$_SESSION['delta']-$x; $k++) { 
         echo'<td>';

         if ($_SESSION['$korekt'.$i.$k] == 'but') {
           echo '<form action="add.php" method="POST"> <input type="submit" class="b1" value="'.$arr_dva[$i][$k].'" name="piec'.$i.$k.'"></form>';
        }
        if ($_SESSION['$korekt'.$i.$k] == 'korekt'){

           if ($k == 0 || $k == 1 || $k == 2|| $k == 6 || $k == 7|| $k == 8) {
              echo '<form action="korektaaa.php" method="POST"><input type="text" size="20" name="inf" required><button type="submit" >ok</button></form>';
           }

           

           if ($k == 3) {
              echo '<form action="korektaaa.php" method="POST"><input type="radio" name="sex" value="Мужской" class="polstud" required>Мужской
                    <input type="radio" name="sex" value="Женский" class="polstud" required>Женский<button type="submit" >ok</button></form>';
            }

           if ($k == 4) {
              echo ' <form action="korektaaa.php" method="POST"><label for="den">число</label>
                     <input id="den" type="text" size="1" name="born_day" required placeholder="07">

                    <label for="mes">месяц</label>
                    <input id="mes" type="text" size="1" name="born_munz" required placeholder="05">
    
                    <label for="god">год</label>
                    <input id="god" type="text" size="4" name="born_yar" required placeholder="2000"><button type="submit" >ok</button></form>';
           }

           if ($k == 5) {
              echo ' <form action="korektaaa.php" method="POST"><input type="radio" name="rung" value="10Кю" class="rung_stud" required>10Кю
   <input type="radio" name="rung" value="9Кю" class="rung_stud" required>9Кю
   <input type="radio" name="rung" value="8Кю" class="rung_stud" required>8Кю
   <input type="radio" name="rung" value="7Кю" class="rung_stud" required>7Кю
   <input type="radio" name="rung" value="6Кю" class="rung_stud" required>6Кю
   <input type="radio" name="rung" value="5Кю" class="rung_stud" required>5Кю
   <input type="radio" name="rung" value="4Кю" class="rung_stud" required>4Кю
   <input type="radio" name="rung" value="3Кю" class="rung_stud" required>3Кю
   <input type="radio" name="rung" value="2Кю" class="rung_stud" required>2Кю
   <input type="radio" name="rung" value="1Кю" class="rung_stud" required>1Кю
   <input type="radio" name="rung" value="1Дан" class="rung_stud" required>1Дан
   <input type="radio" name="rung" value="2Дан" class="rung_stud" required>2Дан
   <input type="radio" name="rung" value="3Дан" class="rung_stud" required>3Дан
   <input type="radio" name="rung" value="4Дан" class="rung_stud" required>4Дан
   <input type="radio" name="rung" value="5Дан" class="rung_stud" required>5Дан
   <input type="radio" name="rung" value="6Дан" class="rung_stud" required>6Дан<button type="submit" >ok</button></form>';
           }

           if ($k == 9) {
              echo '<form action="korektaaa.php" method="POST"><input type="radio" name="kategor" value="Любитель" class="polstud" required>Любитель
   <input type="radio" name="kategor" value="Спортсмен" class="polstud" required>Спортсмен<button type="submit" >ok</button></form>';
           }

           if ($k == 10) {
               echo '<form action="korektaaa.php" method="POST"><input type="text" size="1" name="inf" required><button type="submit" >ok</button></form>';
           }

           if ($k == 11) {
              echo '<form action="korektaaa.php" method="POST"><input class="raz" type="radio" name="sport" value="Ч/п города">Чемпион/призёр города
                    <input class="raz" type="radio" name="sport" value="Ч/п облости">Чемпион/призёр облости
                    <input class="raz" type="radio" name="sport" value="Ч/п Украины">Чемпион/призёр Украины
                    <input class="raz" type="radio" name="sport" value="Ч/п Европы">Чемпион/призёр Европы
                    <input class="raz" type="radio" name="sport" value="Ч/п Мира">Чемпион/призёр Мира<button type="submit" >ok</button></form>';
           }

           if ($k == 12) {
              echo '<form action="korektaaa.php" method="POST"><label for="denc">число</label>
              <input id="denc" type="text" size="1" name="cump_day" required placeholder="07">

              <label for="mesc">месяц</label>
              <input id="mesc" type="text" size="1" name="cump_munz" required placeholder="05">
    
              <label for="godc">год</label>
              <input id="godc" type="text" size="4" name="cump_yar" required placeholder="2000"><button type="submit" >ok</button></form>';
           }

           if ($k == 13) {
              echo '<form action="korektaaa.php" method="POST"><div>
                    <input id="ai" type="checkbox" name="ai" value="АИ">
                    <label for="ai">Асистент Инструктора</label>
                    </div>
                    <div>
                    <input id="i" type="checkbox" name="i" value="И">
                    <label for="i">Инструктор</label>
                    </div>
                    <div>
                    <input id="si" type="checkbox" name="si" value="СИ">
                    <label for="si">Стпрший Инструктор</label>
                    </div>
                    <div>
                    <input id="mi" type="checkbox" name="mi" value="МИ">
                    <label for="mi">Мастер Инструктор</label>
                    </div>
                    <div>
                    <input id="dch" type="checkbox" name="dch" value="ДЧ">
                    <label for="dch">Додзё Чиф</label>
                    </div>
                    <div>
                    <input id="ao" type="checkbox" name="ao" value="ЭО">
                    <label for="ao">Экзамен Офицер</label>
                    </div><button type="submit" >ok</button></form>';
           }

           if ($k == 14) {


           if ($_SESSION['bd'] == 'EO') {
  $_SESSION['sity'] = 'Dnepr';
  echo '<form action="korektaaa.php" method="POST">';
 echo '<div>г.Днепр,</div>';
 echo '<div class="club"><label for="club">Клуб</label>
   <select name="club">
     <option id="club" value="School54">СШ54</option>
     <option id="club" value="School99">СШ99</option>
  </select></div>';
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
   echo '</div><button type="submit" >ok</button></form>';
}

 if ($_SESSION['bd'] == 'PG') {
  $_SESSION['sity'] = 'Dnepr';
  echo '<form action="korektaaa.php" method="POST">';
 echo '<div>г.Днепр,</div>';
 echo '<div class="club"><label for="club">Клуб</label>
   <select name="club">
     <option id="club" value="School102">СШ102</option>
     
  </select></div>';
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
   echo '</div><button type="submit" >ok</button></form>';
}

 if ($_SESSION['bd'] == 'RV') {
  $_SESSION['sity'] = 'Dnepr';
  echo '<form action="korektaaa.php" method="POST">';
 echo '<div>г.Днепр,</div>';
 echo '<div class="club"><label for="club">Клуб</label>
   <select name="club">
     <option id="club" value="School55">СШ55</option>
  </select></div>';
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
   echo '</div><button type="submit" >ok</button></form>';
}

 if ($_SESSION['bd'] == 'IG') {
  $_SESSION['sity'] = 'Dnepr';
  echo '<form action="korektaaa.php" method="POST">';
 echo '<div>г.Днепр,</div>';
 echo '<div class="club"><label for="club">Клуб</label>
   <select name="club">
     <option id="club" value="School133">СШ133</option>
     <option id="club" value="School00">Клуб</option>
  </select></div>';
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
   echo '</div><button type="submit" >ok</button></form>';
}

 if ($_SESSION['bd'] == 'AM') {
  $_SESSION['sity'] = 'Dnepr';
  echo '<form action="korektaaa.php" method="POST">';
 echo '<div>г.Днепр,</div>';
 echo '<div class="club"><label for="club">Клуб</label>
   <select name="club">
     <option id="club" value="School1">СШ1</option>
     <option id="club" value="School119">СШ119</option>
     <option id="club" value="School119">СШ101</option>
     <option id="club" value="School137">СШ137</option>
     <option id="club" value="School00">Детсад</option>
  </select></div>';
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
   echo '</div><button type="submit" >ok</button></form>';
}

       
           }

           if ($k == 15) {
               echo '<form action="korektaaa.php" method="POST"><input type="text" size="20" name="inf" required><button type="submit" >ok</button></form>';
           }

           if ($k == 16) {
               echo '<form action="korektaaa.php" method="POST"><input type="text" size="10" name="inf" required><button type="submit" >ok</button></form>';
           }

            if ($k == 17) {
               echo '<form action="korektaaa.php" method="POST"><input type="text" size="10" name="inf" required><button type="submit" >ok</button></form>';
           }



}
         
         echo'</td>';
        } 
        echo '</tr>';
    
    echo '</table>';
}
/**/


?>


<br><br>

<div class="container-fluid1">


<br><br><br><br>

<div class="mx-auto" style="width: 200px;"><h2>Анкета</h2></div>




<form action="add_tofile_bd_eot.php" method="POST">


<br><br>
<!---->

<fieldset>
   <legend>
    <b>На Украинском</b>
  </legend>

  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Прізвища" name="surname" required>
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Ім'я" name="name" required>
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="По-батькові" name="oldname" required>
    </div>
  </div>

</fieldset>

<br><br>
<!---->

<fieldset>
 <legend>
    <b>На Английском</b>
  </legend>

  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Surname" name="surname_ing" required>
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Name" name="name_ing" required>
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Patronymic" name="patron_ing" required>
    </div>
  </div>


</fieldset>

<br><br>
<!---->

<fieldset>
  <legend>
    <b>Пол</b>
  </legend>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio"  name="sex" id="inlineRadio1" value="Мужской" required>
  <label class="form-check-label" for="inlineRadio1">Мужской</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio"  name="sex" id="inlineRadio2" value="Женский" required>
  <label class="form-check-label" for="inlineRadio2">Женский</label>
</div>

</fieldset>

<br><br>

<fieldset>
   <legend>
    <b>Дата рождения</b>
  </legend>

  <div class="row">
    <div class="col">
      <input type="text" class="form-control-born" placeholder="Число 01" required name="born_day">
    </div>
    <div class="col">
      <input type="text" class="form-control-born" placeholder="Месяц 01" required name="born_munz">
    </div>
    <div class="col">
      <input type="text" class="form-control-born" placeholder="Год 2000" required name="born_yar">
    </div>
  </div>

</fieldset>

<br><br>

<fieldset>
  <legend>
    <b>Степень</b>
  </legend>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="rung" id="inlineRadio1" value="10Кю" required>
  <label class="form-check-label" for="inlineRadio1">10Кю</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="rung" id="inlineRadio2" value="9Кю" required>
  <label class="form-check-label" for="inlineRadio2">9Кю</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="rung" id="inlineRadio1" value="8Кю" required>
  <label class="form-check-label" for="inlineRadio1">8Кю</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="rung" id="inlineRadio2" value="7Кю" required>
  <label class="form-check-label" for="inlineRadio2">7Кю</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="rung" id="inlineRadio1" value="6Кю" required>
  <label class="form-check-label" for="inlineRadio1">6Кю</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="rung" id="inlineRadio2" value="5Кю" required>
  <label class="form-check-label" for="inlineRadio2">5Кю</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="rung" id="inlineRadio1" value="4Кю" required>
  <label class="form-check-label" for="inlineRadio1">4Кю</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="rung" id="inlineRadio2" value="3Кю" required>
  <label class="form-check-label" for="inlineRadio2">3Кю</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="rung" id="inlineRadio1" value="2Кю" required>
  <label class="form-check-label" for="inlineRadio1">2Кю</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="rung" id="inlineRadio2" value="1Кю" required>
  <label class="form-check-label" for="inlineRadio2">1Кю</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="rung" id="inlineRadio1" value="1Дан" required>
  <label class="form-check-label" for="inlineRadio1">1Дан</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="rung" id="inlineRadio2" value="2Дан" required>
  <label class="form-check-label" for="inlineRadio2">2Дан</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="rung" id="inlineRadio1" value="3Дан" required>
  <label class="form-check-label" for="inlineRadio1">3Дан</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="rung" id="inlineRadio2" value="4Дан" required>
  <label class="form-check-label" for="inlineRadio2">4Дан</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="rung" id="inlineRadio1" value="5Дан" required>
  <label class="form-check-label" for="inlineRadio1">5Дан</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="rung" id="inlineRadio2" value="6Дан" required>
  <label class="form-check-label" for="inlineRadio2">6Дан</label>
</div>
</fieldset>

<br><br>

<fieldset>
  <legend>
    <b>Категория подготовки</b>
  </legend>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="kategor" id="inlineRadio1" value="Любитель" required>
  <label class="form-check-label" for="inlineRadio1">Любитель</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="kategor" id="inlineRadio2" value="Спортсмен" required>
  <label class="form-check-label" for="inlineRadio2">Спортсмен</label>
</div>

</fieldset>

<br><br>

<fieldset>
   <legend>
    <b>Вес спортсмена</b>
  </legend>

  <div class="row">
    <div class="col">
      <input type="text" class="form-control-wate" placeholder="Вес 56.4" required name="wate">
    </div>
  </div>

</fieldset>

<br><br>

<fieldset>
  <legend>
    <b>Спортивные достижения</b>
  </legend>
 <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="sport" id="inlineRadio1" value="Нет достежений" required>
  <label class="form-check-label" for="inlineRadio1">Нет достежений</label>
</div>  
   <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="sport" id="inlineRadio1" value="Ч/п города" required>
  <label class="form-check-label" for="inlineRadio1">Чемпион/призёр города</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="sport" id="inlineRadio2" value="Ч/п облости" required>
  <label class="form-check-label" for="inlineRadio2">Чемпион/призёр облости</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="sport" id="inlineRadio1" value="Ч/п Украины" required>
  <label class="form-check-label" for="inlineRadio1">Чемпион/призёр Украины</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="sport" id="inlineRadio2" value="Ч/п Европы" required>
  <label class="form-check-label" for="inlineRadio2">Чемпион/призёр Европы</label>
</div> 
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="sport" id="inlineRadio2" value="Ч/п Мира" required>
  <label class="form-check-label" for="inlineRadio2">Чемпион/призёр Мира</label>
</div>
  
</fieldset>

<br><br>


<fieldset>
  <legend>
    <b>Место тренеровок</b>
  </legend>

<?php
 
 if ($_SESSION['bd'] == 'EO') {
  $_SESSION['sity'] = 'Dnepr';
  
 echo '<div>г.Днепр,</div>';
 echo '<div class="club"><label for="club">Клуб</label>
   <select name="club">
     <option id="club" value="School54">СШ54</option>
     <option id="club" value="School99">СШ99</option>
  </select></div>';
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
  
}

 if ($_SESSION['bd'] == 'RV') {
  $_SESSION['sity'] = 'Dnepr';
  
 echo '<div>г.Днепр,</div>';
 echo '<div class="club"><label for="club">Клуб</label>
   <select name="club">
     <option id="club" value="School55">СШ55</option>
   </select></div>';
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
   
}

 if ($_SESSION['bd'] == 'IG') {
  $_SESSION['sity'] = 'Dnepr';
  
 echo '<div>г.Днепр,</div>';
 echo '<div class="club"><label for="club">Клуб</label>
   <select name="club">
     <option id="club" value="School133">СШ133</option>
     <option id="club" value="School00">Клуб</option>
     
  </select></div>';
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
   
}

 if ($_SESSION['bd'] == 'AM') {
  $_SESSION['sity'] = 'Dnepr';
  
 echo '<div>г.Днепр,</div>';
 echo '<div class="club"><label for="club">Клуб</label>
   <select name="club">
     <option id="club" value="School1">СШ1</option>
     <option id="club" value="School119">СШ119</option>
     <option id="club" value="School119">СШ101</option>
     <option id="club" value="School137">СШ137</option>
     <option id="club" value="School00">Детсад</option>
  </select></div>';
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
   
}




?>




 </fieldset>

<br><br>

<fieldset>
  <legend>
    <b>Участия в семинарах/лагерях</b>
  </legend>

    <div class="row">
    <div class="col">
      <input type="text" class="form-control-born" placeholder="Число 01" required name="cump_day">
    </div>
    <div class="col">
      <input type="text" class="form-control-born" placeholder="Месяц 01" required name="cump_munz">
    </div>
    <div class="col">
      <input type="text" class="form-control-born" placeholder="Год 2020" required name="cump_yar">
    </div>
  </div>

      
</fieldset>



<br><br>

<fieldset>
  <legend>
    <b>Сертификаты</b>
  </legend>
   <p>
    <input id="ai" type="checkbox" name="ai" value="АИ">
    <label for="ai">Асистент Инструктора</label>
    <input id="i" type="checkbox" name="i" value="И">
    <label for="i">Инструктор</label>
    <input id="si" type="checkbox" name="si" value="СИ">
    <label for="si">Стпрший Инструктор</label>
    <input id="mi" type="checkbox" name="mi" value="МИ">
    <label for="mi">Мастер Инструктор</label>
    <input id="dch" type="checkbox" name="dch" value="ДЧ">
    <label for="dch">Додзё Чиф</label>
    <input id="ao" type="checkbox" name="ao" value="ЭО">
    <label for="ao">Экзамен Офицер</label>
   </p>
</fieldset>

<br><br>

<fieldset>
  <legend>
    <b>Место учёбы/работы</b>
  </legend>
    <div class="row">
     <div class="col">
      <input type="text" class="form-control" placeholder="" required name="studi">
    </div>
  </div>
</fieldset>

<br><br>
<fieldset>
  <legend>
    <b>Телефон</b>
  </legend>
     <div class="row">
     <div class="col">
      <input type="text" class="form-control-telef" placeholder="+380ххххххххх" required name="pfone">
    </div>
  </div>
</fieldset>

<br><br>
<fieldset>
  <legend>
    <b>E-mail</b>
  </legend>
     <div class="row">
     <div class="col">
      <input type="text" class="form-control-email" placeholder="хххххх@xxx.xxx" required name="email">
    </div>
  </div>
</fieldset>




<br><br>
<div class="but1">
  <button type="reset" ><a href="#line_tabl">Сбросить</a></button>
</div>
<br><br>
<div class="but1">
  <button type="submit" >Зарегестрировать</button>
</div>
</form>

</div>
<br><br>



<br><br>


    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js\jquery-3.5.1.min.js"></script>
    <script src="js\bootstrap.min.js"></script>
  </body>
</html>