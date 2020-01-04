<?php

	define("SERVIDOR","sql164.main-hosting.eu");
	define("USUARIO","u218883364_crud1");
	define("CLAVE","crud1");
	define("BASE_DATOS","u218883364_crud1");

function Conexion()
	{
	   if (!($cn=mysql_connect(SERVIDOR,USUARIO,CLAVE)))
	   {
		  echo "Error conectando a la base de datos.";
		  exit();
	   }
	   if (!mysql_select_db(BASE_DATOS,$cn))
	   {
		  echo "Error seleccionando la base de datos.";
		  exit();
	   }
	   
	   return $cn;
	   
	}	

?>
