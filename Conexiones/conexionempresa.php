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
	$Nit=$_POST['nit'];
	$nombre=$_POST['nombre'];
	$telefono=$_POST['telefono'];
	$correo=$_POST['correo'];
	$direccion=$_POST['direccion'];
	$usuario=$_POST['usuario'];
	$contraseña=$_POST['contraseña'];

	//Sentencia sql
	$sql="INSERT INTO empresa(nit_empresa,nombre_empresa,telefono_empresa,correo_empresa,direccion_empresa,usuario_empresa,contraseña_empresa) VALUES ('$nit','$nombre','$telefono','$correo','$direccion',$usuario','$contraseña')";

	/* Ejecucion de la sentencia sql*/
	$ejecutar=mysql_query($sql);

	/*Verificacion de la ejecucion*/
	if (!$ejecutar) {
		echo"Error en la operacion";	
	}else{
		echo"Datos guardados correctamente <br> <a href='index.html'>volver</a>";
	}
?>