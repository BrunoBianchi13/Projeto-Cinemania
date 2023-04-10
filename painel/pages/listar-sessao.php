<?php
	if(isset($_GET['id'])){
		$id = (int)$_GET['id'];
		$sala = Painel::select('tb_sessao','id = ?',array($id));
		//$nome =  $sala['titulo'];
		//$idioma =  $sala['idioma'];
	}else{
		$filme= "";
		$a = " ... ";
		$data = " ... ";
		$sala = "";
	}
?>

<div class="box-content">

		<h2>Gerenciamento de Sessoes</h2>

		<form method="post" enctype="multipart/form-data">
		


			<?php
			if(isset($_POST['acao'])){

				$filme = $_POST['filme'];
				$data = $_POST['data'];
				
			$sala = Sessao::listarSessoesDia($filme,$data);
	
}
			
		?>

			<div class="form-group">
				<div class="form-group">
				<label>Selecione o Filme:</label>

			<select name="filme">
					<option value="" selected="" >Todos os filmes</option>
				    	<?php
								$pro = Cartaz::listarCartaz();
								foreach ($pro as $key => $value) {	
							?>
								<option value="<?php echo $value['id']; ?>" ><?php echo $value['nome']; ?></option>
							<?php } ?>
				  </select>
			</div>

			<label>Data da sessão:</label>
			
				<input type="date" name="data"  value="" min="<?= date('Y-m-d'); ?>" max="<?= date('Y-m-d', strtotime('+7 days')); ?>" required>
			</div><!--form-group-->
			

			<input type="submit" name="acao" value="Pesquisar!">
		</form>
	</div>





	

<div class="box-content">
	<h2> Salas cadastradas</h2>
<?php
								$pro = Cartaz::listarCartaz();
								foreach ($pro as $key => $value) {


								if ($value['id'] == $filme) {
										$a = $value['nome'];
									}	
									

								}
							?>
								
						
	
	<h2> Programação do dia <?php echo date('d/m/Y', strtotime($data)); ?> - <?php echo $a ; ?> </h2>
	<div class="wraper-table">
	<table>
		<tr>
			<td>Sala</td>
			<td>Horario</td>
		
			<td>#</td>
			
		</tr>



		<?php

		if ($sala != "") {
			# code...
		
			foreach ($sala as $key => $a) {
		?>
		<tr>
			<td><?php echo $a['sala']; ?></td>
			<td><?php echo $a['horario']; ?></td>
		
			<td><a actionBtn="delete" class="btn delete" href="<?php echo INCLUDE_PATH_PAINEL ?>lista-sessao?excluir=<?php echo $value['id']; ?>"><i class="fa fa-times"></i> Excluir</a></td>

		</tr>

		<?php }} ?>

	

		
	</table>
	</div>




</div><!--box-content-->





