<?php

session_start();


$arr_all = $_SESSION['$arr_all'];
$num_all = count($arr_all);
/*
echo "0-".$_POST['sport0'].'<br>';
echo "1-".$_POST['sport1'].'<br>';
echo "2-".$_POST['sport2'].'<br>';
echo "3-".$_POST['sport3'].'<br>';
$i = 5;
echo "5-".$_POST['a'].'<br>';
*/

$k = 0;
for ($i=0; $i < $num_all; $i++) { 
	if ($_POST['sport'.$i] == '1') {
		$arr_sel[$k] = $arr_all[$i];
		$k++;
	}
}

$_SESSION['$arr_sel'] = $arr_sel;

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


header('Location: menu_sel_sorev.php');
/**/
?>









