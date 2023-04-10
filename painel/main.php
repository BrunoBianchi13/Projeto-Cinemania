<?php
	if(isset($_GET['loggout'])){
		Painel::loggout();
	}


	//echo $_SESSION['user'];
?>


<!DOCTYPE html>
<html>
<head>
	<title>Painel de controle</title>
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/font-awesome.min.css">

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php echo INCLUDE_PATH_PAINEL; ?>css/style.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	
	<header >	
		<div class="center">

			<div class="home">

				<a href="<?php echo INCLUDE_PATH_PAINEL ?>?home"><i class="fa fa-home" aria-hidden="true"></i></a>

				
			</div>


			<div class="loggout">
			
				<a href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout"><i class="fa fa-sign-out" aria-hidden="true"></i></a>


			</div><!--loggout-->
			<div class="clear"></div>
		</div>
	</header>




	<div class="content">

		<?php Painel::carregarPagina(); ?>
		
		
	</div>

	<aside >

		<div class="box-usuario">
				<?php// echo INCLUDE_PATH_PAINEL ?><?php// echo $_SESSION['img']; ?>
			<div class="imagem-usuario">
				<img src="<?php echo INCLUDE_PATH_PAINEL ?>upload/<?php echo $_SESSION['img']; ?>" />
			</div><!--avatar-usuario-->
			<div class="nome-usuario"><?php echo $_SESSION['nome']; ?></div>
				<a href="<?php echo INCLUDE_PATH_PAINEL ?>editar-usuario"><i class="fa fa-pencil" aria-hidden="true"></i> Editar Usuário</a>
		
		</div>


		


		<div class="items-menu">

	
		<h2><i class="fa fa-cog" aria-hidden="true"></i> Configuração Geral</h2>
			<a href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-usuario">Cadastrar Usuario</a>
			<a href="<?php echo INCLUDE_PATH_PAINEL ?>salas">Gerenciar Salas</a>

			
			


		<h2><i class="fa fa-film" aria-hidden="true"></i> Gerenciamento Filmes em cartaz</h2>
			<a href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-cartaz">Cadastrar Filmes em cartaz</a>
			<a href="<?php echo INCLUDE_PATH_PAINEL ?>listar-cartaz"> Listar Filmes em cartaz</a>
			
			
		<h2><i class="fa fa-film" aria-hidden="true"></i> Gerenciamento Filmes em breve</h2>
			<a href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-breve"> Cadastrar Filmes em breve</a>
			<a href="<?php echo INCLUDE_PATH_PAINEL ?>listar-breve"> Listar Filmes em breve</a>

		<h2><i class="fa fa-film" aria-hidden="true"></i> Gerenciamento de Sessões</h2>
			<a href="<?php echo INCLUDE_PATH_PAINEL ?>sessoes"> Adicionar Sessões</a>
			<a href="<?php echo INCLUDE_PATH_PAINEL ?>listar-sessao"> Listar Sessões</a>
			
		<h2><i class="fa fa-glass" aria-hidden="true"></i> Gerenciamento Snack-Bar</h2>
			<a href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-produtos"> Cadastrar Produtos</a>
			<a href="<?php echo INCLUDE_PATH_PAINEL ?>listar-produtos">  Listar Produtos</a>
			<a href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-combos"> Cadastrar Combos e Promoções</a>
			<a href="<?php echo INCLUDE_PATH_PAINEL ?>listar-combos"> Listar Combos e Promoções</a>
			

			
			 
			


		



		</div>
		

	</aside>


	

</body>



<script >

	
	


</script>
</html>