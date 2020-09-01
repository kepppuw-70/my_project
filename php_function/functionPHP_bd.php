<?php

function show_arr($arr_sex, $name){//Функция выводит содержание массива по строчно
  echo '<h1>'.$name.'</h1>';
  $num_str =  count($arr_sex);
  $i = 0;
  while ( $i <= $num_str-1) {
                            echo "элемент массива №".($i+1).', содержит - '. $arr_sex[$i].'<br>';
                            $i++;
                          }
  return ;                        
}


function arr_plus_arr($arr_association, $arr_plus){//Функция обьединения двух массивов в первом масиве
      $num_arr1 = count($arr_association);
      $num_arr2 = count($arr_plus);
     
     if ($num_arr1 < 1 && $num_arr2 < 1) {
        return $arr_zero;
     }

     if ($num_arr1 >= 1 && $num_arr2 < 1) {
        return $arr_association;      
     }

     if ($num_arr1 < 1 && $num_arr2 >= 1) {
        return $arr_plus;      
     }

     if ($num_arr1 >= 1 && $num_arr2 >= 1) {
        $k = $num_arr1;
        for ($i=0; $i < $num_arr2; $i++) { 
          $arr_association[$k] = $arr_plus[$i];
          $k++;  
        }
        return $arr_association;  
     }
}

function reed_from_file_fool_name_to_arr($file_name){//Функция чтения файла в массив $file_name - $_SESSION['bd'] файла
  $filename = $file_name;
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
  return ${'arr_'.$file_name};
  }
}


function reed_from_file_to_arr($file_name){//Функция чтения файла в массив $file_name - $_SESSION['bd'] файла
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
  return ${'arr_'.$file_name};
  }
}


function reed_from_file_bd_to_arr($file_name){//Функция чтения файла в массив $file_name - $_SESSION['bd'] файла
  $filename = 'bd_all_sports/'.$file_name.'.txt';
  if (file_exists($filename)) {
    ${'arr_zajv_'.$file_name} = $arr00;
     $f = fopen($filename,'r');
     $i = 0;
     while (!feof($f)){
           $string = fgets($f);
           ${'arr_zajv_'.$file_name}[$i] = $string;
           $i++;
     }
     fclose($f);

$num = count(${'arr_zajv_'.$file_name});
     unset(${'arr_zajv_'.$file_name}[$num-1]);
  return ${'arr_zajv_'.$file_name};
  }
}

function reed_from_file_perekl_to_arr($file_name){//Функция чтения файла в массив $file_name - $_SESSION['bd'] файла
  $filename = $file_name;
  if (file_exists($filename)) {
    $arr = $arr00;
     $f = fopen($filename,'r');
     $i = 0;
     while (!feof($f)){
           $string = fgets($f);
           $arr[$i] = $string;
           $i++;
     }
     fclose($f);

$num = count($arr);
     unset($arr[$num-1]);
  return $arr;
  }
}

function reed_from_file_to_arr_zajv($file_name){//Функция чтения файла в массив $file_name - $_SESSION['bd'] файла
  $filename = 'bd_sorevn/'.'zajv_'.$file_name.'.txt';
  if (file_exists($filename)) {
    ${'arr_zajv_'.$file_name} = $arr00;
     $f = fopen($filename,'r');
     $i = 0;
     while (!feof($f)){
           $string = fgets($f);
           ${'arr_zajv_'.$file_name}[$i] = $string;
           $i++;
     }
     fclose($f);

$num = count(${'arr_zajv_'.$file_name});
     unset(${'arr_zajv_'.$file_name}[$num-1]);
  return ${'arr_zajv_'.$file_name};
  }
}


function trim_PHP_EOL($arr_for_trim){//Функция удаления dв массиве у строк признака окончания - PHP_EOL
    $num_arr =  count($arr_for_trim);
    for ($o=0; $o < $num_arr; $o++) { 
        $arr_for_trim[$o] = trim($arr_for_trim[$o], "\n");
    } 
  return $arr_for_trim; 
}

function reed_file_to_arr_without_PHP_EOL($file_name){//Функция считывает файл коталог полных имён файлов в массив с удолением конца строки - PHP_EOL у имени
  $filename = 'bd_all_sports/'.$file_name.'.txt';
  if (file_exists($filename)) {
     $arr_names_files = reed_from_file_to_arr($file_name);
     $arr_names_files = trim_PHP_EOL($arr_names_files);
  } 
  return $arr_names_files; 
} 




function print_arr_for_see1($arr_sex){//Функция выведения данных членов организации из массива
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
else{}
 return ;

}



function print_arr_for_see01($arr_sex){//Функция выведения данных членов организации из массива
$num_str =  count($arr_sex);
  
if ($num_str >= 1) {
echo '<table border="1">
   <caption></caption> 
   <tr>
    <th width="40">№п/п</th>
    <th width="300">Фамилия Имя Отчество</th>
    <th width="70">Пол</th>
    <th width="130">Дата рождения</th>
    <th width="70">Степень</th>
    <th>Фамилия Имя Отчество - англ.</th>
    <th width="70">Возрост</th>
    <th width="100">Категория</th>
    <th width="50">Вес</th>
   </tr>';

  $num_str =  count($arr_sex);
  for ($i=0; $i < $num_str; $i++) { 
      $pieces = explode("*", $arr_sex[$i]);
      
      $born = explode("/", $pieces[4]);
      $d = $born[0];
      $m = $born[1];
      $y = $born[2];
      $age = getAge($d, $m, $y);

              
        echo '<tr><td>'.($i+1).'</td><td>'.$pieces[0].' '.$pieces[1].' '.$pieces[2].'</td><td>'.$pieces[3].'</td><td>'.$pieces[4].'</td><td>'.$pieces[5].'</td><td>'.$pieces[6].' '.$pieces[7].' '.$pieces[8].'</td><td>'.$age.' лет'.'</td><td>'.$pieces[9].'</td><td>'.$pieces[10].'</td></tr>';
      

  }
echo '</table>';

}
else{}
 return ;

}




