<?php

session_start();
include 'php_function/functionPHP_bd.php'; 
$arr_otr = null; 
$_SESSION['arr_otr'] = $arr_otr;

$data = date('m').date('Y');
//show_arr($_SESSION['arr_for_otrab']);
$arr_all = $_SESSION['arr_for_otrab'];
$num_all =  count($arr_all);
$num_sel = 0;
$k = 0;
for ($i=0; $i < $num_all; $i++) { 
	if ($_POST['retre'.$i] == '1') {
		$arr_sel[$k] = $arr_all[$i];
		$k++;
		
	}
}
$num_sel =  count($arr_sel);
//*************
//$_SESSION['ok'] = 'yas';
$_SESSION['arr_selekt_retren'] = $arr_sel;
//**************
$dir = 'bd_all_sports';
if( is_dir($dir) === false )
{
    mkdir($dir);
}
$dir = 'bd_all_sports/grupps'.$_SESSION['bd'];
if( is_dir($dir) === false )
{
    mkdir($dir);
}

$num_otr = 0;
$file_to_write = 'otrobotka_'.$data;
$pass_file = $dir . '/' .$file_to_write.'.txt';
if (file_exists($pass_file)) {
    $arr_otr = reed_from_file_fool_name_to_arr($pass_file);
    $num_otr =  count($arr_otr);
}


//Если файл отработки отсутсьвует, создаётся новый - условие наличие хотя бы одного отрабатывающего.
if ($num_otr < 1 && $num_sel > 0) {
	$file = fopen($pass_file,"w");
   for ($i=0; $i < $num_sel; $i++) {
        $content_to_write = $arr_sel[$i].'*'.date('d').'*END'.PHP_EOL; 
	     fwrite($file, $content_to_write);
   }
   fclose($file);
}

//Запись в существующий файл отработки - условие наличие хотя бы одного отрабатывающего.
if ($num_otr > 0 && $num_sel > 0) {
	$delta = 0;
   for ($i=0; $i < $num_sel; $i++) {
      $name_selekt = $arr_sel[$i];
      $sovp = 'off'; 
      //$_SESSION['sovp'] = $sovp;
		for ($k=0; $k < $num_otr+$delta; $k++) { 
		    $pieces_otr = explode("*", $arr_otr[$k]);
          $name_otr = $pieces_otr[0];
          //$_SESSION['name_selekt'] = $name_selekt;
          //$_SESSION['name_otr'] = $name_otr;
          if ($name_selekt == $name_otr) {
             $sovp = 'on';
             //$_SESSION['sovp'] = $sovp;
             $num_pieces_otr = count($pieces_otr);
             $sting_pieces_otr = null;
             for ($z=0; $z < ($num_pieces_otr-1); $z++) { 
                 if ($pieces_otr[$z] != date('d')) {
                    $sting_pieces_otr = $sting_pieces_otr.$pieces_otr[$z].'*'; 
                 }
             }
             $arr_otr[$k] = $sting_pieces_otr.date('d').'*END'.PHP_EOL;
          }
          
     	}
     	if ($sovp == 'off') {
     		$arr_otr[$num_otr+$delta] = $name_selekt.'*'.date('d').'*END'.PHP_EOL; 
     		$delta++;
     	}
   }
   $num_otr =  count($arr_otr);
   $file = fopen($pass_file,"w");
   for ($i=0; $i < $num_otr; $i++) {
        $content_to_write = $arr_otr[$i]; 
	     fwrite($file, $content_to_write);
   }
   fclose($file);
}

//Удаление всех сегоднешних отработок - условие наличие файла отработок и отсутствие выбранного хотя бы одного для отработки.
//При условии если файл становиться пуст он удаляется

$_SESSION['num_otr'] = $num_otr;


if ($num_otr > 0 && $num_sel < 1) {
	$i = 0;
	$num_arr_otr_new = 0;
	$num_otr =  count($arr_otr);
   for ($k=0; $k < $num_otr; $k++) { 
		 $pieces_otr = explode("*", $arr_otr[$k]);
		 $num_pieces_otr = count($pieces_otr);
		 //if ($num_pieces_otr > 3) {}
		 	 $sting_pieces_otr = null;
          for ($z=0; $z < ($num_pieces_otr-1); $z++) { 
              if ($pieces_otr[$z] != date('d')) {
                  $sting_pieces_otr = $sting_pieces_otr.$pieces_otr[$z].'*'; 
               }
          }
          $arr_otr_new[$i] = $sting_pieces_otr.'END'.PHP_EOL;
          $i++;
	     
	}
  $num_arr_otr_new =  count($arr_otr_new);
  $k = 0;
  for ($i=0; $i < $num_arr_otr_new; $i++) { 
    $pieces_otr = explode("*", $arr_otr_new[$i]);
    $num_pieces_otr = count($pieces_otr);
    if ($num_pieces_otr > 2) {
      $arr_otr_end[$k] = $arr_otr_new[$i];
      $k++;
    }
  }

	$_SESSION['arr_otr_new'] = $arr_otr_end;

   $num_arr_otr =  count($arr_otr_end);
   if ($num_arr_otr > 0) {
   	$file = fopen($pass_file,"w");
      for ($l=0; $l < $num_arr_otr; $l++) {
        $content_to_write = $arr_otr_end[$l]; 
	     fwrite($file, $content_to_write);
      }
      fclose($file);
   }
   else{
   	unlink($pass_file);
   	$arr_otr = null;
   }
  /* */

}

















/*

if (file_exists('bd_all_sports/'.$_SESSION['bd'].'.txt')) {
    $arr_bd = reed_from_file_bd_to_arr($_SESSION['bd']);
}




//$_SESSION['$arr_sel'] = $arr_sel;

$num_sel = count($_SESSION['$arr_sel']);
echo "string".$num_sel;


$dir = "bd_sorevn";
$file_to_write = 'zajv_'.$_SESSION['bd'];

if( is_dir($dir) === false )
{
    mkdir($dir);
}

$file = fopen($dir . '/' .$file_to_write.'.txt',"w");

$num_sel = count($arr_sel);
for ($i=0; $i < $num_sel; $i++) {
    $content_to_write = $arr_sel[$i].PHP_EOL; 
	fwrite($file, $content_to_write);
}
fclose($file);

*/
if (file_exists($pass_file)) {
    $arr_otr = reed_from_file_fool_name_to_arr($pass_file);
    $_SESSION['arr_otr'] = $arr_otr;
    
}

header('Location: retrening.php');

?>









