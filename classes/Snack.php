<?php 


	class Snack
	{

	
		public static function cadastrarProduto($titulo,$descricao,$preco,$imagem,$tipo){
			$sql = MySql::conectar()->prepare("INSERT INTO `tb_snack.produtos` VALUES (null,?,?,?,?,?)");
			$sql->execute(array($titulo,$descricao,$preco,$imagem,$tipo));
		}


		public static function atualizarProdutos($id,$tipo,$titulo,$descricao,$preco,$imagem){
		$sql = MySql::conectar()->prepare("UPDATE `tb_snack.produtos` SET tipo = ?, titulo = ?, descricao = ?, preco = ?,  img = ? WHERE id = ? ");
			if($sql->execute(array($tipo,$titulo,$descricao,$preco,$imagem,$id))){
				return true;
			}else{
				return false;
			}

		}

		public static function listarProdutos(){
			
			$sql = MySql::conectar()->prepare("SELECT * FROM `tb_snack.produtos`");
			$sql->execute();


			return $sql->fetchAll();

		}

	


	}


 ?>