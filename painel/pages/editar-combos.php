<?php
	if(isset($_GET['id'])){
		$id = (int)$_GET['id'];
		$produtos = Painel::select('tb_combos','id = ?',array($id));
	}else{
		Painel::alert('erro','Você precisa passar o parametro ID.');
		die();
	}
?>
<div class="box-content">
	<h2><i class="fa fa-pencil"></i> Editar Combos</h2>

	<form method="post" enctype="multipart/form-data">

		<?php
			if(isset($_POST['acao'])){
					
				$id=$_GET['id'];
				$titulo = $_POST['titulo'];
				$pro1 = $_POST['pro1'];
				$pro2 = $_POST['pro2'];
				$pro3 = $_POST['pro3'];
				$pro4 = $_POST['pro4'];
				$pro5 = $_POST['pro5'];
				$pro6 = $_POST['pro6'];
				$preco = $_POST['preco'];
						$combo = new Combo();
						$combo->editarCombo($id,$titulo,$pro1,$pro2,$pro3,$pro4,$pro5,$pro6,$preco);
						Painel::alert('sucesso','O '.$titulo.' foi editado com sucesso!');
					}
				
			
		?>


		<div class="form-group">
		

			<div class="form-group">
				<label>Titulo:</label>
				<input type="text" name="titulo" required value="<?php echo $produtos['titulo']; ?>">
			</div>

			<div class="form-group">
				<label>Produtos:</label>

				<select name="pro1">
					<option value="" selected="" >Todas os produtos</option>
				    	<?php
								$pro = Snack::listarProdutos();
								foreach ($pro as $key => $value) {	
							?>
								<option value="<?php echo $value['id']; ?>" ><?php echo $value['tipo']; ?> - <?php echo $value['titulo']; ?></option>
							<?php } ?>
				  </select>
				  <select name="pro2">
					<option value="" selected="" >Todas os produtos</option>
				    	<?php
								$pro = Snack::listarProdutos();
								foreach ($pro as $key => $value) {	
							?>
								<option value="<?php echo $value['id']; ?>" ><?php echo $value['tipo']; ?> - <?php echo $value['titulo']; ?></option>
							<?php } ?>
				  </select>
				  <select name="pro3">
					<option value="" selected="" >Todas os produtos</option>
				    	<?php
								$pro = Snack::listarProdutos();
								foreach ($pro as $key => $value) {	
							?>
								<option value="<?php echo $value['id']; ?>" ><?php echo $value['tipo']; ?> - <?php echo $value['titulo']; ?></option>
							<?php } ?>
				  </select>
				  <select name="pro4">
					<option value="" selected="" >Todas os produtos</option>
				    	<?php
								$pro = Snack::listarProdutos();
								foreach ($pro as $key => $value) {	
							?>
								<option value="<?php echo $value['id']; ?>" ><?php echo $value['tipo']; ?> - <?php echo $value['titulo']; ?></option>

							<?php } ?>
				  </select>
				  <select name="pro5">
					<option value="" selected="" >Todas os produtos</option>
				    	<?php
								$pro = Snack::listarProdutos();
								foreach ($pro as $key => $value) {	
							?>
								<option value="<?php echo $value['id']; ?>" ><?php echo $value['tipo']; ?> - <?php echo $value['titulo']; ?></option>
							<?php } ?>
				  </select>
				  <select name="pro6">
					<option value="" selected="" >Todas os produtos</option>
				    	<?php
								$pro = Snack::listarProdutos();
								foreach ($pro as $key => $value) {	
							?>
								<option value="<?php echo $value['id']; ?>" ><?php echo $value['tipo']; ?> - <?php echo $value['titulo']; ?></option>
							<?php } ?>
				  </select>

			</div>


		
			
			<div class="form-group">
				<label>Preço:</label>
				<input type="text" name="preco" value="<?php echo $produtos['preco']; ?>" required>
			</div>
			<!--form-group-->

			<div class="form-group">
				<input type="submit" name="acao" value="Cadastrar!">
			</div><!--form-group-->

		</form>

