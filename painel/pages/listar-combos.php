<?php
	if(isset($_GET['excluir'])){
		$idExcluir = intval($_GET['excluir']);
		Painel::deletar('tb_combos',$idExcluir);
		Painel::redirect(INCLUDE_PATH_PAINEL.'listar-combos');
	}
	
	$prod = Combo::listarCombo();
	
?>
<div
<div class="box-content">
	<h2><i class="fa fa-id-card-o" aria-hidden="true"></i> Combos Cadastrados</h2>
	<div class="wraper-table">
	<table>
		<tr>
			<td>Titulo</td>
			<td>#</td>
			<td>#</td>
			
		</tr>



		<?php
			foreach ($prod as $key => $value) {
		?>
		<tr>
			<td><?php echo $value['titulo']; ?></td>
			<td><a class="btn edit" href="<?php echo INCLUDE_PATH_PAINEL ?>editar-combos?id=<?php echo $value['id']; ?>"><i class="fa fa-pencil"></i> Editar</a></td>
			<td><a actionBtn="delete" class="btn delete" href="<?php echo INCLUDE_PATH_PAINEL ?>listar-combos?excluir=<?php echo $value['id']; ?>"><i class="fa fa-times"></i> Excluir</a></td>

		</tr>

		<?php } ?>

	

		
	</table>
	</div>




</div><!--box-content-->