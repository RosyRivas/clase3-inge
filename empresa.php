<style>
	table{border-collapso:separate;
		margin:auto;}
	td{border:solid 2px;
		text-align:center;
	    width:15;}
</style>


<?php
include ("includes/conexion.php");

conectar();


if(@$_GET['add']=="ok") {

	if ( ($_POST['descripcion']!='')  ){
		
		$sql=  mysqli_query($conexion,"INSERT INTO empresa (descripcion)
            VALUES ('".$_POST["descripcion"]."')");
            
            if(!mysqli_error($conexion)){
				
				echo "<script> alert('Registro ingresado correctamente') ; </script>";
				echo"<script>window.location= 'empresa.php' ; </script>" ;
			}else {
				echo "<script> alert('Error al ingresar datos') ;</script>";
			}
	}else{


		echo "<script> alert('no deje campos vacios') ;</script>";

	}
}
?>

<script type="text/javascript">
	function ver(){
		if (document.getElementById('nuevo').style.display=='none') {
			document.getElementById('nuevo').style.display='block';
		}else{
			document.getElementById('nuevo').style.display=='none';
	}
}

</script>



<div id="nuevo"  >
	<form action="empresa.php?add=ok" method="post">
		<p><label>descripcion</label> <input  type="text"id="descripcion" name="descripcion" ></p>
		
		<p><input type="submit" value="Guardar"></p>
	</form>


</div>

<h3>Datos de Empresa </h3>

<?php
		$datos="select * from empresa order by descripcion ASC";
		$sqli= mysqli_query($conexion,$datos);
		if (mysqli_num_rows($sqli)!=0){
				?>
				<table>
					<thead>
						<tr>
							<td>Item</td>
							<td>descripcion</td>
							
						
						</tr>
					</thead>
					<?php
						$cont=1;
						while($r=mysqli_fetch_array($sqli) )
						{
							?>
								<tr>
									<td><?php echo $cont++; ?></td>
									<td><?php echo $r['descripcion'];?> </td>
								
									<td>
										<p><a href= "">editar</p>
										<p><a href= "">eliminar</p>
										
									</td>
								</tr>

							<?php
						}
					?>
				</table>
<?php
					}else {
						echo"<p style='color:ff0000'>sin datos</p>";
					}
					?>

	</div>
		

		