<html>
	<head>
		<title>.: CRUD | GRUPO LIAN :.</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script type="text/javascript">
	function cargarHojaExcel()
	{
		if(document.frmcargararchivo.excel.value=="")
		{
			alert("Suba un archivo");
			document.frmcargararchivo.excel.focus();
			return false;
		}		

		document.frmcargararchivo.action = "php/procesar.php";
		document.frmcargararchivo.submit();
	}

</script>
	</head>
	<body>
	<?php include "php/navbar.php"; ?>
	<div class="container">
	<div class="row">
	<div class="col-md-12">
			<h2>Gestion de Base de Datos</h2>
			<p class="lead"> </p>
			<p>Instrucciones:</p>
			<ol>
				<li>Ir a la opcion ver.</li>
				<li>Digite la informacion en el buscador.</li>
				<li>Seleccionar el boton Editar si desea actualizar.</li>
				<form name="frmcargararchivo" method="post" enctype="multipart/form-data">
		  			<p>Cargar Nueva Data</p> 
		  			<p><input type="file" name="excel" id="excel" /></p>
		  			<p><input type="button" value="Cargar" onclick="cargarHojaExcel();" /></p>
				</form>
			</ol>
			<br>
			<ul type="none">
			<li><i class="glyphicon glyphicon-ok"></i> Grupo Empresarial LIAN S.A.S</li>
			</ul>

	</div>
	</div>
	</div>
	</body>
</html>