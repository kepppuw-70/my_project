<?php

session_start();
include 'php_function/functionPHP_bd.php'; 

$file_name = $_SESSION['bd'];
$arr1 = reed_file_to_arr_without_PHP_EOL($file_name);
$arr_dva = transformation_arr1_to_arr2($arr1);
$num_line = count($arr1);
$num_row = count(explode("*", $arr1[0]));

if ($_SESSION['$row'] == 0 || $_SESSION['$row'] == 1 || $_SESSION['$row'] == 2 || $_SESSION['$row'] == 6 || $_SESSION['$row'] == 7|| $_SESSION['$row'] == 8 || $_SESSION['$row'] == 10 || $_SESSION['$row'] == 15 || $_SESSION['$row'] == 16 || $_SESSION['$row'] == 17) {
	$inf = trim($_POST['inf']);
	$arr_dva[$_SESSION['$line']][$_SESSION['$row']] = $inf;
 }
/**/
if ($_SESSION['$row'] == 3) {
	
	$inf = trim($_POST['sex']);
	$arr_dva[$_SESSION['$line']][$_SESSION['$row']] = $inf;
	/**/
 }

 if ($_SESSION['$row'] == 4) {
	
	$inf_day = trim($_POST['born_day']);
	$inf_munz = trim($_POST['born_munz']);
	$inf_yar = trim($_POST['born_yar']);
    $inf = $inf_day.'/'.$inf_munz.'/'.$inf_yar;
	$arr_dva[$_SESSION['$line']][$_SESSION['$row']] = $inf;
	/**/
 }

 if ($_SESSION['$row'] == 5) {
	
	$inf = trim($_POST['rung']);
	$arr_dva[$_SESSION['$line']][$_SESSION['$row']] = $inf;
	/**/
 }

 if ($_SESSION['$row'] == 9) {
	
	$inf = trim($_POST['kategor']);
	$arr_dva[$_SESSION['$line']][$_SESSION['$row']] = $inf;
	/**/
 }

 if ($_SESSION['$row'] == 11) {
	
	$inf = trim($_POST['sport']);
	$arr_dva[$_SESSION['$line']][$_SESSION['$row']] = $inf;
	/**/
 }

 if ($_SESSION['$row'] == 12) {
	
	$cump_day = trim($_POST['cump_day']);
	$cump_munz = trim($_POST['cump_munz']);
	$cump_yar = trim($_POST['cump_yar']);
    $inf = $cump_day.'/'.$cump_munz.'/'.$cump_yar;
	$arr_dva[$_SESSION['$line']][$_SESSION['$row']] = $inf;
	/**/
 }

 if ($_SESSION['$row'] == 13) {
	
	$ai = trim($_POST['ai']);
	$i = trim($_POST['i']);
	$si = trim($_POST['si']);
	$mi = trim($_POST['mi']);
	$dch = trim($_POST['dch']);
	$ao = trim($_POST['ao']);
	$inf = $ai.','.$i.','.$si.','.$mi.','.$dch.','.$ao; 
	$arr_dva[$_SESSION['$line']][$_SESSION['$row']] = $inf;
	/**/
 }

 if ($_SESSION['$row'] == 14) {
	
	$club = trim($_POST['club']);
	$grupp = trim($_POST['grupp']);
	$inf = $_SESSION['sity'].','.$club.','.$grupp; 
	$arr_dva[$_SESSION['$line']][$_SESSION['$row']] = $inf;
	/**/
 }



for ($i=0; $i < $num_line; $i++) { 
	
	for ($k=0; $k < $num_row-1; $k++) {
	     if ($k == 0) {
	     	$line = $arr_dva[$i][$k];
	     }
	     else{
	     	$line = $line.'*'.$arr_dva[$i][$k];
	     }
		
	}
	$arr1[$i] = $line.'*PHP_EOL';
	//$arr1[$i] = trim($arr1[$i], "\n");
}

$dir = "bd_all_sports";
$file_to_write = $_SESSION['bd'];

if( is_dir($dir) === false )
{
    mkdir($dir);
}
//
$file = fopen($dir . '/' .$file_to_write.'.txt',"w");
$num_arr = count($arr1);
for ($i=0; $i < $num_arr; $i++) {
        $content_to_write = $arr1[$i].PHP_EOL;
        fwrite($file, $content_to_write);
       // 
    }
fclose($file);
//


$arr_sorev = reed_from_file_bd_to_arr($_SESSION['bd']);
    //print_arr_grupps($arr_sorev);
write_rewrite_file_posesh_grupps($arr_sorev);




$_SESSION['$korekt'.$_SESSION['$line'].$_SESSION['$row']] = 'but';
header('Location: korekt.php');

?>

