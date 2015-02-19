<?php
	$click=$_POST["click"];
	$id_negocio=$_POST["id_negocio"];

	require("connect_db.php");
	


	if( isset( $_SERVER['HTTP_X_FORWARDED_FOR'] )) $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if( isset( $_SERVER ['HTTP_VIA'] ))  $ip = $_SERVER['HTTP_VIA'];
    else if( isset( $_SERVER ['REMOTE_ADDR'] ))  $ip = $_SERVER['REMOTE_ADDR'];




$sql=mysqli_query($link, "SELECT ip, TIMEDIFF(NOW(), fecha), fecha, click FROM payperclickf WHERE id_negocio='$id_negocio'");



$fila=mysqli_fetch_array($sql);

$tiempo=$fila[1]; //Diferencia entre fecha guardada y fecha actual

$click=$fila[3]; //Número de visitas

$horas_t=substr($tiempo,0,2); //Número de horas transcurridas
$horas_s=substr($tiempo,-5,-4);
$sum_horas=$horas_t+$horas_s;

$tiemRes = 1; //Varible de tiempo en horas para restringir la visita



if (mysqli_num_rows($sql)==0)

{
$c=1;
$sql1=mysqli_query($link, "INSERT INTO payperclickf(ip, click, fecha, id_negocio) VALUES('$ip','$c', NOW(), '$id_negocio')");

}



else if (mysqli_num_rows($sql) > 0 && $sum_horas >= $tiemRes)

{

	$sql2=mysqli_query($link, "UPDATE payperclickf SET fecha=NOW(), click='$click'+1 WHERE id_negocio='$id_negocio'");
	$sql3=mysqli_query($link, "UPDATE payperclick SET clickpay='$click'-1 WHERE id_negocio='$id_negocio'");
}

$sql3=mysql_query($link, "SELECT clickpay FROM payperclick WHERE id_negocio='$id_negocio'"); //Obtenemos la suma de todas las visitas


$fila1=mysqli_fetch_array($sql3); //Almacenanos el resultado de la consulta en un arreglo

$clicks_rest=$fila1[0]; //Número de visitas



?>