<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Clientes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
 <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Painel Control Notícia</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
    </li>


    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Controle
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Cadastro</a>
     
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Sair</a>
    </li>
  </ul>
</nav> 
<div class="container">
	<div class="row">
	<?php
		include ("cliente.php");
		$listarNoticia = new Cliente();
		$valor = $listarNoticia->buscarTodos();
	?>	
		<div class="col-sm-12">
			<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Título</th>
      <th scope="col">Autor</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
  <?php
		foreach($valor as $linha){
	?>
    <tr>
      <th scope="row"><?php echo $linha["id"]; ?></th>
      <td><?php echo $linha["nome"]; ?></td>
      <td><?php echo $linha["telefone"]; ?></td>
        <td><?php echo $linha["celular"]; ?></td>
          <td><?php echo $linha["email"]; ?></td>
     
    </tr>
  <?php
  }
  ?>  
  </tbody>
</table>
		</div><!--fecha coluna principal-->
	</div><!--fecha linha principal-->
</div><!--fecha container-->

</body>
</html> 