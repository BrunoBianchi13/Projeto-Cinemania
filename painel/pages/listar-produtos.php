<?php
	if(isset($_GET['excluir'])){
		$idExcluir = intval($_GET['excluir']);
		$selectImagem = MySql::conectar()->prepare("SELECT img FROM `tb_snack.produtos` WHERE id = ?");
		$selectImagem->execute(array($_GET['excluir']));

		$imagem = $selectImagem->fetch()['img'];
		Painel::deleteFile($imagem);
		Painel::deletar('tb_snack.produtos',$idExcluir);
		Painel::redirect(INCLUDE_PATH_PAINEL.'listar-produtos');
	}
	
	$prod = Snack::listarProdutos();
	
?>
<div
<div class="box-content">
	<h2><i class="fa fa-id-card-o" aria-hidden="true"></i> Produtos Cadastrados</h2>
	<div class="wraper-table">
	<table>
		<tr>
			<td>Titulo</td>
			<td>imagem</td>
			<td>#</td>
			<td>#</td>
			
		</tr>



		<?php
			foreach ($prod as $key => $value) {
		?>
		<tr>
			<td><?php echo $value['titulo']; ?></td>
			<td><img style="width: 50px;height:50px;" src="<?php echo INCLUDE_PATH_PAINEL ?>upload/<?php echo $value['img']; ?>" /></td>
			<td><a class="btn edit" href="<?php echo INCLUDE_PATH_PAINEL ?>editar-produtos?id=<?php echo $value['id']; ?>"><i class="fa fa-pencil"></i> Editar</a></td>
			<td><a actionBtn="delete" class="btn delete" href="<?php echo INCLUDE_PATH_PAINEL ?>listar-produtos?excluir=<?php echo $value['id']; ?>"><i class="fa fa-times"></i> Excluir</a></td>

		</tr>

		<?php } ?>

	

		
	</table>
	</div>




</div>