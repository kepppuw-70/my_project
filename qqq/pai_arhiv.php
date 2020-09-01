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
    </style>
  </head>
  <body>
    <br><br><br>
 <?php

    session_start();
   
    include 'php_function/functionPHP_bd.php';
$arr_grupp_for_perekl = $_SESSION['grupp_for_perekl_sportsm'];
//show_arr($arr_grupp_for_perekl);
$num_arr_grupp_for_perekl = count($arr_grupp_for_perekl);
for ($i=0; $i < $num_arr_grupp_for_perekl; $i++) {
   $pieces_sportsm = explode("*", $arr_grupp_for_perekl[$i]); 
   if($_POST['sportsm'.$i]){
   $name_stud = $pieces_sportsm[0];
  }
}

//echo 'name_stud - '.$name_stud.'<br>';








    if ($_SESSION['bd'] == 'EO') {
      $arr_name_grupp[0] = 'Dnepr,School54,g0';
      $arr_name_grupp[1] = 'Dnepr,School54,g1';
      $arr_name_grupp[2] = 'Dnepr,School54,g2';
      $arr_name_grupp[3] = 'Dnepr,School54,g3';
      $arr_name_grupp[4] = 'Dnepr,School54,g4';
      $arr_name_grupp[5] = 'Dnepr,School54,g5';
      $arr_name_grupp[6] = 'Dnepr,School54,g6';
      $arr_name_grupp[7] = 'Dnepr,School54,g7';
      $arr_name_grupp[8] = 'Dnepr,School54,g8';
      $arr_name_grupp[9] = 'Dnepr,School99,g0';
      $arr_name_grupp[10] = 'Dnepr,School99,g1';
      $arr_name_grupp[11] = 'Dnepr,School99,g2';
      $arr_name_grupp[12] = 'Dnepr,School99,g3';
      $arr_name_grupp[13] = 'Dnepr,School99,g4';
      $arr_name_grupp[14] = 'Dnepr,School99,g5';
      $arr_name_grupp[15] = 'Dnepr,School99,g6';
      $arr_name_grupp[16] = 'Dnepr,School99,g7';
      $arr_name_grupp[17] = 'Dnepr,School99,g8';
    }

    if ($_SESSION['bd'] == 'PG') {
      $arr_name_grupp[0] = 'Dnepr,School102,g0';
      $arr_name_grupp[1] = 'Dnepr,School102,g1';
      $arr_name_grupp[2] = 'Dnepr,School102,g2';
      $arr_name_grupp[3] = 'Dnepr,School102,g3';
      $arr_name_grupp[4] = 'Dnepr,School102,g4';
      $arr_name_grupp[5] = 'Dnepr,School102,g5';
      $arr_name_grupp[6] = 'Dnepr,School102,g6';
      $arr_name_grupp[7] = 'Dnepr,School102,g7';
      $arr_name_grupp[8] = 'Dnepr,School102,g8';
    }

    if ($_SESSION['bd'] == 'RV') {
      $arr_name_grupp[0] = 'Dnepr,School55,g0';
      $arr_name_grupp[1] = 'Dnepr,School55,g1';
      $arr_name_grupp[2] = 'Dnepr,School55,g2';
      $arr_name_grupp[3] = 'Dnepr,School55,g3';
      $arr_name_grupp[4] = 'Dnepr,School55,g4';
      $arr_name_grupp[5] = 'Dnepr,School55,g5';
      $arr_name_grupp[6] = 'Dnepr,School55,g6';
      $arr_name_grupp[7] = 'Dnepr,School55,g7';
      $arr_name_grupp[8] = 'Dnepr,School55,g8';
    }

    if ($_SESSION['bd'] == 'IG') {
      $arr_name_grupp[0] = 'Dnepr,School133,g0';
      $arr_name_grupp[1] = 'Dnepr,School133,g1';
      $arr_name_grupp[2] = 'Dnepr,School133,g2';
      $arr_name_grupp[3] = 'Dnepr,School133,g3';
      $arr_name_grupp[4] = 'Dnepr,School133,g4';
      $arr_name_grupp[5] = 'Dnepr,School133,g5';
      $arr_name_grupp[6] = 'Dnepr,School133,g6';
      $arr_name_grupp[7] = 'Dnepr,School133,g7';
      $arr_name_grupp[8] = 'Dnepr,School133,g8';
      $arr_name_grupp[9] = 'Dnepr,School00,g0';
      $arr_name_grupp[19] = 'Dnepr,School00,g1';
      $arr_name_grupp[11] = 'Dnepr,School00,g2';
      $arr_name_grupp[12] = 'Dnepr,School00,g3';
      $arr_name_grupp[13] = 'Dnepr,School00,g4';
      $arr_name_grupp[14] = 'Dnepr,School00,g5';
      $arr_name_grupp[15] = 'Dnepr,School00,g6';
      $arr_name_grupp[16] = 'Dnepr,School00,g7';
      $arr_name_grupp[17] = 'Dnepr,School00,g8';
    }

    if ($_SESSION['bd'] == 'AM') {
      $arr_name_grupp[0] = 'Dnepr,School1,g0';
      $arr_name_grupp[1] = 'Dnepr,School1,g1';
      $arr_name_grupp[2] = 'Dnepr,School1,g2';
      $arr_name_grupp[3] = 'Dnepr,School1,g3';
      $arr_name_grupp[4] = 'Dnepr,School1,g4';
      $arr_name_grupp[5] = 'Dnepr,School1,g5';
      $arr_name_grupp[6] = 'Dnepr,School1,g6';
      $arr_name_grupp[7] = 'Dnepr,School1,g7';
      $arr_name_grupp[8] = 'Dnepr,School1,g8';
      $arr_name_grupp[9] = 'Dnepr,School101,g0';
      $arr_name_grupp[10] = 'Dnepr,School101,g1';
      $arr_name_grupp[11] = 'Dnepr,School101,g2';
      $arr_name_grupp[12] = 'Dnepr,School101,g3';
      $arr_name_grupp[13] = 'Dnepr,School101,g4';
      $arr_name_grupp[14] = 'Dnepr,School101,g5';
      $arr_name_grupp[15] = 'Dnepr,School101,g6';
      $arr_name_grupp[16] = 'Dnepr,School101,g7';
      $arr_name_grupp[17] = 'Dnepr,School101,g8';
      $arr_name_grupp[18] = 'Dnepr,School119,g0';
      $arr_name_grupp[19] = 'Dnepr,School119,g1';
      $arr_name_grupp[20] = 'Dnepr,School119,g2';
      $arr_name_grupp[21] = 'Dnepr,School119,g3';
      $arr_name_grupp[22] = 'Dnepr,School119,g4';
      $arr_name_grupp[23] = 'Dnepr,School119,g5';
      $arr_name_grupp[24] = 'Dnepr,School119,g6';
      $arr_name_grupp[25] = 'Dnepr,School119,g7';
      $arr_name_grupp[26] = 'Dnepr,School119,g8';
      $arr_name_grupp[27] = 'Dnepr,School137,g0';
      $arr_name_grupp[28] = 'Dnepr,School137,g1';
      $arr_name_grupp[29] = 'Dnepr,School137,g2';
      $arr_name_grupp[30] = 'Dnepr,School137,g3';
      $arr_name_grupp[31] = 'Dnepr,School137,g4';
      $arr_name_grupp[32] = 'Dnepr,School137,g5';
      $arr_name_grupp[33] = 'Dnepr,School137,g6';
      $arr_name_grupp[34] = 'Dnepr,School137,g7';
      $arr_name_grupp[35] = 'Dnepr,School137,g8';
      $arr_name_grupp[36] = 'Dnepr,School00,g0';
      $arr_name_grupp[37] = 'Dnepr,School00,g1';
      $arr_name_grupp[38] = 'Dnepr,School00,g2';
      $arr_name_grupp[39] = 'Dnepr,School00,g3';
      $arr_name_grupp[40] = 'Dnepr,School00,g4';
      $arr_name_grupp[41] = 'Dnepr,School00,g5';
      $arr_name_grupp[42] = 'Dnepr,School00,g6';
      $arr_name_grupp[43] = 'Dnepr,School00,g7';
      $arr_name_grupp[44] = 'Dnepr,School00,g8';
    }
    $l = 0;
    for ($k=2020; $k <=date('Y') ; $k++) { 
        for ($i=1; $i <= date('m'); $i++) {
          if ($i < 10) {
            $arr_data[$l] = '0'.$i.$k;
          }
          else{
             $arr_data[$l] = $i.$k;
          }
        
        $l++;
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
      
       <li class="nav-item">
        <a class="nav-link" href="grups.php">Выход</a>
      </li>
      
    </ul>
  </div>
</nav>
<div class="container">
<br><br><br>

<br><br>


<?php

//show_arr($arr_name_grupp);
$num_arr_grupp =  count($arr_name_grupp);
$num_arr_data =  count($arr_data);
$n = 0;
for ($i=0; $i < $num_arr_data; $i++) { 
    $m = 0;
    $sovp = 'off'; 
    for ($l=0; $l < $num_arr_grupp; $l++) {
        
        $file_posesh = 'bd_all_sports/grupps'.$_SESSION['bd'].'/'.$arr_name_grupp[$l].$arr_data[$i].'.txt';
        //echo 'file_posesh - '.$file_posesh.'<br>';
        if (file_exists($file_posesh)) {
           $arr_perekl = reed_from_file_fool_name_to_arr($file_posesh);
           $num_arr_perekl =  count($arr_perekl);
           for ($k=0; $k < $num_arr_perekl; $k++) { 
               $pieces_selekt_sportsm = explode("*", $arr_perekl[$k]);
               if ($name_stud == $pieces_selekt_sportsm[0]) {
                  $sovp = 'on';
                  //
                  ${$arr_data[$i]}[$m] = $arr_perekl[$k];
                  $m++;
               }
            }
         }
         
         
    }
    if ($sovp == 'on') {
              //
               $arr_name_data[$n] = $arr_data[$i];
               $n++;
         }
    
}









$n = 0;
for ($i=0; $i < $num_arr_data; $i++) { 
    $sovp = 'off'; 
    $file_otr = 'bd_all_sports/grupps'.$_SESSION['bd'].'/'.'otrobotka_'.$arr_data[$i].'.txt';
    if (file_exists($file_otr)) {
       $arr_otr = reed_from_file_fool_name_to_arr($file_otr);
       //echo 'file_otr - '.$file_otr.'<br>';
       //($arr_otr);
       $num_arr_otr =  count($arr_otr);
       for ($k=0; $k < $num_arr_otr; $k++) { 
           $pieces_selekt_sportsm = explode("*", $arr_otr[$k]);
           if ($name_stud == $pieces_selekt_sportsm[0]) {
              $sovp = 'on';
              $num_selekt_sportsm =  count($pieces_selekt_sportsm);
              $sting_data_otr = null;
              for ($z=1; $z < ($num_selekt_sportsm-1); $z++) { 
                  $sting_data_otr = $sting_data_otr.$pieces_selekt_sportsm[$z].' '; 
              }
             
              //echo "$name_stud".' - '.$arr_name_otr[$n].'<br>';
              
           }
           

           
           

        }
        if ($sovp == 'on') {
              $arr_data_otr[$n] = $sting_data_otr;
              $n++;
           }
           else{
            $arr_data_otr[$n] = null;;
              $n++;
           }
     }
         
         
    
   
         
    
}



//show_arr($arr_data_otr);






$num_arr_name_data =  count($arr_name_data);
//echo 'num_arr_name_data - '.$num_arr_name_data.'<br>';
for ($i=0; $i < $num_arr_name_data; $i++) {
    $n++;
    $str = $arr_name_data[$i];
    $arr_manzyar = str_split($str, 2);
    $manz_yar = $arr_manzyar[0].'/'.$arr_manzyar[1].$arr_manzyar[2];
    //echo $arr_name_data[$i].'<br>';
    $num_arr_data =  count(${$arr_name_data[$i]});
    $arr_main = null;
    if ($num_arr_data > 1) { // условие посещени в течении месяца боллее одной группы
       for ($k=0; $k < $num_arr_data; $k++) {
           $pieces_all_data_sportsm = explode("*", ${$arr_name_data[$i]}[$k]);
           $num_all_data_sportsm =  count($pieces_all_data_sportsm);
           
           //echo 'строка - '.${$arr_name_data[$i]}[$k].'<br>';
           //echo 'колличество дней - '.$num_all_data_sportsm.'<br>';



           if ($num_all_data_sportsm > 2) {
               $sting_arr_main = null;
               for ($z=1; $z < ($num_all_data_sportsm-1); $z++) { 
                  $sting_arr_main = $sting_arr_main.$pieces_all_data_sportsm[$z].'*'; 
              }
              $arr_main[$k] = $sting_arr_main;
           }
        }
        $string_data = null;
        $num_data =  count($arr_main);
        for ($x=0; $x < $num_data; $x++) { 
            $string_data = $string_data.$arr_main[$x]; 
        }
        //$sting_stud = $pieces_main[0].'*'.$sting_data.'END'.PHP_EOL;
        //$string_stud = $string_data;
        //echo 'posesh_stud - '.$posesh_stud.'<br>';
        $pieces_data_stud = explode("*", $string_data);
        $pieces_data_stud = sort_arr_puzir($pieces_data_stud);
        $num_string_stud = count($pieces_data_stud);
        $string_data_stud = null;
        for ($y=0; $y < $num_string_stud; $y++) { 
           $string_data_stud = $string_data_stud.$pieces_data_stud[$y].' ';
        }
        //echo $sting_stud.'<br>';

        $posesh_stud = $string_data_stud;
    }
   
    else{
        
        $pieces_stud = explode("*", ${$arr_name_data[$i]}[0]);
        
        $num_string_stud = count($pieces_stud);
        $sting_arr_main = null;
              for ($v=1; $v < ($num_string_stud-1); $v++) { 
                  $sting_arr_main = $sting_arr_main.$pieces_stud[$v].'*';
              }
        //echo $sting_arr_main.'<br>';

        $pieces_stud = explode("*", $sting_arr_main);
        $num_string_stud = count($pieces_stud);
        $string_data_stud = null;
        for ($y=0; $y < $num_string_stud; $y++) { 
           $string_data_stud = $string_data_stud.$pieces_stud[$y].' ';
        }

        $posesh_stud = $string_data_stud;
    }
    
    $arr_manz_yar[$i] = $manz_yar;
    $arr_posesh_stud[$i] = $posesh_stud;


    //echo $manz_yar.' - '.$posesh_stud.'<br>';

}




echo '<div class="mx-auto" style="width: 300px;"><h2>'.$name_stud.'</h2></div><br>';

$num_manz_yar = count($arr_manz_yar);
echo '<table class="table" border="1">
   <caption></caption> 
   <tr>
    <th width="40">№</th>
    <th>Период</th>
    <th>Основные занятия</th>
    <th>Отработка</th>
  </tr>';
 

         

   for ($i=0; $i < $num_manz_yar; $i++) { 



            echo '<tr><th scope="row">'.($i+1).'</th><td>'.$arr_manz_yar[$i].'</td><td>'.$arr_posesh_stud[$i].'</td><td>'.$arr_data_otr[$i].'</td></tr>';
         }      
        
     
echo '</table>';

/**/


?> 
<br><br><br><br>
<?php

 ?> 
</div>
<br><br><br>
    <script src="js\jquery-3.5.1.min.js"></script>
    <script src="js\bootstrap.min.js"></script>
  </body>
</html>