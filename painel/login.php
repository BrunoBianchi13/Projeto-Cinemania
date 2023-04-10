<!DOCTYPE html>
<html>
<head>
	<title>Painel de Controle</title>
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/font-awesome.min.css">
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php echo INCLUDE_PATH_PAINEL; ?>css/style.css" rel="stylesheet" />
	
</head>
<body>




	<div class="box-login">


		<?php 
			if (isset($_POST['acao'])) {
				$user = $_POST['user'];
				$password = $_POST['password'];


				$sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.usuarios` WHERE user = ? AND password = ?");
				$sql->execute(array($user,$password));
				if($sql->rowCount() == 1){
					$info = $sql->fetch();
					$_SESSION['login'] = true;
					$_SESSION['id'] = $info['id'];;
					$_SESSION['user'] = $user;
					$_SESSION['password'] = $password;
					$_SESSION['img'] = $info['img'];
					$_SESSION['nome'] = $info['nome'];
					
					header('Location: '.INCLUDE_PATH_PAINEL);
					echo "Foiiiiiiiiiiiiiiiiii";
					die();
				}


			}

		 ?>

		<h2> CINEMANIA </h2>
		<hr>
		<form method="post">

			
			<input type="text" name="user" placeholder="Login..." required>
			<input type="text" name="password" placeholder="Senha..." required>

			<input type="submit" name="acao" value= "LOGAR!">


		</form>


	</div>

</body>
</html>