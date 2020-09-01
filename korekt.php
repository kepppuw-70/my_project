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
        <form action="korekt.php" method="POST"><input type="submit" value="1-Данные" name="data1k"></form>
      </li>
      <li class="nav-item">
        <form action="korekt.php" method="POST"><input type="submit" value="2-Данные" name="data2k"></form>
      </li>
      <li class="nav-item">
        <form action="korekt.php" method="POST"><input type="submit" value="3-Данные" name="data3k"></form>
      </li>
       <li class="nav-item">
        <form action="korekt.php" method="POST"><input type="submit" value="4-Данные" name="data4k"></form>
      </li>
       <li class="nav-item">
        <form action="korekt.php" method="POST"><input type="submit" value="5-Данные" name="data5k"></form>
      </li>

       <li class="nav-item">
        <form action="korekt.php" method="POST"><input type="submit" value="6-Данные" name="data6k"></form>
      </li>
      
    </ul>
  </div>
</nav>

<br><br><br><br><br><br>
<div class="mx-auto" style="width: 200px;"><h2>Редактирование</h2></div>







<?php 
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
 
  for ($i=0; $i < $num_line; $i++) {
     echo '<tr><td>'.($i+1).'</td>';
     for ($k=$_SESSION['delta']; $k < 3+$_SESSION['delta']-$x; $k++) { 
         echo'<td>';

         if ($_SESSION['$korekt'.$i.$k] == 'but') {
           echo '<form action="korekt.php" method="POST"> <input type="submit" class="b1" value="'.$arr_dva[$i][$k].'" name="piec'.$i.$k.'"></form>';
        }
        if ($_SESSION['$korekt'.$i.$k] == 'korekt'){
             if ($k == 0 || $k == 1 || $k == 2|| $k == 6 || $k == 7|| $k == 8) {
              echo '<form action="korektxxx.php" method="POST"><input type="text" size="20" name="inf" required><button type="submit" >ok</button></form>';
           }

           

           if ($k == 3) {
              echo '<form action="korektxxx.php" method="POST"><input type="radio" name="sex" value="Мужской" class="polstud" required>Мужской
                    <input type="radio" name="sex" value="Женский" class="polstud" required>Женский<button type="submit" >ok</button></form>';
            }

           if ($k == 4) {
              echo ' <form action="korektxxx.php" method="POST"><label for="den">число</label>
                     <input id="den" type="text" size="1" name="born_day" required placeholder="07">

                    <label for="mes">месяц</label>
                    <input id="mes" type="text" size="1" name="born_munz" required placeholder="05">
    
                    <label for="god">год</label>
                    <input id="god" type="text" size="4" name="born_yar" required placeholder="2000"><button type="submit" >ok</button></form>';
           }

           if ($k == 5) {
              echo ' <form action="korektxxx.php" method="POST"><input type="radio" name="rung" value="10Кю" class="rung_stud" required>10Кю
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
              echo '<form action="korektxxx.php" method="POST"><input type="radio" name="kategor" value="Любитель" class="polstud" required>Любитель
   <input type="radio" name="kategor" value="Спортсмен" class="polstud" required>Спортсмен<button type="submit" >ok</button></form>';
           }

           if ($k == 10) {
               echo '<form action="korektxxx.php" method="POST"><input type="text" size="1" name="inf" required><button type="submit" >ok</button></form>';
           }

           if ($k == 11) {
              echo '<form action="korektxxx.php" method="POST"><input class="raz" type="radio" name="sport" value="Ч/п города">Чемпион/призёр города
                    <input class="raz" type="radio" name="sport" value="Ч/п облости">Чемпион/призёр облости
                    <input class="raz" type="radio" name="sport" value="Ч/п Украины">Чемпион/призёр Украины
                    <input class="raz" type="radio" name="sport" value="Ч/п Европы">Чемпион/призёр Европы
                    <input class="raz" type="radio" name="sport" value="Ч/п Мира">Чемпион/призёр Мира<button type="submit" >ok</button></form>';
           }

           if ($k == 12) {
              echo '<form action="korektxxx.php" method="POST"><label for="denc">число</label>
              <input id="denc" type="text" size="1" name="cump_day" required placeholder="07">

              <label for="mesc">месяц</label>
              <input id="mesc" type="text" size="1" name="cump_munz" required placeholder="05">
    
              <label for="godc">год</label>
              <input id="godc" type="text" size="4" name="cump_yar" required placeholder="2000"><button type="submit" >ok</button></form>';
           }

           if ($k == 13) {
              echo '<form action="korektxxx.php" method="POST"><div>
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
  echo '<form action="korektxxx.php" method="POST">';
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
  echo '<form action="korektxxx.php" method="POST">';
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
  echo '<form action="korektxxx.php" method="POST">';
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
  echo '<form action="korektxxx.php" method="POST">';
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
  echo '<form action="korektxxx.php" method="POST">';
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
               echo '<form action="korektxxx.php" method="POST"><input type="text" size="20" name="inf" required><button type="submit" >ok</button></form>';
           }

           if ($k == 16) {
               echo '<form action="korektxxx.php" method="POST"><input type="text" size="10" name="inf" required><button type="submit" >ok</button></form>';
           }

            if ($k == 17) {
               echo '<form action="korektxxx.php" method="POST"><input type="text" size="10" name="inf" required><button type="submit" >ok</button></form>';
           }

        }


         
         echo'</td>';
        } 
        echo '</tr>';
    }
    echo '</table>';
}
/**/

?>

<br><br>
<form action="del_str_bd.php" method="POST">
<div class="reg_pole"> 
<div class="reg_zag"><h3>Введите номер строки для удаления спортсмена</h3></div>
<div class="reg_inp"><input type="text" size="1" name="mydel" required></div>
<br>
<div class="butregstud"><button type="submit">Удалить</button></div>
</form>
<br><br>


   </div>
</div>
 




 <script src="js\jquery-3.5.1.min.js"></script>
    <script src="js\bootstrap.min.js"></script>



</body>

</html>