function print_arr_for_see2($arr_sex){//Функция выведения данных членов организации из массива
$num_str =  count($arr_sex);
  
if ($num_str >= 1) {
echo '<table border="1">
   <caption></caption> 
   <tr>
    <th width="40">№п/п</th>
    <th width="300">Фамилия Имя Отчество</th>
    <th>Соревнования</th>
    <th>Сборы/Лагеря</th>
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
      
      
        echo '<tr><td>'.($i+1).'</td><td>'.$pieces[0].' '.$pieces[1].' '.$pieces[2].'</td><td>'.$pieces[11].'</td><td>'.$pieces[12].'</td><td>'.$pieces[13].'</td></tr>';
      

  }
echo '</table>';

}
else{}
 return ;

}

function print_arr_for_see3($arr_sex){//Функция выведения данных членов организации из массива
$num_str =  count($arr_sex);
  
if ($num_str >= 1) {
echo '<table border="1">
   <caption></caption> 
   <tr>
    <th width="40">№п/п</th>
    <th width="300">Фамилия Имя Отчество</th>
    <th>Место тренеровок</th>
    <th>Учёба/Работа</th>
    <th width="120">Телефон</th>
    
   </tr>';

  $num_str =  count($arr_sex);
  for ($i=0; $i < $num_str; $i++) { 
      $pieces = explode("*", $arr_sex[$i]);
      
      $born = explode("/", $pieces[4]);
      $d = $born[0];
      $m = $born[1];
      $y = $born[2];
      $age = getAge($d, $m, $y);
      
      
        echo '<tr><td>'.($i+1).'</td><td>'.$pieces[0].' '.$pieces[1].' '.$pieces[2].'</td><td>'.$pieces[14].'</td><td>'.$pieces[15].'</td><td>'.$pieces[16].'</td></tr>';
      

  }
echo '</table>';

}
else{}
 return ;

}

function print_arr_for_see_sorev0($arr_sex){//Функция выведения данных членов организации из массива
$num_str =  count($arr_sex);
  
if ($num_str >= 1) {
echo '<form action="sel_sorev.php" method="POST"><table border="1">
   <caption></caption> 
   <tr>
    <th width="40">№п/п</th>
    <th width="300">Фамилия Имя Отчество</th>
    <th width="70">Пол</th>
    <th width="130">Дата рождения</th>
    <th width="70">Возрост</th>
    <th width="100">Категория</th>
    <th width="50">Вес</th>
    <th width="50">Выбрать</th>
   </tr>';

  $num_str =  count($arr_sex);
  for ($i=0; $i < $num_str; $i++) { 
      $pieces = explode("*", $arr_sex[$i]);
      
      $born = explode("/", $pieces[4]);
      $d = $born[0];
      $m = $born[1];
      $y = $born[2];
      $age = getAge($d, $m, $y);
      
      if ($pieces[9] == 'Любитель') {
        $category = 'A';
      }
      if ($pieces[9] == 'Спортсмен') {
        $category = 'B';
      }

      if ($pieces[3] == 'Мужской') {
        $sex = 'M';
      }
      else{
        $sex = 'W';
      }
      
        $arr_all_sportsm_for_competitions[$i] = $pieces[0].' '.$pieces[1].' '.$age.' '.$pieces[10].' '.$sex.' '.$category;
      
        echo '<tr><td>'.($i+1).'</td><td>'.$pieces[0].' '.$pieces[1].' '.$pieces[2].'</td><td>'.$pieces[3].'</td><td>'.$pieces[4].'</td><td>'.$age.' лет'.'</td><td>'.$pieces[9].'</td><td>'.$pieces[10].'</td><td><input type="checkbox" name="sport'.$i.'" value="1"></td></tr>';
      

  }
echo '</table>';

}
else{}
 echo  '<br><input type="submit" class="but_sor1" value="Зарегестрировать"></form>';
$_SESSION['$arr_all'] = $arr_all_sportsm_for_competitions;
 return ;

}


function print_arr_for_see_sorev($arr_sex){//Функция выведения данных членов организации из массива
$num_str =  count($arr_sex);
  
if ($num_str >= 1) {
echo '<form action="sel_sorev.php" method="POST"><table class="table" border="1">
   <caption></caption> 
   <tr>
    <th width="40">№</th>
    <th>Фамилия Имя Отчество</th>
    <th>Категория</th>
    <th>Выбрать</th>
   </tr>';

  $num_str =  count($arr_sex);
  for ($i=0; $i < $num_str; $i++) { 
      $pieces = explode("*", $arr_sex[$i]);
      
      $born = explode("/", $pieces[4]);
      $d = $born[0];
      $m = $born[1];
      $y = $born[2];
      $age = getAge($d, $m, $y);
      
      if ($pieces[9] == 'Любитель') {
        $category = 'A';
      }
      if ($pieces[9] == 'Спортсмен') {
        $category = 'B';
      }

      if ($pieces[3] == 'Мужской') {
        $sex = 'M';
      }
      else{
        $sex = 'W';
      }
      
        $arr_all_sportsm_for_competitions[$i] = $pieces[0].' '.$pieces[1].' '.$age.' '.$pieces[10].' '.$sex.' '.$category;
      
        echo '<tr><th scope="row">'.($i+1).'</th><td>'.$pieces[0].' '.$pieces[1].' '.$pieces[2].'</td><td>'.$pieces[9].'</td><td><input type="checkbox" name="sport'.$i.'" value="1"></td></tr>';
      

  }
echo '</table>';

}
else{}
 echo  '<br><input type="submit" class="but_sor1" value="Зарегестрировать"></form>';
$_SESSION['$arr_all'] = $arr_all_sportsm_for_competitions;
 return ;

}



