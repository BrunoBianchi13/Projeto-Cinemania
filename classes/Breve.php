<?php 


	class Breve
	{

		

		public static function cadastrarFilme($nome,$sinopse,$diretor,$distribuidora,$elenco,$genero,$classificacao,$duracao,$data,$imagem,$banner,$trailer){
			$sql = MySql::conectar()->prepare("INSERT INTO `tb_filmes.breve` VALUES (null,?,?,?,?,?,?,?,?,?,?,?,?)");
			$sql->execute(array($nome,$sinopse,$diretor,$distribuidora,$elenco,$genero,$classificacao,$duracao,$data,$imagem,$banner,$trailer));
		}

		public static function atualizarBreve($id,$nome,$sinopse,$diretor,$distribuidora,$elenco,$genero,$classificacao,$duracao,$data,$imagem,$banner,$trailer){
		$sql = MySql::conectar()->prepare("UPDATE `tb_filmes.breve` SET nome = ?, sinopse = ?, diretor = ?, distribuidora = ?,  elenco = ?, genero = ?, classificacao = ?, duracao = ?, data = ?, imagem = ?, banner = ?, trailer = ? WHERE id = ? ");
			if($sql->execute(array($nome,$sinopse,$diretor,$distribuidora,$elenco,$genero,$classificacao,$duracao,$data,$imagem,$banner,$trailer,$id))){
				return true;
			}else{
				return false;
			}

		}




		public static function listarBreve(){
			
			$sql = MySql::conectar()->prepare("SELECT * FROM `tb_filmes.breve`");
			$sql->execute();


			return $sql->fetchAll();

		}


	}


 ?>