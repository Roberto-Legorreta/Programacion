<?php
	require("connect_db.php");
	$diasp=$_POST['diasp'];
	$paybss=$_POST['paybss'];


	if( isset( $_SERVER['HTTP_X_FORWARDED_FOR'] )) $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if( isset( $_SERVER ['HTTP_VIA'] ))  $ip = $_SERVER['HTTP_VIA'];
    else if( isset( $_SERVER ['REMOTE_ADDR'] ))  $ip = $_SERVER['REMOTE_ADDR'];



	if($paybss<100) $paybs1=$paybss/0.60;
	else if($paybss<1000) $paybs1=$paybss/0.50;
	else if($paybss<10000) $paybs1=$paybss/0.40;

	$sql=mysqli_query($link, "SELECT id_negocio, clickpay, diasp FROM payperclick WHERE id_negocio='$id_negocio'");
	$fila=mysqli_fetch_array($sql);
		$click=$fila[1];
		$dias=$fila[2];
	if(mysqli_fetch_array($sql)==0){
		$sql=mysqli_query($link, "INSERT INTO payperclick VALUES('','$paybss','$diasp',NOW(),'$id_negocio')");
	}

	else{
		$sql=mysqli_query($link, "UPDATE payperclick SET clickpay='$click'+'$paybss', diasp='$diasp'+'$dias' WHERE id_negocio='$id_negocio'");

	}
$sql2=mysqli_query($link, "SELECT clickpay, diasp FROM payperclick WHERE id_negocio='$id_negocio'");
$fila2=mysqli_fetch_array($sql2);
$click_r=$fila[0];
$dias_r=$fila[1];
$sql3=mysqli_query($link,"UPDATE negocios SET clickpay='$click_r' WHERE id_negocio='$id_negocio'");
?>