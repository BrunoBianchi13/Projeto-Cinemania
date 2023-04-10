<style >
	
	html,body{
	
	background: #0D0D0D;
	height: 100%;
}

</style>
	





<section >
		
		<div class="center">
			<div class="top-cartaz">

					<a>Em Cartaz</a>
					<h4>Confira agora os filme em cartaz na Cinemania</h4>
				</div>
			
			<div class="filme-conteudo  ">
				<?php
					$cartaz = Cartaz::listarCartaz();

					$depoimentos = $cartaz;
					foreach ($depoimentos as $key => $value) 
					{
				?> 
				
				
				<div  class="poster left " ">

						

					<a href="<?php echo INCLUDE_PATH ?>filme?id=<?php echo $value['id']; ?>"><img  src="<?php echo INCLUDE_PATH_PAINEL ?>upload/<?php echo $value['imagem']; ?>" /></a>
					
				</div>

				
			
			<?php } ?>
		</div>


		<div class="anuncio">
			<b>Fique por dentro de todos os filmes que chegarão na CineMania neste ano</b><a href="<?php echo INCLUDE_PATH;?>breve">VER FILMES EM BREVE</a>

				
		</div>
	</div>
</section>

