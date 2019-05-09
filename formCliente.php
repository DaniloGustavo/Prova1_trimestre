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
		<h2>Cadastro de Cliente</h2>
</div>
</div>
	<div class="row">
		<div class="col-sm-12">
			<form action="controllerNoticia.php" method="post">
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
					    <label for="nome">Nome:</label>
					    <input type="text" class="form-control" id="nome" name="nome">
			  		</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
			  		  <label for="telefone">Telefone:</label>
			 		   <input type="text" class="form-control" id="telefone" name="telefone">
				  </div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
			  		  <label for="telefone">Celular:</label>
			 		   <input type="tel" class="form-control" id="celular" name="celular">
				  </div>
				</div>
			</div>
				
				
			<div class="row">
				<div class="col-sm-6">
				  <div class="form-group">
				    <label for="curso">Email:</label>
				    <input type="text" class="form-control" id="email" name="email">
				  </div>
				</div>
				<div class="col-sm-6">
				  <div class="form-group">
				    <label for="curso">Endereço:</label>
				    <input type="text" class="form-control" id="endereco" name="endereco">
				  </div>
				</div>
				<div class="col-sm-6">
				  <div class="form-group">
				    <label for="curso">Número:</label>
				    <input type="text" class="form-control" id="numero" name="numero">
				  </div>
				</div>
				<div class="col-sm-6">
				  <div class="form-group">
				    <label for="curso">Bairro:</label>
				    <input type="text" class="form-control" id="bairro" name="bairro">
				  </div>
				</div>
				<div class="col-sm-6">
				  <div class="form-group">
				    <label for="curso">Cidade:</label>
				    <input type="text" class="form-control" id="cidade" name="cidade">
				  </div>
				</div>
				<div class="col-sm-6">
				  <div class="form-group">
				    <label for="curso">CEP:</label>
				    <input type="text" class="form-control" id="cep" name="cep">
				  </div>
				</div>
				<div class="col-sm-6">
  				  <div class="form-group">
  				  <h2>Situação</h2>
					<div class="form-check">
					    <input type="checkbox" class="form-check-input" id="exampleCheck1">
					    <label class="form-check-label" for="exampleCheck1">Ativo</label>
					</div>
					<div class="form-check">
					    <input type="checkbox" class="form-check-input" id="exampleCheck1">
					    <label class="form-check-label" for="exampleCheck1">Inativo</label>
					</div>
				  </div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
			  		<div class="form-group"	>
			   		 <label for="descricao">Descrição:</label>
			    			<textarea class="form-control" id="descricao" name="descricao">
			    </textarea>
			  		</div>
			</div>
			<div class="col-sm-6">
					<div class="form-group">
			  		  <label for="dataPu">Date de Cadastro:</label>
			 		   <input type="date" class="form-control" id="dataCadastro" name="name">
				  </div>
				</div>
			  <button type="submit" class="btn btn-primary">CADASTRAR</button>
			</form> 	
		</div><!--fecha coluna principal-->
	</div><!--fecha linha principal-->
</div><!--fecha container-->

</body>
</html> 