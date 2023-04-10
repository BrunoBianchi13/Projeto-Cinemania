<?php 


	class Salas
	{

	
	
		public static function cadastrarSalas($nome,$idioma){
			$sql = MySql::conectar()->prepare("INSERT INTO `tb_sala` VALUES (null,?,?)");
			$sql->execute(array($nome,$idioma));
		}


		public static function atualizarSalas($id,$idioma){
		$sql = MySql::conectar()->prepare("UPDATE `tb_sala` SET  idioma = ? WHERE id = ? ");
			if($sql->execute(array($idioma,$id))){
				return true;
			}else{
				return false;
			}

		}

		public static function listarSalas(){
			
			$sql = MySql::conectar()->prepare("SELECT * FROM `tb_sala`");
			$sql->execute();


			return $sql->fetchAll();

		}

	


	}


 ?>