<div class="box-content">

		<h2><i class="fa fa-video-camera" aria-hidden="true"></i> Cadastrar Filme Em Cartaz</h2>

		<form method="post" enctype="multipart/form-data">

		<?php
			if(isset($_POST['acao'])){

			
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

			
					//Podemos cadastrar!
					if(Painel::imagemValida($imagem) == false){
						Painel::alert('erro','O formato especificado não está correto!');
					}
					else{
						
						$cartaz = new Cartaz();
						$imagem = Painel::uploadFile($imagem);
						$banner = Painel::uploadFile($banner);
						$cartaz->cadastrarFilme($nome,$sinopse,$diretor,$distribuidora,$elenco,$genero,$classificacao,$duracao,$data,$imagem,$banner,$trailer);
						Painel::alert('sucesso','O cadastro do Filme '.$nome.' foi feito com sucesso!');
					}
				}


				
			//$nome,$sinopse,$diretor,$distribuidora,$elenco,$genero,$classificacao,$duracao,$data,$imagem	
			
		?>


		

			<div class="form-group">
				<label>Nome:</label>
				<input type="text" name="nome"  value="">
			</div><!--form-group-->

			<div class="form-group">
				<label>Sinopse:</label>

			
				<textarea name="sinopse"></textarea>
			</div><!--form-group-->

			<div class="form-group">
				<label>Diretor:</label>
				<input type="text" name="diretor"  value="">
			</div><!--form-group-->

			<div class="form-group">
				<label>Distribuidora:</label>
				<input type="text" name="distribuidora"  value="">
			</div><!--form-group-->

			<div class="form-group">
				<label>Elenco:</label>

				<textarea name="elenco"></textarea>
			</div><!--form-group-->


			<div class="form-group">
				<label>Genero:</label>
				<input type="text" name="genero"  value="">
			</div><!--form-group-->
			<div class="form-group">
				<label>Classificação:</label>
				<input type="text" name="classificacao"  value="">
			</div><!--form-group-->

			<div class="form-group">
				<label>Duração:</label>
				<input type="text" name="duracao"  value="">
			</div><!--form-group-->
			<div class="form-group">
				<label>Trailer:</label>
				<input type="text" name="trailer"  value="" placeholder="URL do trailer">
			</div>
			<div class="form-group">
				<label>Data de Lancamento:</label>
				<input type="date" name="data"  value="">
			</div><!--form-group-->
			<div class="form-group">
				<label>Capa</label>
				<input type="file" name="capa"/>
				<input type="hidden" name="imagem_atual" value="">
			</div><!--form-group-->
			<div class="form-group">
				<label>Banner</label>
				<input type="file" name="banner"/>
				<input type="hidden" name="imagem_atual" value="">
			</div>
			<div class="form-group">
				<input type="submit" name="acao" value="Cadastrar!">
			</div><!--form-group-->


		</form>





			

	</div>

