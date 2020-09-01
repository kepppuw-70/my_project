<?php

session_start();
include 'php_function/functionPHP_bd.php';

$arr_from_tabl_perekl = $_SESSION['arr_from_tabl_perekl'];
$num_from_tabl_perekl = count($arr_from_tabl_perekl);
$k = 0;
//$arr_perekl = null;
for ($i=0; $i < $num_from_tabl_perekl; $i++) { 
	if ($_POST['student'.$i] == '1') {
		$arr_perekl[$k] = $arr_from_tabl_perekl[$i];
		$k++;
 	}
}
$_SESSION['arr_perekl'] = $arr_perekl;
$arr_from_file_perekl = reed_from_file_fool_name_to_arr($_SESSION['name_pass_file']);
//$_SESSION['arr_from_file_perekl'] = $arr_from_file_perekl;
$num_arr_from_file_perekl = count($arr_from_file_perekl);
$num_arr_perekl = count($arr_perekl);
//$_SESSION['num_arr_from_file_perekl'] = $num_arr_from_file_perekl;
if ($num_arr_perekl < 1) {
   for ($k=0; $k < $num_arr_from_file_perekl; $k++) {
       $pieces_from_file_perekl = explode("*", $arr_from_file_perekl[$k]);
       $num_pieces_from_file_perekl = count($pieces_from_file_perekl);
       $str = null;
       for ($i=0; $i < $num_pieces_from_file_perekl-1; $i++) { 
           if ($pieces_from_file_perekl[$i] != date('d')) {
               $str = $str.$pieces_from_file_perekl[$i].'*';
           } 
       }
       //$str = $arr_from_file_perekl[$k];
       $arr_from_file_perekl_without[$k] = $str.'END'.PHP_EOL;
       
   }
   $file = fopen($_SESSION['name_pass_file'],"w");
   for ($i=0; $i < $num_arr_from_file_perekl; $i++) {
       $content_to_write = $arr_from_file_perekl_without[$i]; 
       fwrite($file, $content_to_write);
   }
       fclose($file); 
   //$_SESSION['str'] = reed_from_file_fool_name_to_arr($_SESSION['name_pass_file']);
}   
else{
    $delta = 0;
    $arr_file_perekl = $arr_from_file_perekl;
    for ($i=0; $i < $num_arr_perekl; $i++) {
        $sovpad = 'off';
        $surname_name_perekl = $arr_perekl[$i];
        for ($k=0; $k < $num_arr_from_file_perekl; $k++) {
            $pieces_arr_from_file_perekl = explode("*", $arr_from_file_perekl[$k]); 
            $surname_from_file = $pieces_arr_from_file_perekl[0];
            if ($surname_name_perekl == $surname_from_file) {
               $sovpad = 'on';
               $sting_perekl_for_fill = null;
               $num_pieces_arr_from_file_perekl = count($pieces_arr_from_file_perekl);
               for ($z=0; $z < ($num_pieces_arr_from_file_perekl-1); $z++) {
                  $last = $pieces_arr_from_file_perekl[$z];
                  $sting_perekl_for_fill = $sting_perekl_for_fill.$pieces_arr_from_file_perekl[$z].'*'; 
               }
               if ($last != date('d')) {
                  $arr_file_perekl[$k] = $sting_perekl_for_fill.date('d').'*END'.PHP_EOL;
               }
               else{
                  $arr_file_perekl[$k] = $sting_perekl_for_fill.'END'.PHP_EOL;
               }
                
            }
        }
        if ($sovpad == 'off') {
           $arr_file_perekl[$num_arr_from_file_perekl+$delta] = $arr_perekl[$i].'*'.date('d').'*END'.PHP_EOL;
           $delta++;
        }
    }
    $num_arr_file_perekl = count($arr_file_perekl);
        $file = fopen($_SESSION['name_pass_file'],"w");
        for ($i=0; $i < $num_arr_file_perekl; $i++) {
            $content_to_write = $arr_file_perekl[$i]; 
            fwrite($file, $content_to_write);
        }
    fclose($file);
}   

$_SESSION['str'] = reed_from_file_fool_name_to_arr($_SESSION['name_pass_file']);

header('Location: vizit.php');
/**/
?>









