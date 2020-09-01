<?php

session_start();

/*
echo md5($_POST['log']).'<br>';
echo md5($_POST['pass']);
*/

$x = 0;
$log = $_POST['log'];


if ('9d0c0b554a6dc5ae2d131c16922e7872' == md5($_POST['log']) && 'cbc23da908805b35edb739158cdee7f2' == md5($_POST['pass'])) 
{
// 
$x = 1;
 $_SESSION['bd'] = $log; $_SESSION['clubs'] = 'Dnepr,School54'; $_SESSION['password'] = ''; $_SESSION['data1'] = 'on'; $_SESSION['data2'] = 'off'; $_SESSION['data3'] = 'off'; $_SESSION['data4'] = 'off';$_SESSION['data5'] = 'off'; $_SESSION['data6'] = 'off'; $_SESSION['delta'] = 0; header('Location: menu_vibora.php');
}

if ('49f38fe03598e4d63f4a0a8791c9c8b9' == md5($_POST['log']) && 'dc14555fa702b3398dfb2237470ffbf3' == md5($_POST['pass'])) 
{
// 
$x = 1;
 $_SESSION['bd'] = $log; $_SESSION['password'] = ''; $_SESSION['data1'] = 'on'; $_SESSION['data2'] = 'off'; $_SESSION['data3'] = 'off'; $_SESSION['data4'] = 'off';$_SESSION['data5'] = 'off'; $_SESSION['data6'] = 'off'; $_SESSION['delta'] = 0; header('Location: menu_vibora.php');
}

if ('3df8a820012c09fd73447ab491a0c15c' == md5($_POST['log']) && '4a1a3c5aed1e52f3e14734290e57604e' == md5($_POST['pass'])) 
{
// 
$x = 1;
 $_SESSION['bd'] = $log; $_SESSION['password'] = ''; $_SESSION['data1'] = 'on'; $_SESSION['data2'] = 'off'; $_SESSION['data3'] = 'off'; $_SESSION['data4'] = 'off';$_SESSION['data5'] = 'off'; $_SESSION['data6'] = 'off'; $_SESSION['delta'] = 0; header('Location: menu_vibora.php');
}

if ('46cf74d33e97a0cb9fb426d9c794cf38' == md5($_POST['log']) && '815b181c5543ca924daf457e7a0e8a3b' == md5($_POST['pass'])) 
{
// 
$x = 1;
 $_SESSION['bd'] = $log; $_SESSION['password'] = ''; $_SESSION['data1'] = 'on'; $_SESSION['data2'] = 'off'; $_SESSION['data3'] = 'off'; $_SESSION['data4'] = 'off';$_SESSION['data5'] = 'off'; $_SESSION['data6'] = 'off'; $_SESSION['delta'] = 0; header('Location: menu_vibora.php');
}

if ('25ec916d56b8212e569dbf2e4e4b51d4' == md5($_POST['log']) && '06f162f3a2c70f4a03f5596b975ea405' == md5($_POST['pass'])) 
{
// 
$x = 1;
 $_SESSION['bd'] = $log; $_SESSION['password'] = ''; $_SESSION['data1'] = 'on'; $_SESSION['data2'] = 'off'; $_SESSION['data3'] = 'off'; $_SESSION['data4'] = 'off';$_SESSION['data5'] = 'off'; $_SESSION['data6'] = 'off'; $_SESSION['delta'] = 0; header('Location: menu_vibora.php');
} 



if($x == 0){
//	echo "not";
$_SESSION['password'] = 'Логин или пароль не верны'; echo '<script>window.location.href = "index.php";</script>';//header('Location: index.php');
}


?>









