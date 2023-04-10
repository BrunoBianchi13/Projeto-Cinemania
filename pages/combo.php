<style >
	
	html,body{
	
	height: 100%;
}

</style>
	



<section class="cardapio-produto" >
	<div class="center">

		<div class="cardapio-combo">
			<a >Combos</a>
		</div>
		


	</div>
</section>




<section class="cardapio-tamanho">
	<div class="center">
		<?php
					$combo = Combo::listarCombo();
					$depoimentos = $combo;
					foreach ($depoimentos as $key => $a) {

						
				?>
		

		<div class="combo">
				<?php
					$cartaz = Snack::listarProdutos();
					$depoimentos = $cartaz;
					foreach ($depoimentos as $key => $value) {

						if ($value['id']==$a['produto1']) {
							# code...
						
				?>
			
			

				<div class="combo-name">	
					<a ><?php echo $a['titulo']; ?></a>               

				</div>
				<div class="combo-price">	
					 <a >R$ <?php echo $numero = number_format( $a['preco'], 2, ',','.'); ?></a>

				</div>

				
				<div class="combo-pic">	
					<div class="combo-pic-info">
				<?php
					$cartaz = Snack::listarProdutos();
					$depoimentos = $cartaz;
					foreach ($depoimentos as $key => $value) {

						if ($value['id']==$a['produto1']) {
							# code...
						
					?>
					<img  src="<?php echo INCLUDE_PATH_PAINEL ?>upload/<?php echo $value['img']; ?>">
					<?php } }?>
					</div>
					
					<div class="combo-pic-info">
				<?php
					$cartaz = Snack::listarProdutos();
					$depoimentos = $cartaz;
					foreach ($depoimentos as $key => $value) {

						if ($value['id']==$a['produto2']) {
							# code...
						
					?>
					<img  src="<?php echo INCLUDE_PATH_PAINEL ?>upload/<?php echo $value['img']; ?>">
					<?php } }?>
					</div>
					<div class="combo-pic-info">
				<?php
					$cartaz = Snack::listarProdutos();
					$depoimentos = $cartaz;
					foreach ($depoimentos as $key => $value) {

						if ($value['id']==$a['produto3']) {
							# code...
						
					?>
					<img  src="<?php echo INCLUDE_PATH_PAINEL ?>upload/<?php echo $value['img']; ?>">
					<?php } }?>
					</div>
					<div class="combo-pic-info">
				<?php
					$cartaz = Snack::listarProdutos();
					$depoimentos = $cartaz;
					foreach ($depoimentos as $key => $value) {

						if ($value['id']==$a['produto4']) {
							# code...
						
					?>
					<img  src="<?php echo INCLUDE_PATH_PAINEL ?>upload/<?php echo $value['img']; ?>">
					<?php } }?>
					</div>
					<div class="combo-pic-info">
				<?php
					$cartaz = Snack::listarProdutos();
					$depoimentos = $cartaz;
					foreach ($depoimentos as $key => $value) {

						if ($value['id']==$a['produto5']) {
							# code...
						
					?>
					<img  src="<?php echo INCLUDE_PATH_PAINEL ?>upload/<?php echo $value['img']; ?>">
					<?php } }?>
					</div>
					<div class="combo-pic-info">
				<?php
					$cartaz = Snack::listarProdutos();
					$depoimentos = $cartaz;
					foreach ($depoimentos as $key => $value) {

						if ($value['id']==$a['produto6']) {
							# code...
						
					?>
					<img  src="<?php echo INCLUDE_PATH_PAINEL ?>upload/<?php echo $value['img']; ?>">
					<?php } }?>
					</div>


				</div>

				<?php } }?>

		</div>
		<?php }?>
	</div>
</section>

