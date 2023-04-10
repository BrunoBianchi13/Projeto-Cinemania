<?php
	if(isset($_GET['id'])){
		$id = (int)$_GET['id'];
		$cartaz = Painel::select('tb_filmes.cartaz','id = ?',array($id));
	}else{
		Painel::alert('erro','Você precisa passar o parametro ID.');
		die();
	}
?>
<div class="box-content">
	<h2><i class="fa fa-pencil"></i> Editar Filme em cartaz</h2>

	<form method="post" enctype="multipart/form-data">

		<?php
			if(isset($_POST['acao'])){
				
				
				
				$id=$_GET['id'];
				$nome = $_POST['nome'];
				$sinopse = $_POST['sinopse'];
				$diretor = $_POST['diretor'];
				$distribuidora = $_POST['distribuidora'];
				$elenco = $_POST['elenco'];
				$genero = $_POST['genero'];
				$classificacao = $_POST['classificacao'];
				$duracao = $_POST['duracao'];
				$data = $_POST['data'];
				$imagem = $_FILES['capa'];
				$banner = $_FILES['banner'];
				$trailer = $_POST['trailer'];
				$imagem_atual = $_POST['imagem_atual'];
				$banner_atual = $_POST['banner_atual'];
				 

				if($imagem['name'] != '' && $banner['name'] != ''){
 
					//Existe o upload de imagem.
					if(Painel::imagemValida($imagem)){
						Painel::deleteFile($imagem_atual);
						Painel::deleteFile($banner_atual);
						$imagem = Painel::uploadFile($imagem);
						$banner = Painel::uploadFile($banner);
						Cartaz::atualizarCartaz($id,$nome,$sinopse,$diretor,$distribuidora,$elenco,$genero,$classificacao,$duracao,$data,$imagem,$banner,$trailer);
						Painel::alert('sucesso','O filme foi editado junto com a imagem!');
						
					}else{
						Painel::alert('erro','O formato da imagem não é válido');
					}
				}else{
					$imagem = $imagem_atual;
					$banner = $banner_atual;
					Cartaz::atualizarCartaz($id,$nome,$sinopse,$diretor,$distribuidora,$elenco,$genero,$classificacao,$duracao,$data,$imagem,$banner,$trailer);
					Painel::alert('sucesso','O filme foi editado com sucesso!');
					
				}
				}
			
		?>

		

			<div class="form-group">
				<label>Nome:</label>
				<input type="text" name="nome"  value="<?php echo $cartaz['nome']; ?>">
			</div><!--form-group-->

			<div class="form-group">
				<label>Sinopse:</label>

			
				<textarea name="sinopse" ><?php echo $cartaz['sinopse']; ?></textarea>
			</div><!--form-group-->

			<div class="form-group">
				<label>Diretor:</label>
				<input type="text" name="diretor"  value="<?php echo $cartaz['diretor']; ?>">
			</div><!--form-group-->

			<div class="form-group">
				<label>Distribuidora:</label>
				<input type="text" name="distribuidora"  value="<?php echo $cartaz['distribuidora']; ?>">
			</div><!--form-group-->

			<div class="form-group">
				<label>Elenco:</label>

				<textarea name="elenco"><?php echo $cartaz['elenco']; ?></textarea>
			</div><!--form-group-->


			<div class="form-group">
				<label>Genero:</label>
				<input type="text" name="genero"  value="<?php echo $cartaz['genero']; ?>">
			</div><!--form-group-->
			<div class="form-group">
				<label>Classificação:</label>
				<input type="text" name="classificacao"  value="<?php echo $cartaz['classificacao']; ?>">
			</div><!--form-group-->

			<div class="form-group">
				<label>Duração:</label>
				<input type="text" name="duracao"  value="<?php echo $cartaz['duracao']; ?>">
			</div><!--form-group-->
			<div class="form-group">
				<label>Trailer:</label>
				<input type="text" name="trailer"  value="<?php echo $cartaz['trailer']; ?>" >
			</div>
			<div class="form-group">
				<label>Data de Lancamento:</label>
				<input type="date" name="data"  value="<?php echo $cartaz['data']; ?>">
			</div><!--form-group-->
			<div class="form-group">
				<label>Capa</label>
				<input type="file" name="capa"/>
				<input type="hidden" name="imagem_atual" value="<?php echo $cartaz['imagem']; ?>">
			</div><!--form-group-->
			<div class="form-group">
				<label>Banner</label>
				<input type="file" name="banner"/>
				<input type="hidden" name="banner_atual" value="<?php echo $cartaz['banner']; ?>">
			</div>
			<div class="form-group">
				<input type="submit" name="acao" value="Editar!">
			</div><!--form-group-->

	</form>



</div><!--box-content-->