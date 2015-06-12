<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Algoritimo de Euclides Estendido</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Leandro Fabris Milani">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>

<body>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<center>
			<form class="form-horizontal" action="index.php" method="GET">
				<fieldset>

					<!-- Form Name -->
					<legend>Algoritimo de Euclides Estendido</legend>

					<!-- Text input-->
					<div class="control-group">
					  <label class="control-label" for="a">Informe o valor de a:</label>
					  <div class="controls">
					    <input id="a" name="a" type="text" placeholder="Ex.: 120" class="input-mini" required="">
					    
					  </div>
					</div>

					<!-- Text input-->
					<div class="control-group">
					  <label class="control-label" for="b">Informe o valor de b:</label>
					  <div class="controls">
					    <input id="b" name="b" type="text" placeholder="Ex.: 23" class="input-mini" required="">
					    
					  </div>
					</div>

					<!-- Button -->
					<div class="control-group">
					  <label class="control-label" for="calcular"></label>
					  <div class="controls">
					  	<input class="btn btn-primary" type="submit" id="calcular" value="Calcular">
					  </div>
					</div>

				</fieldset>
			</form>
			</center>
		</div>
	</div>
</div>
</body>
</html>


<?php

require_once("functions.php");

if ( (isset($_GET['a'])) && (isset($_GET['b'])) ) {
	$a = $_GET['a'];
	$b = $_GET['b'];

	$resultado = euclides($a,$b);

	echo "<br><div class='alert alert-success' align='center'><h1><strong>MDC: </strong>(".$resultado['mdc'].") - <strong> Valor x: </strong>(".$resultado['x'].") - <strong>Valor y: </strong> (".$resultado['y'].")</h1></div>";

}




?>