function print_arr_for_see_reg0($arr_sex){//Функция выведения данных членов организации из массива
$num_str =  count($arr_sex);
  
if ($num_str >= 1) {
echo '<table border="1">
   <caption></caption> 
   <tr>
    <th>Фамилия</th>
    <th>Имя</th>
    <th>Отчество</th>
    <th>Пол</th>
    <th>Дата рождения</th>
    <th>Степень</th>
   </tr>';

  $num_str =  count($arr_sex);
  
      $pieces = explode("*", $arr_sex[$num_str-1]);
      
        echo '<tr><td>'.$pieces[0].'</td><td>'.$pieces[1].'</td><td>'.$pieces[2].'</td><td>'.$pieces[3].'</td><td>'.$pieces[4].'</td><td>'.$pieces[5].'</td></tr>';
echo '</table>';
 return ;

}
}

function print_arr_sorevn($arr_sex){//Функция выведения данных спортсменов из массива содержащего тренера
$num_str =  count($arr_sex);
  
if ($num_str >= 1) {
echo '<table class="table" border="1">
   <caption></caption> 
   <tr>
    <th width="40">№</th>
    <th>Фамилия, Имя</th>
    <th>Возраст, вес</th>
    <th>Пол, категория</th>
    
    
   </tr>';

  $num_str =  count($arr_sex);
  for ($i=0; $i < $num_str; $i++) { 
      $pieces = explode(" ", $arr_sex[$i]);


      if ($pieces[5] == 'A'.PHP_EOL) {
        $category = 'Любитель';
      }
      if ($pieces[5] == 'B'.PHP_EOL) {
        $category = 'Спортсмен';
      }

      if ($pieces[4] == 'M') {
        $sex = 'Мужской';
      }
      else{
        $sex = 'Женский';
      }


      if (!feof($f)) {
        echo '<tr><th scope="row">'.($i+1).'</th><td>'.$pieces[0].' '.$pieces[1].'</td><td>'.$pieces[2].', '.$pieces[3].'</td><td>'.$sex.', '.$category.'</td></tr>';
      }

  }
echo '</table>';

}
else{}
 return ;

}


function mack_menu_for_pereklichki($arr_bd){

//Разбиение массива базы данных по группам
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
//Создание массивов посещаемости
echo '<br><br><br>';
//show_arr(${$arr_name_grupp[0]});
 //show_arr(${$arr_name_grupp[1]});

$num_arr_name_grupp =  count($arr_name_grupp);
  for ($l=0; $l < $num_arr_name_grupp; $l++) { 
      //$pieces_for_file_name = explode("*", ${$arr_name_grupp[$l]}[0]);
      $file_posesh_tekushey_munz = 'bd_all_sports/grupps'.$_SESSION['bd'].'/'.$arr_name_grupp[$l].date('m').date('Y').'.txt';
      if (file_exists($file_posesh_tekushey_munz)) {

         //echo 'Файл - '.$pieces_for_file_name[14].date('m').date('Y').'.txt'.'<br>';

         ${'arr_sgrupp'.$l} = reed_from_file_fool_name_to_arr($file_posesh_tekushey_munz);

         //show_arr(${$arr_name_grupp[$l]});

         ${$arr_name_grupp[$l]} = perenos_data(${'arr_sgrupp'.$l}, ${$arr_name_grupp[$l]});

         //show_arr(${'arr_sgrupp'.$l});
/**/
         

        }
    }




/*
$num_arr_name_grupp =  count($arr_name_grupp);
for ($l=0; $l < $num_arr_name_grupp; $l++) { 
    //$pieces_for_file_name = explode("*", ${$arr_name_grupp[$l]}[0]);
    $pass_file = 'bd_all_sports/grupps'.$_SESSION['bd'].'/'.$arr_name_grupp[$l].date('m').date('Y').'.txt';
    //echo 'arr_name_grupp[$l] - '.$arr_name_grupp[$l].'<br>';
    //echo 'pieces_for_file_name[14] - '.$pieces_for_file_name[14].'<br>';
    if (file_exists($pass_file)) {
        $arr_main = reed_from_file_fool_name_to_arr($pass_file);
        $arr_for_add_var = ${$arr_name_grupp[$l]};
        $num_main =  count($arr_main);
        $num_add_var =  count($arr_for_add_var);
        for ($i=0; $i < $num_add_var; $i++) {
             $sovpad = 'off';
             $pieces_for_add_var = explode("*", $arr_for_add_var[$i]);
             // $arr_for_add_var[$i] = $pieces_for_add_var[0].' '.$pieces_for_add_var[1].'*END'.PHP_EOL;
             $surname_name_add = $pieces_for_add_var[0].' '.$pieces_for_add_var[1];
            for ($k=0; $k < $num_main; $k++) {
                $pieces_main = explode("*", $arr_main[$k]); 
                $surname_name_perekl = $pieces_main[0];
                if ($surname_name_add == $surname_name_perekl) {
                   $sovpad = 'on';
                   $arr_for_add_var[$i] = $arr_main[$k];
                }
            }
            if ($sovpad == 'off') {
               $arr_for_add_var[$i] = $surname_name_add.'*END'.PHP_EOL;
               $delta++;
            }
        }
    }
    $arr_names_pass_files[$l] = $pass_file;
    ${$arr_name_grupp[$l]} = $arr_for_add_var;
}

*/

$_SESSION['name_grupp'] = $arr_name_grupp[0];


//$_SESSION['grupp_for_perekl'] = ${$arr_name_grupp[0]};
//$_SESSION['name_pass_file'] = $pass_file = 'bd_all_sports/grupps'.$_SESSION['bd'].'/'.$arr_name_grupp[0].date('m').date('Y').'.txt';

echo '<nav class="navbar fixed-top-menu_data navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler justify0" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="navbarNav1" >
<ul class="navbar-nav">';
  

for ($o=0; $o < $num_arr_name_grupp; $o++) { 
  

      echo '<li class="nav-item active">
        <form action="vizit.php" method="POST"><input type="submit" value="'.$arr_name_grupp[$o].'" name="gropp'.$o.'"></form>
      </li>';
if($_POST['gropp'.$o]){
  
    //$pieces_sportsm = explode("*", ${$arr_name_grupp[$o]}[0]);
    $_SESSION['name_grupp'] = $arr_name_grupp[$o];
    $_SESSION['grupp_for_perekl'] = ${$arr_name_grupp[$o]};
    $_SESSION['name_pass_file'] = $pass_file = 'bd_all_sports/grupps'.$_SESSION['bd'].'/'.$arr_name_grupp[$o].date('m').date('Y').'.txt';

   }
 

}      
      
echo '</ul></div></nav>';
//echo '<br>'."_SESSION['name_pass_file'] - ".$_SESSION['name_pass_file'].'<br>';
//show_arr($_SESSION['grupp_for_perekl']);

}




