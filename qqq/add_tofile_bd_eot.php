<?php

session_start();
include 'php_function/functionPHP_bd.php';
//trim ()

$name = trim($_POST['name']);
$oldname = trim($_POST['oldname']);
$surname = trim($_POST['surname']);
$sex = trim($_POST['sex']);
$born_yar = $_POST['born_yar'];
$born_munz = $_POST['born_munz'];
$born_day = $_POST['born_day'];
$born = $born_day.'/'.$born_munz.'/'.$born_yar;
$rung = trim($_POST['rung']);
$surname_ing = trim($_POST['surname_ing']);
$name_ing = trim($_POST['name_ing']);
$patron_ing = trim($_POST['patron_ing']);
$kategor = trim($_POST['kategor']);
$wate = trim($_POST['wate']);
$sport = trim($_POST['sport']);


$cump = trim($_POST['cump_day']).'/'.trim($_POST['cump_munz']).'/'.trim($_POST['cump_yar']);


$sertif = trim($_POST['ai']).','.trim($_POST['i']).','.trim($_POST['si']).','.trim($_POST['mi']).','.trim($_POST['dch']).','.trim($_POST['ao']);
$traning = $_SESSION['sity'].','.trim($_POST['club']).','.trim($_POST['grupp']);
$studi = trim($_POST['studi']);
$pfone = trim($_POST['pfone']);
$email = trim($_POST['email']);


//Запись данных спортсмена в файл Базы данных
$content_to_write = $surname.'*'.$name.'*'.$oldname.'*'.$sex.'*'.$born.'*'.$rung.'*'.$surname_ing.'*'.$name_ing.'*'.$patron_ing.'*'.$kategor.'*'.$wate.'*'.$sport.'*'.$cump.'*'.$sertif.'*'.$traning.'*'.$studi.'*'.$pfone.'*'.$email.'*PHP_EOL';

echo "string - ".$content_to_write;

$dir = "bd_all_sports";
$file_to_write = $_SESSION['bd'];

if( is_dir($dir) === false )
{
    mkdir($dir);
}
$content_to_write = $content_to_write.PHP_EOL;
$file = fopen($dir . '/' .$file_to_write.'.txt',"a+");

fwrite($file, $content_to_write);

fclose($file);
/**/
//$_SESSION['mystudon'] = 'off';
//require "apif.php"; 
write_rewrite_file_posesh_grupps($arr_sorev);
header('Location: add.php');

?>









