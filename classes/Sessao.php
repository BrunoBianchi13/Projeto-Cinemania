
<?php 


	class Sessao
	{

	
	
		public static function cadastrarSessao($filme,$data,$horario,$sala,$tipo){
			$sql = MySql::conectar()->prepare("INSERT INTO `tb_sessao` VALUES (null,?,?,?,?,?)");
			$sql->execute(array($filme,$sala,$tipo,$data,$horario));
		}


		public static function atualizarSalas($id,$titulo){
		$sql = MySql::conectar()->prepare("UPDATE `tb_sala` SET titulo = ? WHERE id = ? ");
			if($sql->execute(array($titulo,$id))){
				return true;
			}else{
				return false;
			}

		}

		public static function listarSessoes(){
			
			$sql = MySql::conectar()->prepare("SELECT * FROM `tb_sessao`");
			$sql->execute();


			return $sql->fetchAll();

		}
		public static function listarSessoesDia($filme,$data){


			
			
			$sql = MySql::conectar()->prepare("SELECT * FROM `tb_sessao` WHERE filme = ? AND data= ?");
			$sql->execute(array($filme,$data));


			return $sql->fetchAll();

		}

	
	


	}


 ?>