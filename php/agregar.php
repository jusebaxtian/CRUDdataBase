<?php

if(!empty($_POST)){
	if(isset($_POST["name"]) &&isset($_POST["lastname"]) &&isset($_POST["email"]) &&isset($_POST["address"]) &&isset($_POST["phone"])){
		if($_POST["name"]!=""&& $_POST["lastname"]!=""&&$_POST["address"]!=""){
			include "conexion.php";
			
			$sql = "insert into person(name,lastname,email,address,phone,created_at) value (\"$_POST[name]\",\"$_POST[lastname]\",\"$_POST[email]\",\"$_POST[address]\",\"$_POST[phone]\",now())";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Registro Agregado.\");window.location='../ver.php';</script>";
			}else{
				print "<script>alert(\"Registro No Agregado.\");window.location='../ver.php';</script>";

			}
		}
	}
}



?>