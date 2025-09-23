<?php
	require_once("../../config/conexion.php");
	if (isset($_SESSION["usu_id"])) {

?>
<!DOCTYPE html>
<html>
	<?php require_once("../MainHead/head.php"); ?>
    <title>Help Desk Global Cruises :: Nuevo Ticket</title>
</head>
<body class="with-side-menu">

    <?php require_once("../MainHeader/header.php"); ?>

	<div class="mobile-menu-left-overlay"></div>

    <?php require_once("../MainNav/nav.php"); ?>
	

	<!-- Contenido de la pagina -->	
	<div class="page-content">
		<div class="container-fluid">

			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Nuevo Ticket</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">Home</a></li>
								<li class="active">Nuevo Ticket</li>
							</ol>
						</div>
					</div>
				</div>
			</header>

			<div class="box-typical box-typical-padding">
				<p>
					Desde esta ventana podra generar nuevos tickets de HelpDesk.
				</p>

				<h5 class="m-t-lg with-border">Ingresar Información</h5>

				<div class="row">
					<form method="post" id="ticket_form">

						<input type="hidden" id="usu_id" name="usu_id" value="<?php echo $_SESSION["usu_id"] ?>">

						<div class="col-lg-12">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_titulo">Titulo</label>
								<input type="text" class="form-control" id="tick_titulo" name="tick_titulo" placeholder="Ingrese Titulo">
							</fieldset>
						</div>

						<div class="col-lg-6 ">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInput">Categoria</label>
								<select id="cat_id" name="cat_id" class="form-control">
									<option value="">Seleccionar Categoria</option>
									<option value="1">Hardware</option>
									<option value="2">Software</option>
									<option value="3">Redes</option>
								</select>
							</fieldset>
						</div>

						<div class="col-lg-6 md-6">
    						<fieldset class="form-group">
        						<label class="form-label semibold" for="exampleInput">Documentos Adicionales</label>
        						<label for="fileElem" class="custom-file-label">Elegir archivos</label>
        						<input type="file" id="fileElem" name="fileElem[]" class="custom-file-input" multiple>
        						<span id="file-chosen">Sin archivos seleccionados</span>
    						</fieldset>
						</div>
						<div class="col-lg-12">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_descrip">Descripción</label>
								<div class="summernote-theme-1">
									<textarea id="tick_descrip" class="summernote" name="name"></textarea>
								</div>
							</fieldset>
						</div>
						<div class="col-lg-12">
							<button type="submit" name="action" value="add" class="btn btn-rounded btn-inline btn-primary">Guardar</button>
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>

    <?php require_once("../MainJs/js.php");?>
	<script type="text/javascript" src="/Personal_HelpDesk/view/NuevoTicket/nuevoticket.js"></script>
	<script>
	document.getElementById('fileElem').addEventListener('change', function(){
	    let files = this.files;
	    let text = files.length > 0 ? Array.from(files).map(f => f.name).join(', ') : 'Sin archivos seleccionados';
	    document.getElementById('file-chosen').textContent = text;
	});
	</script>
</body>
</html>
<?php
	} else {
		session_destroy();
		// Redirige al usuario a la ruta principal
		header("Location: " . Conectar::ruta());
		exit();
	}
?>