function print_arr_perekl($arr_sex){//Функция выведения данных спортсменов из массива содержащего тренера
$num_str =  count($arr_sex);
  
if ($num_str >= 1) {
echo '<form action="pereklichka.php" method="POST"><table class="table" border="1">
   <caption></caption> 
   <tr>
    <th width="40">№</th>
    <th width="200">Фамилия, Имя</th>
    <th class="dmY">'.date('d').'/'.date('m').'/'.date('Y').'</th>
    
    
    
   </tr>';

  $num_str =  count($arr_sex);
  for ($i=0; $i < $num_str; $i++) { 
      $pieces  = explode("*", $arr_sex[$i]);
      $arr_for_table[$i] = $pieces[0];
      
      //show_arr($arr_with_perekl[$i]);
      //echo 'arr_with_perekl[$i] '.$arr_with_perekl[$i].'<br>';
        echo '<tr><th scope="row">'.($i+1).'</th><td>'.$pieces[0].'</td><td class="dmY"><input type="checkbox" name="student'.$i.'" value="1"></form>'.'</td></tr>';
   

  }
echo '</table>';

}
else{}
   echo  '<br><input type="submit" class="but_otrabot" value="Перекличка"></form>';
$_SESSION['arr_from_tabl_perekl'] = $arr_for_table;
 //show_arr($_SESSION['arr_with_out_perekl']);
 //show_arr($_SESSION['arr_with_perekl']);
//show_arr($_SESSION['arr_with_out_perekl']);
//echo '<br>';
//show_arr($_SESSION['arr__with_perekl']);
 return ;

}


function print_arr_retrening($arr_sex){//Функция выведения данных спортсменов из массива содержащего тренера
$num_str =  count($arr_sex);
for ($i=0; $i < $num_str; $i++) { 
    $pieces  = explode("*", $arr_sex[$i]);
    $arr_name_retrening[$i] = $pieces[0].' '.$pieces[1]; 
} 
//
sort($arr_name_retrening);

//show_arr($arr_name_retrening);

if ($num_str >= 1) {
echo '<form action="retren_save.php" method="POST"><table class="table" border="1">
   <caption></caption> 
   <tr>
    <th width="40">№</th>
    <th width="200">Фамилия, Имя</th>
    <th class="dmY">'.date('d').'/'.date('m').'/'.date('Y').'</th>
  </tr>';



 
  for ($k=0; $k < $num_str; $k++) { 
    
  
     
        echo '<tr><th scope="row">'.($k+1).'</th><td>'.$arr_name_retrening[$k].'</td><td class="dmY"><input type="checkbox" name="retre'.$k.'" value="1"></td></tr>';
   
   }
  
echo '</table>';

}
else{}
 echo  '<br><input type="submit" class="but_otrabot" value="Отработка"></form>';
$_SESSION['arr_for_otrab'] = $arr_name_retrening;
//
 //show_arr($_SESSION['arr_with_out_perekl']);
 //show_arr($_SESSION['arr_with_perekl']);
//show_arr($_SESSION['arr_with_out_perekl']);
//echo '<br>';
//show_arr($_SESSION['arr__with_perekl']);
 return ;

}



