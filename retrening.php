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

.posesh_on{
  background: green;
}

.posesh_off{
  background: red; 
}

.dmY{
  text-align: center;
}

.but_otrabot{
  position: absolute;
  right: 100px; 
}

.dmY{
  text-align: center;
}
    </style>
  </head>
  <body>
 <?php

    session_start();
   
    include 'php_function/functionPHP_bd.php'; 

  ?> 

<nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <!----><a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler justify0" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="navbarNav" >
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="grups.php">Посещаемость<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="vizit.php">Перекличка</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Отработка</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pai.php">Взносы</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="menu_vibora.php">Выход</a>
      </li>
      
    </ul>
  </div>
</nav>


<div class="container">
<br><br><br><br><br><br>
<div class="mx-auto" style="width: 400px;"><h2>Отработка</h2></div>

<br><br><br><br>

<?php

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

$data = date('m').date('Y');

$file_to_write = 'otrobotka_'.$data;
$pass_file = $dir . '/' .$file_to_write.'.txt';
//echo 'pass_file - '.$pass_file.'<br>';
if (file_exists($pass_file)) {
    $arr_otr = reed_from_file_fool_name_to_arr($pass_file);
    $num_otr =  count($arr_otr);
   // show_arr($arr_otr);
    
    echo '<table class="table" border="1">
   <caption></caption> 
   <tr>
    <th width="40">№</th>
    <th>Фамилия, Имя</th>
    <th width="150">Дни отработки</th>
  </tr>';
 

         

   for ($i=0; $i < $num_otr; $i++) { 
       $pieces_otr = explode("*", $arr_otr[$i]);
       $num_pieces_otr =  count($pieces_otr);
       $data_otr = null;
             for ($z=1; $z < ($num_pieces_otr-1); $z++) { 
                 $data_otr = $data_otr.$pieces_otr[$z].' '; 
             }


            echo '<tr><th scope="row">'.($i+1).'</th><td>'.$pieces_otr[0].'</td><td class="dmY">'.$data_otr.'</td></tr>';
         }      
        
     
echo '</table>';

}

if (file_exists('bd_all_sports/'.$_SESSION['bd'].'.txt')) {
   
    $arr_bd = reed_from_file_bd_to_arr($_SESSION['bd']);
    

    //print_arr_grupps($arr_bd);
   
    //show_arr($arr_bd);
    print_arr_retrening($arr_bd);

}
//echo 'num_otr - '.$_SESSION['num_otr'].'<br>';
//show_arr($_SESSION['arr_otr_new']);
//show_arr($_SESSION['arr_otr']);
//echo $_SESSION['name_selekt'].'=='.$_SESSION['name_otr'].'<br>';
//echo 'sovp - '.$_SESSION['sovp'].'<br>';
//echo 'ok - '.$_SESSION['ok'].'<br>';
//show_arr($_SESSION['arr_for_otrab']);
//show_arr($arr_bd);
//show_arr($_SESSION['arr_selekt_retren']);
//$num = count($_SESSION['arr_selekt_retren']);
//echo 'num - '.$num.'<br>';

$_SESSION['name_selekt'] = null;
$_SESSION['name_otr'] = null;
$_SESSION['sovp'] = 'off';
$_SESSION['ok'] = 'not';
?> 



</div>

<br><br><br><br><br><br><br><br><br>

    <script src="js\jquery-3.5.1.min.js"></script>
    <script src="js\bootstrap.min.js"></script>
  </body>
</html>