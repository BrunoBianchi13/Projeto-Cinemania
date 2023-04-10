<?php 


	class Cartaz
	{

	
		public static function cadastrarFilme($nome,$sinopse,$diretor,$distribuidora,$elenco,$genero,$classificacao,$duracao,$data,$imagem,$banner,$trailer){
			$sql = MySql::conectar()->prepare("INSERT INTO `tb_filmes.cartaz` VALUES (null,?,?,?,?,?,?,?,?,?,?,?,?)");
			$sql->execute(array($nome,$sinopse,$diretor,$distribuidora,$elenco,$genero,$classificacao,$duracao,$data,$imagem,$banner,$trailer));
		}




		public static function atualizarCartaz($id,$nome,$sinopse,$diretor,$distribuidora,$elenco,$genero,$classificacao,$duracao,$data,$imagem,$banner,$trailer){
		$sql = MySql::conectar()->prepare("UPDATE `tb_filmes.cartaz` SET nome = ?, sinopse = ?, diretor = ?, distribuidora = ?,  elenco = ?, genero = ?, classificacao = ?, duracao = ?, data = ?, imagem = ?, banner = ?, trailer = ? WHERE id = ? ");
			if($sql->execute(array($nome,$sinopse,$diretor,$distribuidora,$elenco,$genero,$classificacao,$duracao,$data,$imagem,$banner,$trailer,$id))){
				return true;
			}else{
				return false;
			}

		}












		public static function listarCartaz(){
			
			$sql = MySql::conectar()->prepare("SELECT * FROM `tb_filmes.cartaz`");
			$sql->execute();


			return $sql->fetchAll();

		}
}


 ?>