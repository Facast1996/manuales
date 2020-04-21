<?php
	/* Conectar con el servidor*/
	//crear varible Conectar
	// @ para vizualizar errores 
	$conectar=@mysql_connect('localhost','root','');

	/* Verificar conexion*/
	if(!$conectar){
		echo"No se puede realizar la conexion";
	}else{

		$base=mysql_select_db('capacitaciones_multifuncionales');
		if(!$base){
			echo"No se encontro la base de datos";
		}
	}

	//Recuperar variables
	$di=$_POST['di'];
	$nombre=$_POST['nombre'];
	$telefono=$_POST['Telefono'];
	$correo=$_POST['Correo'];
	$usuario=$_POST['Usuario'];
	$contraseña=$_POST['Contraseña'];

	//Sentencia sql
	$sql="INSERT INTO empleado (di_empleado,nombre_empleado,telefono_empleado,correo_empleado,usuario_empleado,contraseña_empleado)VALUES ('$di','$nombre','$telefono','$correo','$usuario','$contraseña')";

	/* Ejecucion de la sentencia sql*/
	$ejecutar=mysql_query($sql);

	/*Verificacion de la ejecucion*/
	if (!$ejecutar) {
		echo"Error en la operacion";	
	}else{
		echo"Datos guardados correctamente <br> <a href='index.html'>volver</a>";
	}
?>