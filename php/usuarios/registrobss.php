<?php session_start();

	if($_POST['namebss']=''){
		echo ' <script language="javascript">alert("ingresa datos");</script> ';
		echo "<script>location.href='../../html/perfil.php'</script>";
	}
	$namebss=$_POST['namebss'];
	$website=$_POST['website'];
	$address= $_POST['address'];
	$phone=$_POST['phone'];
	$email=$_POST['mail'];
	$descrip=$_POST['descrip'];
	$categoria=$_POST['category'];
	$subcategoria=$_POST['categorysub'];
   
	require("connect_db.php");
	
	$sql=mysqli_query($link,"INSERT INTO negocios VALUES('','$namebss','$website','$address','$phone','$email','$descrip','$login_session3','','$categoria','$subcategoria','')");

	
	echo ' <script language="javascript">alert("Negocio registrado con éxito");</script> ';	
		//row select Autonumerico FROM Mi_Tabla WHERE Cedula = '1010' AND Nombre = 'Edwin' AND Apellido = 'Gomez';
	
	
	echo "<script>location.href='../../html/perfil.php'</script>";




?>	