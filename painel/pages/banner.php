<?php
	if(isset($_GET['id'])){
		$id = (int)$_GET['id'];
		$sala = Painel::select('tb_banner','id = ?',array($id));
			


				
	}else{	
	$id= "";
	$sala['img'] = "";

	
	}
?>

<div class="box-content">

		<h2>Gerenciamento de Banner</h2>

		<form method="post" enctype="multipart/form-data">
		


			<?php
			if(isset($_POST['acao'])){
				
				
				
				$id=$_GET['id'];
				
				
				$banner = $_FILES['banner'];
				$banner_atual = $_POST['banner_atual'];
			

				if($banner['name'] != '' ){
 
					//Existe o upload de imagem.
					if(Painel::imagemValida($banner)){
						Painel::deleteFile($banner_atual);
						$banner = Painel::uploadFile($banner);
						Banner::atualizarBanner($id,$banner);
						Painel::alert('sucesso','O Banner foi editado !');
						Painel::redirect(INCLUDE_PATH_PAINEL.'banner');
						
					}else{
						Painel::alert('erro','O formato do Banner não é válido');
					}
				}else{
					
					$banner = $banner_atual;
					Banner::atualizarBanner($id,$banner);
					Painel::alert('sucesso','O filme foi editado com sucesso!');
					Painel::redirect(INCLUDE_PATH_PAINEL.'banner');
					
				}
				}
			
		?>

			<div class="form-group">
				<label>Banner <?php
							if ($id == "") {
								$sala['id'] = "";
								echo $sala['id'];
							}
								echo $sala['id']; ?></label>
				<input type="file" name="banner"/>
				<input type="hidden" name="banner_atual" value="<?php  $sala['img']; ?>">
			</div>
			<div class="form-group">
				<input type="submit" name="acao" value="Editar!">
			</div>
			
		</form>
	</div>





	<?php
	
	
	$sala = Banner::listarBanner();
	
?>
<div
<div class="box-content">
	<h2> Banners </h2>
	<div class="wraper-table">
	<table>
		<tr>
			<td>Banner</td>
			<td>#</td>
			
			
		</tr>



		<?php
			foreach ($sala as $key => $value) {
		?>
		<tr>
			<td><img style="width: 200px;height:100px;" src="<?php echo INCLUDE_PATH_PAINEL ?>upload/<?php echo $value['img']; ?>" /></td>
			<td><a class="btn edit" href="<?php echo INCLUDE_PATH_PAINEL ?>banner?id=<?php echo $value['id']; ?>"><i class="fa fa-pencil"></i> Editar</a></td>
			

		</tr>

		<?php } ?>

	

		
	</table>
	</div>




</div><!--box-content-->





