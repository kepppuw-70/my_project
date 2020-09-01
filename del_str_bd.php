<?php
session_start();
include 'php_function/functionPHP_bd.php'; 
$id = $_POST['mydel']-1;
$dir = "bd_all_sports";
$file_to_write = $_SESSION['bd'];
if (file_exists($dir . '/' .$file_to_write.'.txt')){
    $arr = reed_file_to_arr_without_PHP_EOL($_SESSION['bd']);
    $num_arr =  count($arr);
    $file = fopen($dir . '/' .$file_to_write.'.txt',"w");
    for($i=0;$i<$num_arr;$i++){
       if($i!=$id){
         $content_to_write = $arr[$i].PHP_EOL;
         fwrite($file, $content_to_write);
       }
    }
    fclose($fp);   
}
header('Location: korekt.php');
?>
