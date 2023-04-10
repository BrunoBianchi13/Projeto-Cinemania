<?php
	if(isset($_GET['id'])){
		$id = (int)$_GET['id'];
		$sala = Painel::select('tb_sala','id = ?',array($id));
		$nome =  $sala['titulo'];
		$idioma =  $sala['idioma'];
	}else{
		$nome =  "";
		$idioma = "";
	}
?>

<div class="box-content">

		<h2>Gerenciamento de Salas</h2>

		<form method="post" enctype="multipart/form-data">
		


			<?php
			if(isset($_POST['editar'])){
			
				$id=$_GET['id'];
	
				$idioma = $_POST['idioma'];

					Salas::atualizarSalas($id,$idioma);
					$nome = "";
					Painel::alert('sucesso','O Sala foi editado com sucesso!');
					
				}
			
		?>

			<div class="form-group">
				<label>Nome:</label>
				<input type="text" name="slal"  value="<?php echo $nome ?>">
				<label>Idioma da sessão:</label>
				<select name="idioma">
					
				    <option value="DUB">Dublado</option>
				    <option value="LEG">Legendado</option>
				    <option value="ORIG">Áudio Original</option>
				    
			</select>
					

				<input type="submit" name="editar" value= "Atualizar!">
			</div><!--form-group-->
		
		</form>
	</div>





	<?php
	if(isset($_GET['excluir'])){
		$idExcluir = intval($_GET['excluir']);
		Painel::deletar('tb_sala',$idExcluir);
		Painel::redirect(INCLUDE_PATH_PAINEL.'salas');
	}
	
	$sala = Salas::listarSalas();
	
?>
<div
<div class="box-content">
	<h2> Salas cadastradas</h2>
	<div class="wraper-table">
	<table>
		<tr>
			<td>Titulo</td>
			<td>#</td>
			<td>#</td>
			
		</tr>



		<?php
			foreach ($sala as $key => $value) {
		?>
		<tr>
			<td><?php echo $value['titulo']; ?></td>
			<td><a class="btn edit" href="<?php echo INCLUDE_PATH_PAINEL ?>salas?id=<?php echo $value['id']; ?>"><i class="fa fa-pencil"></i> Editar</a></td>
			<td><a actionBtn="delete" class="btn delete" href="<?php echo INCLUDE_PATH_PAINEL ?>salas?excluir=<?php echo $value['id']; ?>"><i class="fa fa-times"></i> Excluir</a></td>

		</tr>

		<?php } ?>

	

		
	</table>
	</div>




</div><!--box-content-->





