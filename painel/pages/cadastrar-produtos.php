	<div class="box-content">

		<h2><i class="fa fa-address-card" aria-hidden="true"></i></i> Cadastrar Produtos</h2>

		<form method="post" enctype="multipart/form-data">


			<?php
			if(isset($_POST['acao'])){
				$tipo = $_POST['tipo'];
				$titulo = $_POST['titulo'];
				$preco = $_POST['preco'];
				$descricao = $_POST['descricao'];
				$imagem = $_FILES['imagem'];

				if($imagem['name'] == ''){
					Painel::alert('erro','A imagem precisa estar selecionada!');
				}else{
					//Podemos cadastrar!
					if(Painel::imagemValida($imagem) == false){
						Painel::alert('erro','O formato especificado não está correto!');
					}else{
						//Apenas cadastrar no banco de dados!
						$snack = new Snack();
						$imagem = Painel::uploadFile($imagem);
						$snack->cadastrarProduto($titulo,$descricao,$preco,$imagem,$tipo);
						Painel::alert('sucesso','O cadastro do usuário '.$titulo.' foi feito com sucesso!');
					}
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
				<input type="text" name="titulo" required value="">
			</div><!--form-group-->

			<div class="form-group">
				<label>Descrição:</label>
				<textarea name="descricao"></textarea>
			</div><!--form-group-->

			
			<div class="form-group">
				<label>Preço:</label>
				<input type="text" name="preco" value="" required>
			</div>
			<!--form-group-->

			<div class="form-group">
				<label>Imagem</label>
				<input type="file" name="imagem"/>
				<input type="hidden" name="imagem_atual" value="">
			</div><!--form-group-->

			<div class="form-group">
				<input type="submit" name="acao" value="Cadastrar!">
			</div><!--form-group-->

		</form>





			

	</div>

