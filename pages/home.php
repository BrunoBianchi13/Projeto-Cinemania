<style >
	
	html,body{
	
	background: #0D0D0D;
}

</style>


<section  class="banner-container">

	<?php
					$cartaz = Cartaz::listarCartaz();
					$depoimentos = $cartaz;
					foreach ($depoimentos as $key => $value) {
				?>
				<div  class="banner-single"><img  src="<?php echo INCLUDE_PATH_PAINEL ?>upload/<?php echo $value['banner']; ?>" /></div><!--banner-single-->
				
				<?php } ?>

</section>


<section id="#cartaz" class="Cartaz">
		
	<div class="center">
			
		<label >Filmes em cartaz</label>
		<h5 >Ver programação</h5>
		<div class="container  ">

		
				<?php
					$cartaz = Cartaz::listarCartaz();
					$depoimentos = $cartaz;
					foreach ($depoimentos as $key => $value) {
				?>

				<div  class="box " >
	
						<a href="<?php echo INCLUDE_PATH ?>filme?id=<?php echo $value['id']; ?>"><img  src="<?php echo INCLUDE_PATH_PAINEL ?>upload/<?php echo $value['imagem']; ?>" /></a>

					
				</div>
				<?php } ?>
			</div>
			
		</div>
	</div>

</section>

<section id="#breve" class="Cartaz">
		
	<div class="center">
			
		<label >Filmes em Breve</label>
		<h5 >Ver programação</h5>
		<div class="container  ">

		
		<?php
					$cartaz = Breve::listarBreve();
					$depoimentos = $cartaz;
					foreach ($depoimentos as $key => $value) {
					

				?>

				
				<div  class="box " >

					
							<a href="<?php echo INCLUDE_PATH ?>filmeBreve?id=<?php echo $value['id']; ?>"><img  src="<?php echo INCLUDE_PATH_PAINEL ?>upload/<?php echo $value['imagem']; ?>" /></a>

					
				</div>
		<?php  } ?>
			</div>
			
		</div>
	</div>

</section>






<section id="#snack" class="Produtos">
		
	<div class="center">

		
		<div class="mais">
			<div class="mais-img" style="background-image: url(img/combo.jpg);">	
			<div class="mais-cont">	<div id="texto">Snack-Bar</div>
					
			<div class="right">
				<h3>Combos</h3>
				<h3>Cardapio</h3>

			</div>
			</div>

		</div>
	</div>
</section>
					
		


