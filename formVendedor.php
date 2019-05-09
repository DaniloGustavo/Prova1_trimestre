<html>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			&nbsp;
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<h2>Cadastro do Vendedor</h2>
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-12">
			<form action="controllerCliente.php" method="post">
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
					    <label for="titulo">Nome:</label>
					    <input type="text" class="form-control" id="nome" name="nome">
			  		</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
			  		  <label for="autor">telefone:</label>
			 		   <input type="text" class="form-control" id="telefone" name="telefone">
				  </div>
				</div>
			</div>
				
				
			<div class="row">
				<div class="col-sm-6">
				  <div class="form-group">
				    <label for="curso">email:</label>
				    <input type="text" class="form-control" id="email" name="email">
				  </div>
				</div>
	<div class="row">
				<div class="col-sm-6">
				  <div class="form-group">
				    <label for="curso">Comissão:</label>
				    <input type="text" class="form-control" id="comissão" name="comissão">
				  </div>
				</div>				
				
				
			  <button type="submit" class="btn btn-primary">CADASTRAR</button>
			</form> 	
		</div><!--fecha coluna principal-->
	</div><!--fecha linha principal-->
</div><!--fecha container-->
</body>
</html>