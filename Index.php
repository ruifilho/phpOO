<?php
error_reporting(E_ALL ^ E_NOTICE);
?>
<html>
<head>
	<title>Clientes</title>

	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

	<?php
		require_once "Cliente.php";
		
		$cliente1 = new Cliente("1", "Uesney", "27106815012", "Rua das Ortigas, 12", "Japanguiaçu", "5599943344");
		$cliente2 = new Cliente("2", "Valdisney", "39011500210", "Rua das Tulipas, 11", "Capirangaba", "5599943355");
		$cliente3 = new Cliente("3", "Enry Marrie", "37297984213", "Rua das Mantigas, 65", "Ubiratã", "5599943366");
		$cliente4 = new Cliente("4", "Erre Poter", "76455044479", "Rua das Orquideas, 71", "Jampa", "5599943377");
		$cliente5 = new Cliente("5", "Siderley", "86328687567", "Rua das Mangaba, 988", "São Patrício do Norte", "5599943388");
		$cliente6 = new Cliente("6", "Sideral", "71911786989", "Rua das Chocoloca, 777", "West Point", "5599943399");
		$cliente7 = new Cliente("7", "Enio", "04453934599", "Rua TricoChoco, 888", "Merilim", "5599944499");
		$cliente8 = new Cliente("8", "Snoopy", "48832298821", "Rua do Snoopy, 989", "Snoopy Landia", "5599945599");
		$cliente9 = new Cliente("9", "Charlie Brown", "94996495227", "Rua do Snoopy, 989", "Snoopy Landia", "5599945599");
		$cliente10 = new Cliente("10", "Babar", "15512471945", "Rua do Babar, 454", "Barbar Landia", "5599946699");

		$arrayClientes = array($cliente1,$cliente2, $cliente3,$cliente4,$cliente5,$cliente6,$cliente7,$cliente8,
								$cliente9,$cliente10);

		/*
		$_GET -> array quando o tipo da requisição é GET
		$_POST -> array quando o tipo da requisição é POST
		$_REQUEST -> qualquer tipo de quisição
		*/
		$isReverse = $_GET["ordenar"] == "desc";

		if($isReverse) {
		   $arrayClientes = array_reverse($arrayClientes);
		}
	?>

</head>
<body>
	<h1>Clientes</h1>
	<form method="get">
		<div class="btn-group" role="group" aria-label="...">
			<input type="hidden" name="ordenar" value="asc" />
	  		<button type="submit" class="btn btn-primary">Ordenar ascendente</button>
		</div>
	</form>
	<form method="get">
		<div class="btn-group" role="group" aria-label="...">
			<input type="hidden" name="ordenar" value="desc" />
	  		<button type="submit" class="btn btn-primary">Ordenar descendente</button>
		</div>
	</form>


	<div id = "clientes1" class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
	  <?php
	  	foreach ($arrayClientes as $id => $cliente):
	  ?>
	  <div class="panel panel-default">
	    <div class="panel-heading" role="tab" id="heading<?php echo $id; ?>">
	      <h4 class="panel-title">
	        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $id; ?>" aria-expanded="false" aria-controls="collapse<?php echo $id; ?>">
	          <?php echo $cliente->cod." - ".$cliente->nome; ?>
	        </a>
	      </h4>
	    </div>
	    <div id="collapse<?php echo $id; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $id; ?>">
      		<div class="panel-body">
      		<?php echo "<p><strong>CPF: </strong>".$cliente->cpf."</p>"; ?>
      		<?php echo "<p><strong>Endereço: </strong>".$cliente->endereco."</p>"; ?>
      		<?php echo "<p><strong>Cidade: </strong>".$cliente->cidade."</p>"; ?>
      		<?php echo "<p><strong>Telefone: </strong>".$cliente->telefone."</p>"; ?>

      		</div>
      	</div>
      </div>
	<?php endforeach; ?>
	</div>

			<!-- JQuery -->
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>