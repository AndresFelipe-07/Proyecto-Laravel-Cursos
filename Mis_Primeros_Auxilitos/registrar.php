<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO datos(nombre, email, fecha_reg) VALUES ('$name','$email','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

if(isset($_POST['btn_Registrar']))
{
	if(strlen($_POST['nombre']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['genero']) >= 1 && strlen($_POST['fecha_nacimiento']) >= 1 && strlen($_POST['contrasena']) >= 1 && strlen($_POST['contrasena_confirmar']) >= 1)
	{
		$name = trim($_POST['nombre']);
	    $email = trim($_POST['correo']);
		$genero = trim($_POST['genero']);
	    $fecha_nacimiento = trim($_POST['fecha_nacimiento']);
		$contrasena = trim($_POST['contrasena']);
		$confirmar_contrasena = trim($_POST['contrasena_confirmar']);
		$fecha_registro = date('Y-m-d');
	    $consulta = "INSERT INTO registro_datos(nombre, email, 
		genero, fecha_nacimiento, contrasena, 
		contrasena_confirmar, fecha_registro) VALUES ('$name','$email','$genero','$fecha_nacimiento','$contrasena','$confirmar_contrasena','$fecha_registro')";
	    $resultado = mysqli_query($conex,$consulta);
	}
}





?>