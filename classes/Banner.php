<?php 


	class Banner
	{

	
		




		public static function atualizarBanner($id,$banner){
		$sql = MySql::conectar()->prepare("UPDATE `tb_banner` SET img = ? WHERE id = ? ");
			if($sql->execute(array($banner,$id))){
				return true;
			}else{
				return false;
			}

		}












		public static function listarBanner(){
			
			$sql = MySql::conectar()->prepare("SELECT * FROM `tb_banner`");
			$sql->execute();


			return $sql->fetchAll();

		}
}


 ?>