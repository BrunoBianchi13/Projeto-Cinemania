<style >
	
	html,body{
	
	background: #0D0D0D;
	height: 100%;
}

</style>
	





<section >
		
		<div class="center">
			<div class="top-cartaz">

					<a>Em Breve</a>
					<h4>Fique por dentro de todos os filmes que chegarão na CineMania neste ano</h4>
				</div>
			
			<div class="filme-conteudo  ">
				<?php
					$cartaz = Breve::listarBreve();

					$depoimentos = $cartaz;
					foreach ($depoimentos as $key => $value) 
					{
				?> 
				
				
				<div  class="poster left " ">

						

					<a href="<?php echo INCLUDE_PATH ?>filmeBreve?id=<?php echo $value['id']; ?>"><img  src="<?php echo INCLUDE_PATH_PAINEL ?>upload/<?php echo $value['imagem']; ?>" /></a>
					
				</div>

				
			
			<?php } ?>
		</div>


		<div class="anuncio">
			<b>Confira agora os filmes que estam em cartaz na CineMania</b> <a href="<?php echo INCLUDE_PATH;?>cartaz">VER FILMES EM CARTAZ</a>

				
		</div>
	</div>
</section>

