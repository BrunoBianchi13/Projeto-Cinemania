	<div class="box-content">

		<h2><i class="fa fa-address-card" aria-hidden="true"></i></i> Cadastrar Usuário</h2>

		<form method="post" enctype="multipart/form-data">


			<?php
			if(isset($_POST['acao'])){
				$login = $_POST['login'];
				$nome = $_POST['nome'];
				$senha = $_POST['password'];
				$imagem = $_FILES['imagem'];

				if($login == ''){
					Painel::alert('erro','O login está vázio!');
				}else if($nome == ''){
					Painel::alert('erro','O nome está vázio!');
				}else if($senha == ''){
					Painel::alert('erro','A senha está vázia!');
				}else if($imagem['name'] == ''){
					Painel::alert('erro','A imagem precisa estar selecionada!');
				}else{
					//Podemos cadastrar!
					if(Painel::imagemValida($imagem) == false){
						Painel::alert('erro','O formato especificado não está correto!');
					}else if(Usuario::userExists($login)){
						Painel::alert('erro','O login já existe, selecione outro por favor!');
					}else{
						//Apenas cadastrar no banco de dados!
						$usuario = new Usuario();
						$imagem = Painel::uploadFile($imagem);
						$usuario->cadastrarUsuario($login,$senha,$imagem,$nome);
						Painel::alert('sucesso','O cadastro do usuário '.$login.' foi feito com sucesso!');
					}
				}


				
				
			}
		?>


			<div class="form-group">
				<label>Nome:</label>
				<input type="text" name="nome" required value="">
			</div><!--form-group-->

			<div class="form-group">
				<label>Login:</label>
				<input type="text" name="login" required value="">
			</div><!--form-group-->

			
			<div class="form-group">
				<label>Senha:</label>
				<input type="password" name="password" value="" required>
			</div><!--form-group-->

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

