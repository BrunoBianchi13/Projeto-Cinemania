<?php
	if(isset($_GET['id'])){
		$id = (int)$_GET['id'];
		$cartaz = Painel::select('tb_filmes.cartaz','id = ?',array($id));
	}else{
		Painel::alert('erro','Você precisa passar o parametro ID.');
		die();
	}



	$dia = "";


	
?>

<style >
	
	html,body{
	
	background: #0D0D0D;

}

</style>

	<div class="filme-banner" ><img src="<?php echo INCLUDE_PATH_PAINEL ?>upload/<?php echo $cartaz['banner']; ?>" /></div>

	

	<div class="center">

	<div class="principal"	>	
		<div class="filme-capa">
			<img src="<?php echo INCLUDE_PATH_PAINEL ?>upload/<?php echo $cartaz['imagem']; ?>" />
		</div>

		<div class="filme-info">
			<p>	<?php echo $cartaz['nome']; ?></p>	
			<button style="background: #ab1304"><?php echo $cartaz['classificacao']; ?></button>	
			<button><?php echo $cartaz['duracao']; ?></button>	
			<button ><?php echo $cartaz['genero']; ?></button>	
		</div>

		<div class="filme-informacao">

			<h1>Mais</h1>
			<i class="fa fa-users" aria-hidden="true"></i><b>  Elenco: </b><a class=""><?php echo $cartaz['elenco']; ?></a><br>	
			<i class="fa fa-clock-o" aria-hidden="true"></i><b>  Duração: </b><a class=""><?php echo $cartaz['duracao']; ?></a><br>	
			<i class="fa fa-user" aria-hidden="true"></i><b>  Diretor: </b><a class=""><?php echo $cartaz['diretor']; ?></a><br>
			<i class="fa fa-video-camera" aria-hidden="true"></i><b>  Distribuidora: </b><a class=""><?php echo $cartaz['distribuidora']; ?></a><br>	
			<i class="fa fa-film" aria-hidden="true"></i><b>  Genero: </b><a class=""><?php echo $cartaz['genero']; ?></a><br>
			<i class="fa fa-calendar" aria-hidden="true"></i><b>  Data de Lançamento: </b><a class=""><?php echo date('d/m/Y', strtotime($cartaz['data'])); ?></a>
		</div>

		<div class="filme-sinopse">
			<h1>Sinopse</h1>
			<?php echo $cartaz['sinopse']; ?>
		</div>
			<h1>Trailer</h1>
		<div class="filme-trailer">
				<iframe width="1220" height="500" src="<?php echo $cartaz['trailer']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
			<br>	
			<h1>Horarios</h1>
		<div class="sessoes">
			
	
			

		<form method="post" enctype="multipart/form-data">
			<div class="desc-sessao">

			<?php  




				$dia = date('d/m');

				if(isset($_POST['acao'])){
					$dia = $_POST['data'];
					$dia = date('d/m', strtotime($dia));
				}
				echo $dia;
			   
			?>

			
			</div>
			<div class="dia-btn">

				<input type="date" name="data"  value="" min="<?= date('Y-m-d'); ?>" max="<?= date('Y-m-d', strtotime('+7 days')); ?>" required>
				<button name="acao">Filtrar	</button>  
			
			</div>
			
				    

		<div class="sessoes-dia">


			<div class="horarios-salas" >
				<div class="salas">Sala 1</div><?php
					  
					$dia = date('Y-m-d');
					  if(isset($_POST['acao'])){

					  		 $dia = $_POST['data'];
					  }


				
				                      
			    $cartaz = Sessao::listarSessoes();
				$depoimentos = $cartaz;

				foreach ($depoimentos as $key => $value) {
						if ($_GET['id'] == $value['filme']) {
							if ($value['data'] == $dia) {							
				?>
					<?php if ($value['sala'] == 'Sala 1') { ?>
					
						<div class="horarios">
						
							<?php echo date('H:i', strtotime($value['horario'])); ?>

							</div>
						
						<?php }}}}?>
						<div class="idioma">

				<?php 	$cartaz = Salas::listarSalas();
						$depoimentos = $cartaz; 

						foreach ($depoimentos as $key => $value) {
						if ($value['titulo'] == 'Sala 1'){
						?>

						<?php echo $value['idioma']; }} ?>
						
			</div>
			
		
			</div>
			
			
 			<?php


			  
					$dia = date('Y-m-d');
					  if(isset($_POST['acao'])){

					  		 $dia = $_POST['data'];
					  }


				
				                      
			    $cartaz = Sessao::listarSessoes();
				$depoimentos = $cartaz;

				?>
				    
			</div>
		



		<div class="sessoes-dia">


			<div class="horarios-salas">
				<div class="salas">Sala 2</div><?php
				foreach ($depoimentos as $key => $value) {
						if ($_GET['id'] == $value['filme']) {

						if ($value['data'] == $dia) {							
				?>
					<?php if ($value['sala'] == 'Sala 2') { ?>
					
						<div class="horarios">
						
							<?php echo date('H:i', strtotime($value['horario'])); ?>

							</div>
						
						<?php }} }}?>
						<div class="idioma">

				<?php 	$cartaz = Salas::listarSalas();
						$depoimentos = $cartaz; 

						foreach ($depoimentos as $key => $value) {
						if ($value['titulo'] == 'Sala 2'){
						?>

						<?php echo $value['idioma']; }} ?>
						
			</div>
			
		
			</div>
			
		
						


 <?php


			  
					$dia = date('Y-m-d');
					  if(isset($_POST['acao'])){

					  		 $dia = $_POST['data'];
					  }


				
				                      
			    $cartaz = Sessao::listarSessoes();
				$depoimentos = $cartaz;

				?>
				    
			</div>
	



		<div class="sessoes-dia">


			<div class="horarios-salas">
				<div class="salas">Sala 3</div><?php
				foreach ($depoimentos as $key => $value) {
						if ($_GET['id'] == $value['filme']) {

						if ($value['data'] == $dia) {							
				?>
					<?php if ($value['sala'] == 'Sala 3') { ?>
					
						<div class="horarios">
						
							<?php echo date('H:i', strtotime($value['horario'])); ?>

							</div>
						
						<?php }} }}?>
						<div class="idioma">

				<?php 	$cartaz = Salas::listarSalas();
						$depoimentos = $cartaz; 

						foreach ($depoimentos as $key => $value) {
						if ($value['titulo'] == 'Sala 3'){
						?>

						<?php echo $value['idioma']; }} ?>
						
			</div>
			
		
			</div>
			
		

						

 <?php


			
			      
					$dia = date('Y-m-d');
					  if(isset($_POST['acao'])){

					  		 $dia = $_POST['data'];
					  }


				
				                      
			    $cartaz = Sessao::listarSessoes();
				$depoimentos = $cartaz;


				?>
				    
			</div>
	



		<div class="sessoes-dia">


			<div class="horarios-salas">
				<div class="salas">Sala 4</div><?php
				foreach ($depoimentos as $key => $value) {
						if ($_GET['id'] == $value['filme']) {

						if ($value['data'] == $dia) {							
				?>
					<?php if ($value['sala'] == 'Sala 4') { ?>
					
						<div class="horarios">
						
							<?php echo date('H:i', strtotime($value['horario'])); ?>

							</div>
						
						<?php }} }}?>
						<div class="idioma">

				<?php 	$cartaz = Salas::listarSalas();
						$depoimentos = $cartaz; 

						foreach ($depoimentos as $key => $value) {
						if ($value['titulo'] == 'Sala 4'){
						?>

						<?php echo $value['idioma']; }} ?>
						
			</div>
			
		
			</div>
			
			
						


 <?php


			
			       
					$dia = date('Y-m-d');
					  if(isset($_POST['acao'])){

					  		 $dia = $_POST['data'];
					  }


				
				                      
			    $cartaz = Sessao::listarSessoes();
				$depoimentos = $cartaz;

				?>
				    
			</div>
		


		<div class="sessoes-dia">


			<div class="horarios-salas">
				<div class="salas">Sala 5</div><?php
				foreach ($depoimentos as $key => $value) {
						if ($_GET['id'] == $value['filme']) {

						if ($value['data'] == $dia) {							
				?>
					<?php if ($value['sala'] == 'Sala 5') { ?>
					
						<div class="horarios">
						
							<?php echo date('H:i', strtotime($value['horario'])); ?>

							</div>
						
						<?php }} }}?>
						<div class="idioma">

				<?php 	$cartaz = Salas::listarSalas();
						$depoimentos = $cartaz; 

						foreach ($depoimentos as $key => $value) {
						if ($value['titulo'] == 'Sala 5'){
						?>

						<?php echo $value['idioma']; }} ?>
						
			</div>
			
		
			</div>
			
			

						


 <?php


			  
					$dia = date('Y-m-d');
					  if(isset($_POST['acao'])){

					  		 $dia = $_POST['data'];
					  }


				
				                      
			    $cartaz = Sessao::listarSessoes();
				$depoimentos = $cartaz;

				?>
				    
			</div>
	



		<div class="sessoes-dia">


			<div class="horarios-salas">
				<div class="salas">Sala 6</div><?php
				foreach ($depoimentos as $key => $value) {
						if ($_GET['id'] == $value['filme']) {

						if ($value['data'] == $dia) {							
				?>
					<?php if ($value['sala'] == 'Sala 6') { ?>
					
						<div class="horarios">
						
							<?php echo date('H:i', strtotime($value['horario'])); ?>

							</div>
						
						<?php }} }}?>
						<div class="idioma">

				<?php 	$cartaz = Salas::listarSalas();
						$depoimentos = $cartaz; 

						foreach ($depoimentos as $key => $value) {
						if ($value['titulo'] == 'Sala 6'){
						?>

						<?php echo $value['idioma']; }} ?>
						
			</div>
			
		
			</div>
			
			

						




		
		</div>	
</div>

<h1 style="	margin-top: 90px;">Mais sugestões</h1>
			<div class="container  ">

				<?php
					$cartaz = Cartaz::listarCartaz();
					$depoimentos = $cartaz;
					foreach ($depoimentos as $key => $value) {

						if ($value['id'] != $_GET['id']) {
								
						
				?>

				<div  class="box " >
	
						<a href="<?php echo INCLUDE_PATH ?>filme?id=<?php echo $value['id']; ?>"><img  src="<?php echo INCLUDE_PATH_PAINEL ?>upload/<?php echo $value['imagem']; ?>" /></a>

					
				</div>
				<?php } }?>
			</div>
</div>

</form>
	</div>


		
	
		
	





