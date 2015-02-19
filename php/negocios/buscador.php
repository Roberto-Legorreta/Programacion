
<?php 
$buscar=$_POST['cuadroDeBusqueda'];
if (!isset($buscar)){ 
      echo "<script>location.href='../../html/busqueda.php'</script>";
      echo "<script>alert('no hay resultados');</script>";
      exit; 
} 

	include("connect_db.php");
      echo "<script>location.href='../../html/busqueda.php'</script>";
	$result = mysqli_query($link, "SELECT * FROM login WHERE realname LIKE '%".$buscar."%'"); 
	$cb=0;
      if ($row6 = mysqli_fetch_array($result)){ 
		do {
                  $cb=$cb+1;
                  $bss_mostrar[$cb]=$row6['namebss'];
                  $bss_mostrar[$cb]=$row6['address'];
                  $bss_mostrar[$cb]=$row6['descrip'];
            } while($row6=mysqli_fetch_array($result));
	} 

       else { 
            echo "¡ No se ha encontrado ningún registro !"; 
      } 
?> 
<script>
      
            var variableb = "<?php echo $cb; ?>" ;
            var number= parseInt(variableb);

      
</script>