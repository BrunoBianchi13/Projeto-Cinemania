<?php
	if(isset($_GET['excluir'])){
		$idExcluir = intval($_GET['excluir']);
		$selectImagem = MySql::conectar()->prepare("SELECT imagem FROM `tb_filmes.cartaz` WHERE id = ?");
		$selectImagem->execute(array($_GET['excluir']));

		$imagem = $selectImagem->fetch()['imagem'];
		Painel::deleteFile($imagem);
		Painel::deletar('tb_filmes.cartaz',$idExcluir);
		Painel::redirect(INCLUDE_PATH_PAINEL.'listar-cartaz');
	}
	
	$cartaz = Cartaz::listarCartaz();
	
?>
<div
<div class="box-content">
	<h2><i class="fa fa-id-card-o" aria-hidden="true"></i> Filmes em Cartaz Cadastrados</h2>
	<div class="wraper-table">
	<table>
		<tr>
			<td>Nome</td>
			<td>Capa</td>
			<td>#</td>
			<td>#</td>
			
		</tr>



		<?php
			foreach ($cartaz as $key => $value) {
		?>
		<tr>
			<td><?php echo $value['nome']; ?></td>
			<td><img style="width: 50px;height:50px;" src="<?php echo INCLUDE_PATH_PAINEL ?>upload/<?php echo $value['imagem']; ?>" /></td>
			<td><a class="btn edit" href="<?php echo INCLUDE_PATH_PAINEL ?>editar-cartaz?id=<?php echo $value['id']; ?>"><i class="fa fa-pencil"></i> Editar</a></td>
			<td><a actionBtn="delete" class="btn delete" href="<?php echo INCLUDE_PATH_PAINEL ?>listar-cartaz?excluir=<?php echo $value['id']; ?>"><i class="fa fa-times"></i> Excluir</a></td>

		</tr>

		<?php } ?>

	

		
	</table>
	</div>




</div><!--box-content-->