<?php
	if(isset($_GET['id'])){
		$id = (int)$_GET['id'];
		$produtos = Painel::select('tb_snack.produtos','id = ?',array($id));
	}else{
		Painel::alert('erro','Você precisa passar o parametro ID.');
		die();
	}
?>
<div class="box-content">
	<h2><i class="fa fa-pencil"></i> Editar Produtos</h2>

	<form method="post" enctype="multipart/form-data">

		<?php
			if(isset($_POST['acao'])){
				
				
				
				$id=$_GET['id'];
				$tipo = $_POST['tipo'];
				$titulo = $_POST['titulo'];
				$preco = $_POST['preco'];
				$descricao = $_POST['descricao'];
				$imagem = $_FILES['imagem'];
				$imagem_atual = $_POST['imagem_atual'];
				
				 

				if($imagem['name'] != ''){
 
					//Existe o upload de imagem.
					if(Painel::imagemValida($imagem)){
						Painel::deleteFile($imagem_atual);
						$imagem = Painel::uploadFile($imagem);
						Snack::atualizarProdutos($id,$tipo,$titulo,$descricao,$preco,$imagem);
						Painel::alert('sucesso','O Produto foi editado junto com a imagem!');
						
					}else{
						Painel::alert('erro','O formato da imagem não é válido');
					}
				}else{
					$imagem = $imagem_atual;
					Snack::atualizarProdutos($id,$tipo,$titulo,$descricao,$preco,$imagem);
					Painel::alert('sucesso','O Produto foi editado com sucesso!');
					
				}
				}
			
		?>

		<div class="form-group">
				<label>Tipo produto:</label>
				<select name="tipo">
				    <option value="pipoca">Pipoca</option>
				    <option value="refrigerante">Refrigerante</option>
				    <option value="bebidas">Bebidas frias</option>
				    <option value="snack">Snack</option>
				    <option value="doces">Doces</option>
				  </select>
			</div>


			<div class="form-group">
				<label>Titulo:</label>
				<input type="text" name="titulo" required value="<?php echo $produtos['titulo']; ?>">
			</div><!--form-group-->

			<div class="form-group">
				<label>Descrição:</label>
				<textarea name="descricao"><?php echo $produtos['descricao']; ?></textarea>
			</div><!--form-group-->

			
			<div class="form-group">
				<label>Preço:</label>
				<input type="text" name="preco" value="<?php echo $produtos['preco']; ?>" required>
			</div>
			<!--form-group-->

			<div class="form-group">
				<label>Imagem</label>
				<input type="file" name="imagem"/>
				<input type="hidden" name="imagem_atual" value="<?php echo $produtos['img']; ?>">
			</div><!--form-group-->

			<div class="form-group">
				<input type="submit" name="acao" value="Editar!">
			</div><!--form-group-->

		</form>
