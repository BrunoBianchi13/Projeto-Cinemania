<style >
	
	html,body{
	
	height: 100%;
}

</style>
	



<section class="cardapio-Produto">
	<div class="center">

		<div class="cardapio-info">
			<a>Pipocas</a>
		</div>
		<div class="cardapio-info-sab">
			<div class="cardapio-img">
				
				<img src="img/choco.jpg">

			</div>
			<div class="cardapio-desc">
				Chocolate
			</div>
		</div>
		<div class="cardapio-info-sab">
			<div class="cardapio-img">
				
				<img src="img/Doce.jpg">

			</div>
			<div class="cardapio-desc">
				Doce
			</div>
		</div>
		<div class="cardapio-info-sab">
			<div class="cardapio-img"><img src="img/salgada.jpg"></div>

			<div class="cardapio-desc">
				Salgada
			</div>
		</div>


	</div>
</section>




<section class="cardapio-tamanho">
	<div class="center">
		
		<?php
					$cartaz = Snack::listarProdutos();
					$depoimentos = $cartaz;
					foreach ($depoimentos as $key => $value) {

						if ($value['tipo']=="pipoca") {
							# code...
						
				?>
		<div class="cardapio-tamanho-sab">

			
			<div class="cardapio-tamanho-img">

				<img  src="<?php echo INCLUDE_PATH_PAINEL ?>upload/<?php echo $value['img']; ?>">


			</div>
			
			<div class="cardapio-tamanho-desc">
				
				<?php echo $value['titulo']; ?><br>
				R$<?php echo $value['preco']; ?>

			</div>
			
		</div>
		<?php } }?>
	</div>
</section>
<section class="cardapio-Produto">
	<div class="center">

		<div class="cardapio-info">
			Refrigerante
		</div>
		<div class="cardapio-info-sabo">
			<img src="img/pep.jpg">
				
		</div>
		<div class="cardapio-info-sabo">
			<img src="img/fanta.jpg">
		</div>

		<div class="cardapio-info-sabo">
			<img src="img/soda.jpg">
		</div>
		<div class="cardapio-info-sabo">
			<img src="img/guara.jpg">
		</div>
		<div class="cardapio-info-sabo">
			<img src="img/coca.jpg">
		</div>

	</div>
</section>




<section class="cardapio-tamanho">
	<div class="center">
		
		<?php
					$cartaz = Snack::listarProdutos();
					$depoimentos = $cartaz;
					foreach ($depoimentos as $key => $value) {

						if ($value['tipo']=="refrigerante") {
							# code...
						
				?>
		<div class="cardapio-tamanho-sab">

			
			<div class="cardapio-tamanho-img">

				<img  src="<?php echo INCLUDE_PATH_PAINEL ?>upload/<?php echo $value['img']; ?>">


			</div>
			
			<div class="cardapio-tamanho-desc">
				
				<?php echo $value['titulo']; ?><br>
				R$<?php echo $value['preco']; ?>

			</div>
			
		</div>
		<?php } }?>
	</div>
</section>

<section class="cardapio-Produto">
	<div class="center">

		<div class="cardapio-info">
			Bebidas frias
		</div>
	

	</div>
</section>




<section class="cardapio-tamanho">
	<div class="center">
		
		<?php
					$cartaz = Snack::listarProdutos();
					$depoimentos = $cartaz;
					foreach ($depoimentos as $key => $value) {

						if ($value['tipo']=="bebidas") {
							# code...
						
				?>
		<div class="cardapio-tamanho-sab">

			
			<div class="cardapio-tamanho-img">

				<img  src="<?php echo INCLUDE_PATH_PAINEL ?>upload/<?php echo $value['img']; ?>">


			</div>
			
			<div class="cardapio-tamanho-desc">
				
				<?php echo $value['titulo']; ?><br>
				R$<?php echo $value['preco']; ?>

			</div>
			
		</div>
		<?php } }?>
	</div>
</section>


<section class="cardapio-Produto">
	<div class="center">

		<div class="cardapio-info">
			Snacks
		</div>
	

	</div>
</section>




<section class="cardapio-tamanho">
	<div class="center">
		
		<?php
					$cartaz = Snack::listarProdutos();
					$depoimentos = $cartaz;
					foreach ($depoimentos as $key => $value) {

						if ($value['tipo']=="snack") {
							# code...
						
				?>
		<div class="cardapio-tamanho-sab">

			
			<div class="cardapio-tamanho-img">

				<img  src="<?php echo INCLUDE_PATH_PAINEL ?>upload/<?php echo $value['img']; ?>">


			</div>
			
			<div class="cardapio-tamanho-desc">
				
				<?php echo $value['titulo']; ?><br>
				R$<?php echo $value['preco']; ?>

			</div>
			
		</div>
		<?php } }?>
	</div>
</section>


<section class="cardapio-Produto">
	<div class="center">

		<div class="cardapio-info">
			Doces
		</div>
	

	</div>
</section>




<section class="cardapio-tamanho">
	<div class="center">
		
		<?php
					$cartaz = Snack::listarProdutos();
					$depoimentos = $cartaz;
					foreach ($depoimentos as $key => $value) {

						if ($value['tipo']=="doces") {
							# code...
						
				?>
		<div class="cardapio-tamanho-sab">

			
			<div class="cardapio-tamanho-img">

				<img  src="<?php echo INCLUDE_PATH_PAINEL ?>upload/<?php echo $value['img']; ?>">


			</div>
			
			<div class="cardapio-tamanho-desc">
				
				<?php echo $value['titulo']; ?><br>
				R$<?php echo $value['preco']; ?>

			</div>
			
		</div>
		<?php } }?>
	</div>
</section>