function print_arr_grupps($arr_bd){
$num_bd =  count($arr_bd);
for ($i=0; $i < $num_bd; $i++) { 
    $pieces_row = explode("*", $arr_bd[$i]); 
    $pieces_grupp= explode(",", $pieces_row[14]); 
    $num_arr_grupp =  count(${$pieces_row[14]});
    if ($num_arr_grupp == 0) {
       ${$pieces_row[14]}[0] = $arr_bd[$i];
    }
    else{
       ${$pieces_row[14]}[$num_arr_grupp] = $arr_bd[$i];
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


  $num_arr_name_grupp =  count($arr_name_grupp);
  for ($l=0; $l < $num_arr_name_grupp; $l++) { 
      $pieces_for_file_name = explode("*", ${$arr_name_grupp[$l]}[0]);
      $file_posesh_tekushey_munz = 'bd_all_sports/grupps'.$_SESSION['bd'].'/'.$pieces_for_file_name[14].date('m').date('Y').'.txt';


// Вывод группы
       echo 'Группа - '.$arr_name_grupp[$l].'<br>';
        $num_sportsm_grupp =  count(${$arr_name_grupp[$l]});
        for ($m=0; $m < $num_sportsm_grupp; $m++) { 
            $pieces_sportsm = explode("*", ${$arr_name_grupp[$l]}[$m]);
            echo $pieces_sportsm[0].' '.$pieces_sportsm[1].'<br>';
        }
       echo '<br>';

   if (file_exists($file_posesh_tekushey_munz)) {
         ${'arr_sgrupp'.$l} = reed_from_file_fool_name_to_arr($file_posesh_tekushey_munz);
      }
      else{    

     $dir = 'bd_all_sports/'.'grupps'.$_SESSION['bd'];
     if( is_dir($dir) === false ){
       mkdir($dir);
     }
     $file = fopen($file_posesh_tekushey_munz,"w");
     $num_arr = count(${$arr_name_grupp[$l]});
     for ($n=0; $n < $num_arr; $n++) {
        $pieces_sportsm = explode("*", ${$arr_name_grupp[$l]}[$n]);
        $content_to_write = $pieces_sportsm[0].' '.$pieces_sportsm[1].'*END'.PHP_EOL;
        fwrite($file, $content_to_write);
       // 
    }
   
    fclose($file);


      }
  }


}


function transformation_arr1_to_arr2($arr1){//Функция чтения файла в массив $file_name - $_SESSION['bd'] файла
 $num_arr =  count($arr1);
 //echo "odnomern_arr-".$num_arr.'<br>';
   for ($i=0; $i < $num_arr; $i++) { 
      $pieces = explode("*", $arr1[$i]);
      $num_pies =  count($pieces);
      for ($k=0; $k < $num_pies; $k++) { 
         $arr2[$i][$k] = $pieces[$k];
         //echo "Срока-".$i."Столбец-".$k.'Значение-'.$arr2[$i][$k].'<br>';
      }
    }
  return $arr2;
}

function getAge($d, $m, $y) { // в качестве параметров будут год, месяц и день
    if($m > date('m') || $m == date('m') && $d > date('d'))
      return (date('Y') - $y - 1); // если ДР в этом году не было, то ещё -1
    else
      return (date('Y') - $y); // если ДР в этом году был, то отнимаем от этого года год рождения
  }

function naznachenie_file_posesh_grupps($arr_bd){

//Создание массивов групп посещаемости  
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
$_SESSION['name_grupp'] = $arr_name_grupp[0];
$_SESSION['pass_file_perekl'] = 'bd_all_sports/grupps'.$_SESSION['bd'].'/'.$arr_name_grupp[0].date('m').date('Y').'.txt';
$_SESSION['grupp_for_perekl_sportsm'] = reed_from_file_fool_name_to_arr($_SESSION['pass_file_perekl']);

//Создание меню поскщаемости

} 

function write_rewrite_file_posesh_grupps($arr_bd){

//Создание массивов групп посещаемости  
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

//Перезапись и запись новіх файлов посещаемости текущего месяца
  $num_arr_name_grupp =  count($arr_name_grupp);
  for ($l=0; $l < $num_arr_name_grupp; $l++) { 
      //$pieces_for_file_name = explode("*", ${$arr_name_grupp[$l]}[0]);
      $file_posesh_tekushey_munz = 'bd_all_sports/grupps'.$_SESSION['bd'].'/'.$arr_name_grupp[$l].date('m').date('Y').'.txt';
      if (file_exists($file_posesh_tekushey_munz)) {

         //echo 'Файл - '.$pieces_for_file_name[14].date('m').date('Y').'.txt'.'<br>';

         ${'arr_sgrupp'.$l} = reed_from_file_fool_name_to_arr($file_posesh_tekushey_munz);

         //show_arr(${$arr_name_grupp[$l]});

         ${'arr_sgrupp'.$l} = arr_plus_from_arr(${'arr_sgrupp'.$l}, ${$arr_name_grupp[$l]});

         //show_arr(${'arr_sgrupp'.$l});

         $file = fopen($file_posesh_tekushey_munz,"w");
         $num_arr = count(${'arr_sgrupp'.$l});
         for ($n=0; $n < $num_arr; $n++) {
             $content_to_write = ${'arr_sgrupp'.$l}[$n];
             fwrite($file, $content_to_write);
         }
         fclose($file);
      }
      else{    
          $dir = 'bd_all_sports/'.'grupps'.$_SESSION['bd'];
          if( is_dir($dir) === false ){
             mkdir($dir);
          }


          $file = fopen($file_posesh_tekushey_munz,"w");
          $num_arr = count(${$arr_name_grupp[$l]});
          for ($n=0; $n < $num_arr; $n++) {
              //$pieces_sportsm = explode("*", ${$arr_name_grupp[$l]}[$n]);
              $content_to_write = ${$arr_name_grupp[$l]}[$n];      //$pieces_sportsm[0].' '.$pieces_sportsm[1].'*END'.PHP_EOL;
              fwrite($file, $content_to_write);
          }
          fclose($file);

        }
    }/**/
//$_SESSION['pass_file_perekl'] = 'bd_all_sports/grupps'.$_SESSION['bd'].'/'.$arr_name_grupp[0].date('m').date('Y').'.txt';
//Создание меню поскщаемости

} 

  


function mack_menu_file_posesh_grupps($arr_bd){

//Создание массивов групп посещаемости  
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
 
//Создание меню поскщаемости
$num_arr_name_grupp = count($arr_name_grupp);
echo '<nav class="navbar fixed-top-menu_data navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler justify0" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="navbarNav1" >
<ul class="navbar-nav">';
  

for ($o=0; $o < $num_arr_name_grupp; $o++) { 
  

      echo '<li class="nav-item active">
        <form action="grups.php" method="POST"><input type="submit" value="'.$arr_name_grupp[$o].'" name="gropp'.$o.'"></form>
      </li>';
if($_POST['gropp'.$o]){
  
    //$pieces_sportsm = explode("*", ${$arr_name_grupp[$o]}[0]);
    $_SESSION['name_grupp'] = $arr_name_grupp[$o];
    $_SESSION['pass_file_perekl'] = 'bd_all_sports/grupps'.$_SESSION['bd'].'/'.$arr_name_grupp[$o].date('m').date('Y').'.txt';
    $_SESSION['grupp_for_perekl_sportsm'] = reed_from_file_fool_name_to_arr($_SESSION['pass_file_perekl']);
    
   }
 

}      


      
echo '</ul></div></nav>';
//echo '<br>'."_SESSION['name_pass_file'] - ".$_SESSION['name_pass_file'].'<br>';
/**/

}
 
function arr_plus_from_arr($arr_main, $arr_for_add_var){//Функция добовляет в первый массив не достающич людей из второго
  $num_main = count($arr_main);
  $num_add_var = count($arr_for_add_var);
  $delta = 0;
if ($num_add_var > 0) {
  
  for ($i=0; $i < $num_add_var; $i++) {
      $sovpad = 'off';
      $pieces_for_add_var = explode("*", $arr_for_add_var[$i]);
     // $arr_for_add_var[$i] = $pieces_for_add_var[0].' '.$pieces_for_add_var[1].'*END'.PHP_EOL;
      $surname_name_add = $pieces_for_add_var[0];
      for ($k=0; $k < $num_main; $k++) {
           $pieces_main = explode("*", $arr_main[$k]); 
           $surname_name_perekl = $pieces_main[0];
           if ($surname_name_add == $surname_name_perekl) {
             $sovpad = 'on';
           }
        }
        if ($sovpad == 'off') {
          $arr_main[$num_main+$delta] = $surname_name_add.'*END'.PHP_EOL;
          $delta++;
        }
    }
  }
  return $arr_main;
} 



function perenos_data($arr_main, $arr_for_add_var){//Функция добовляет в первый массив не достающич людей из второго
  //show_arr($arr_main);
  $num_main = count($arr_main);
  $num_add_var = count($arr_for_add_var);
  $delta = 0;
if ($num_add_var > 0) {
   for ($i=0; $i < $num_add_var; $i++) {
        $pieces_for_add_var = explode("*", $arr_for_add_var[$i]);
     // $arr_for_add_var[$i] = $pieces_for_add_var[0].' '.$pieces_for_add_var[1].'*END'.PHP_EOL;
       $surname_name_add = $pieces_for_add_var[0];
       for ($k=0; $k < $num_main; $k++) {
           $pieces_main = explode("*", $arr_main[$k]);
           $surname_name_perekl = $pieces_main[0];
           $num_pieces_main = count($pieces_main);
           $sting_arr_main = null;
           for ($z=0; $z < ($num_pieces_main-1); $z++) { 
               if ($pieces_main[$z] != date('d')) {
                   $sting_arr_main = $sting_arr_main.$pieces_main[$z].'*'; 
               }
           }
           $sting_arr_main = $sting_arr_main.'END'.PHP_EOL;

           
           if ($surname_name_add == $surname_name_perekl) {
             $arr_for_add_var[$i] = $sting_arr_main;
             
           }
        }
    }
  }
  //show_arr($arr_for_add_var);
  return $arr_for_add_var;

} 


function mack_menu_pai_grupp($arr_bd){

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
 
//Создание меню поскщаемости
$num_arr_name_grupp = count($arr_name_grupp);
echo '<nav class="navbar fixed-top-menu_data navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler justify0" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="navbarNav1" >
<ul class="navbar-nav">';
  

for ($o=0; $o < $num_arr_name_grupp; $o++) { 
  

      echo '<li class="nav-item active">
        <form action="pai.php" method="POST"><input type="submit" value="'.$arr_name_grupp[$o].'" name="gropp'.$o.'"></form>
      </li>';
if($_POST['gropp'.$o]){
  
    //$pieces_sportsm = explode("*", ${$arr_name_grupp[$o]}[0]);

    $_SESSION['pass_file_perekl'] = 'bd_all_sports/grupps'.$_SESSION['bd'].'/'.$arr_name_grupp[$o].date('m').date('Y').'.txt';
    $_SESSION['grupp_for_perekl_sportsm'] = reed_from_file_fool_name_to_arr($_SESSION['pass_file_perekl']);
    
   }
 

}      


      
echo '</ul></div></nav>';

}

function print_table_pai_grupp($pass_file){

  $arr_perekl = reed_from_file_fool_name_to_arr($pass_file);
 

 //show_arr($arr_perekl);

 $num_arr_perekl = count($arr_perekl);
 //echo 'num_arr_perekl - '.$num_arr_perekl.'<br>';

 for ($l=0; $l < $num_arr_perekl; $l++) { 
     $pieces_sportsm = explode("*", $arr_perekl[$l]);
     ${'pieces_sportsm'.$l} = $pieces_sportsm;
     //show_arr(${'pieces_sportsm'.$l});
     $num_pieces_sportsm = count($pieces_sportsm);
     //echo 'num_pieces_sportsm - '.$num_pieces_sportsm.'<br>';
     //$data_tr = null;
     if ($num_pieces_sportsm>2) {
        $data_tr = $pieces_sportsm[1];
        for ($m=2; $m < $num_pieces_sportsm-1; $m++) { 
            $data_tr = $data_tr.'*'.$pieces_sportsm[$m];
            //echo 'data_tr - '.$data_tr.'<br>';
        }
        ${'data_sportsm'.$l} = explode("*", $data_tr);
        //show_arr(${'data_sportsm'.$l});
     }
 }
 $m = 1;
 for ($l=0; $l < $num_arr_perekl; $l++) { 
     $data_sportsm0 = arr_plus_nuw_var_arr($data_sportsm0, ${'data_sportsm'.($l+$m)});
     $m++;
 }


//show_arr(sort_arr_puzir($data_sportsm0));

$data_sportsm0 = sort_arr_puzir($data_sportsm0);
$num_data_sportsm0 = count($data_sportsm0);
//show_arr($data_sportsm0);
 echo '<table class="table" border="1">
   <caption></caption> 
   <tr>
    <th width="40">№</th>
    <th>Фамилия, Имя</th>
    <th width="110">Последний взнос</th>
    <th>Посещаемость</th>
    <th width="90">Взнос</th>';
echo '</tr>'; 


for ($k=0; $k < $num_arr_perekl; $k++) { 
     $pieces_sportsm = explode("*", $arr_perekl[$k]);
     $num_pieces_sportsm = count($pieces_sportsm);
     //echo 'num_pieces_sportsm '.$num_pieces_sportsm.'<br>';
     
         for ($p=0; $p < $num_data_sportsm0; $p++) { 
             $sovp = 'off';
             if ($num_pieces_sportsm>2) {
                 for ($r=1; $r < $num_pieces_sportsm-1; $r++) { 
          
          //echo 'дата спортсмена '.$pieces_sportsm[$p].' все даты '.$data_sportsm0[$r].'<br>';

                     if ($data_sportsm0[$p] == $pieces_sportsm[$r]) {
                //$pieces_data[$p] = $data_sportsm0[$p];
                         $pieces_data[$p] = '<td class="posesh_on"></td>';
                         $sovp = 'on';
                 //echo 'совпало'.'<br>';
                     }

                     if($sovp == 'off'){
             //$pieces_data[$p] = '00';
                        $pieces_data[$p] = '<td class="posesh_off"></td>';
            //echo 'не совпало'.'<br>';
                     }
//echo 'sovp '.$sovp.'<br>'; 

                  }
//echo '<br>';
//echo 'pieces_data[$p] '.$pieces_data[$p].'<br>';
            }
            else{
                $pieces_data[$p] = '<td class="posesh_off"></td>';
            }
   }

     echo '<tr>
     <th scope="row">'.($k+1).'</th>
     <td><form action="pai_arhiv.php" method="POST"><input type="submit" value="'.$pieces_sportsm[0].'" name="sportsm'.$k.'"></form></td>
     <td>'.$data_posesh[$i].'</td>
     <td></td>
     <td><form action="pai_arhiv.php" method="POST"><input type="submit" value="Внести" name="sportsm'.$k.'"></form></td>';

     echo '</tr>';
   }   

echo '</table>';



}
function munz_constr($munz, $yar, $pass_file){
  
  if ($munz == '08' && $yar == '2020') {
     $dalta_wick = 6;
     $num_day = 31;
  }
 
  if ($munz == '09' && $yar == '2020') {
     $dalta_wick = 2;
     $num_day = 30;
  }

  if ($munz == '10' && $yar == '2020') {
     $dalta_wick = 4;
     $num_day = 31;
  }

  if ($munz == '11' && $yar == '2020') {
     $dalta_wick = 7;
     $num_day = 30;
  }

  if ($munz == '12' && $yar = '2020') {
     $dalta_wick = 2;
     $num_day = 31;
  }

  if ($munz == '01' && $yar == '2021') {
     $dalta_wick = 5;
     $num_day = 31;
  }

  if ($munz == '02' && $yar == '2021') {
     $dalta_wick = 1;
     $num_day = 28;
  }

  if ($munz == '03' && $yar == '2021') {
     $dalta_wick = 1;
     $num_day = 31;
  }

  if ($munz == '04' && $yar == '2021') {
     $dalta_wick = 4;
     $num_day = 30;
  }

  if ($munz == '05' && $yar == '2021') {
     $dalta_wick = 6;
     $num_day = 31;
  }

  if ($munz == '06' && $yar == '2021') {
     $dalta_wick = 2;
     $num_day = 30;
  }

  if ($munz == '07' && $yar == '2021') {
     $dalta_wick = 4;
     $num_day = 31;
  }

/*
  echo 'munz - '.$munz.'<br>';
  echo 'yar - '.$yar.'<br>';
  echo 'dalta_wick - '.$dalta_wick.'<br>';
  echo 'num_day - '.$num_day.'<br>';
*/
  for ($i=0; $i < $num_day; $i++) { 

  $day = $i+1;
  if ($day <=9) {
    $day = '0'.$day;
  }
  $wick = $dalta_wick + $i;
  
  if ($wick > 7 && $wick < 15) {
      $wick = $wick -7;
  }
  
  if ($wick > 14 && $wick < 22) {
      $wick = $wick -14;
  }

  if ($wick > 21 && $wick < 29) {
      $wick = $wick -21;
  }

  if ($wick > 28) {
      $wick = $wick -28;
  }

  $data[$i] = $day.'/'.$munz.'/'.$yar.'/'.$wick;

 }
 //echo '<br><br><br><br><br><br><br><br><br><br><br>';
//echo 'Файл - '.$_SESSION['pass_file_perekl'].'<br>';
//$pass_file = $_SESSION['pass_file_perekl'];
 $arr_perekl = reed_from_file_fool_name_to_arr($pass_file);
 

 //show_arr($arr_perekl);

 $num_arr_perekl = count($arr_perekl);
 //echo 'num_arr_perekl - '.$num_arr_perekl.'<br>';

 for ($l=0; $l < $num_arr_perekl; $l++) { 
     $pieces_sportsm = explode("*", $arr_perekl[$l]);
     ${'pieces_sportsm'.$l} = $pieces_sportsm;
     //show_arr(${'pieces_sportsm'.$l});
     $num_pieces_sportsm = count($pieces_sportsm);
     //echo 'num_pieces_sportsm - '.$num_pieces_sportsm.'<br>';
     //$data_tr = null;
     if ($num_pieces_sportsm>2) {
        $data_tr = $pieces_sportsm[1];
        for ($m=2; $m < $num_pieces_sportsm-1; $m++) { 
            $data_tr = $data_tr.'*'.$pieces_sportsm[$m];
            //echo 'data_tr - '.$data_tr.'<br>';
        }
        ${'data_sportsm'.$l} = explode("*", $data_tr);
        //show_arr(${'data_sportsm'.$l});
     }
 }
 $m = 1;
 for ($l=0; $l < $num_arr_perekl; $l++) { 
     $data_sportsm0 = arr_plus_nuw_var_arr($data_sportsm0, ${'data_sportsm'.($l+$m)});
     $m++;
 }


//show_arr(sort_arr_puzir($data_sportsm0));

$data_sportsm0 = sort_arr_puzir($data_sportsm0);
$num_data_sportsm0 = count($data_sportsm0);
//show_arr($data_sportsm0);
 echo '<table class="table" border="1">
   <caption></caption> 
   <tr>
    <th width="40">№</th>
    <th>Фамилия, Имя</th>';
    
if ($num_data_sportsm0 > 0) {
   for ($i=0; $i < $num_data_sportsm0; $i++) { 
        echo '<th width="40">'.$data_sportsm0[$i].'</th>';
    }
}
    
   echo '</tr>'; 


for ($k=0; $k < $num_arr_perekl; $k++) { 
     $pieces_sportsm = explode("*", $arr_perekl[$k]);
     $num_pieces_sportsm = count($pieces_sportsm);
     //echo 'num_pieces_sportsm '.$num_pieces_sportsm.'<br>';
     
         for ($p=0; $p < $num_data_sportsm0; $p++) { 
             $sovp = 'off';
             if ($num_pieces_sportsm>2) {
                 for ($r=1; $r < $num_pieces_sportsm-1; $r++) { 
          
          //echo 'дата спортсмена '.$pieces_sportsm[$p].' все даты '.$data_sportsm0[$r].'<br>';

                     if ($data_sportsm0[$p] == $pieces_sportsm[$r]) {
                //$pieces_data[$p] = $data_sportsm0[$p];
                         $pieces_data[$p] = '<td class="posesh_on"></td>';
                         $sovp = 'on';
                 //echo 'совпало'.'<br>';
                     }

                     if($sovp == 'off'){
             //$pieces_data[$p] = '00';
                        $pieces_data[$p] = '<td class="posesh_off"></td>';
            //echo 'не совпало'.'<br>';
                     }
//echo 'sovp '.$sovp.'<br>'; 

                  }
//echo '<br>';
//echo 'pieces_data[$p] '.$pieces_data[$p].'<br>';
            }
            else{
                $pieces_data[$p] = '<td class="posesh_off"></td>';
            }
   }

     echo '<tr>
     <th scope="row">'.($k+1).'</th>
     <td><form action="arhiv.php" method="POST"><input type="submit" value="'.$pieces_sportsm[0].'" name="sportsm'.$k.'"></form></td>';

  //  '<td>'.$pieces_sportsm[0].'</td>';
     for ($i=0; $i < $num_data_sportsm0; $i++) { 
         echo $pieces_data[$i];
     }
     echo '</tr>';
   }   

echo '</table>';



//return $data;
}


function arr_plus_nuw_var_arr($arr_main, $arr_for_add_var){//Функция добовляет в первый отсутствующие из второго масива
  $num_main = count($arr_main);
  $num_add_var = count($arr_for_add_var);
  $delta = 0;
if ($num_main > 0 && $num_add_var > 0) {
  
  for ($i=0; $i < $num_add_var; $i++) {
      $sovpad = 'off';
     
      for ($k=0; $k < $num_main; $k++) {
           
           if ($arr_for_add_var[$i] == $arr_main[$k]) {
             $sovpad = 'on';
           }
        }
        if ($sovpad == 'off') {
          $arr_main[$num_main+$delta] = $arr_for_add_var[$i];
          $delta++;
        }
    }
  }

  if ($num_main < 1 && $num_add_var > 0) {
     $arr_main = $arr_for_add_var;
  }

  return $arr_main;
} 


function sort_arr_puzir($arr_sex){//Функция сортировки 
$num_str =  count($arr_sex);

for ($j = 0; $j < $num_str - 1; $j++){
    for ($i = 0; $i < $num_str - $j - 1; $i++){
        // если текущий элемент больше следующего
        if ($arr_sex[$i] > $arr_sex[$i + 1]){
            // меняем местами элементы
            $tmp_var1 = $arr_sex[$i + 1];
            $arr_sex[$i + 1] = $arr_sex[$i];
            $arr_sex[$i] = $tmp_var1;
           
        }
    }
}
 return $arr_sex;

}





?>