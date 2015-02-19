<?php
include('connect_db.php');
//Negocios que no pagan mostrar
$session3=mysqli_query($link, "SELECT * FROM negocios WHERE clickpay='0' ");
$c=0;
if($row3=mysqli_fetch_array($session3)){
	
	do {
		$c=$c+1;
		$bss_session[$c]=$row3['namebss'] ;
		$bss_session1[$c]=$row3['website'];
		$bss_session2[$c]=$row3['address'];
		$bss_session3[$c]=$row3['phone'];
		$bss_session4[$c]=$row3['email'];
		$bss_session5[$c]=$row3['descrip'];
		$bss_session6[$c]=$row3['id_negocio'];
	} while($row3=mysqli_fetch_array($session3));
}
//Negocios que pagan mostrar
$session4=mysqli_query($link, "SELECT * FROM negocios WHERE clickpay>'0' ");
$d=0;
if($row4=mysqli_fetch_array($session4)){
	do {
		$d=$d+1;
		$bss_pay[$d]=$row3['namebss'] ;
		$bss_pay1[$d]=$row3['website'];
		$bss_pay2[$d]=$row3['address'];
		$bss_pay3[$d]=$row3['phone'];
		$bss_pay4[$d]=$row3['email'];
		$bss_pay5[$d]=$row3['descrip'];
		$bss_pay6[$d]=$row3['id_negocio'];
	} while($row4=mysqli_fetch_array($session4));
}
//registro random
$numr=rand(1,$c);

//estrellas
?>

<script>
var variablejs = "<?php echo $c; ?>" ;
var variablejs2 = "<?php echo $d; ?>" ;
var number= parseInt(variablejs);
var number1= parseInt(variablejs2);
var sum=number+number1;

</script>
