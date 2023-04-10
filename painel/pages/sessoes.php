	<div class="box-content">

		<h2>Gerenciamento de sessões</h2>

		<form method="post" enctype="multipart/form-data">


<?php
			if(isset($_POST['acao'])){
			
				$filme = $_POST['filme'];
				$sala = $_POST['sala'];
				$tipo = $_POST['tipo'];
				$data = $_POST['data'];
				$horario = $_POST['horario'];
	
						$ses = new Sessao();
						$ses->cadastrarSessao($filme,$data,$horario,$sala,$tipo);
						Painel::alert('sucesso','A sessao foi criada com sucesso');
					}
				
			
		?>


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

			<label>Selecione a sala:</label>
			<select name="sala">
					<option value="" selected="" >Todas as salas</option>
				    	<?php
								$pro = Salas::listarSalas();
								foreach ($pro as $key => $value) {	
							?>
								<option value="<?php echo $value['titulo']; ?>" ><?php echo $value['titulo']; ?></option>
							<?php } ?>
				  </select>
			
			<label>Tipo da sessão:</label>
				<select name="tipo">
					<option value="" selected="" >Todos os tipos</option>
				    <option value="2D">2D</option>
				    <option value="3D">3D</option>
				    
			</select>
			
				<label>Data da sessão:</label>
			
				<input type="date" name="data"  value="" min="<?= date('Y-m-d'); ?>" max="<?= date('Y-m-d', strtotime('+7 days')); ?>" required>
		
			
				<label>Horario da sessão:</label>
				<input type="time" name="horario"  value=""  min="12:00" max="23:30" required>
			
				<input type="submit" name="acao" value="Cadastrar!">
				<input type="submit" name="editar" value="Atualizar!">
			</div><!--form-group-->



		</form>


		




			

	</div>







