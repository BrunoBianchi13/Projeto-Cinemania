<?php 


	class Combo
	{

	
		public static function cadastrarCombo($titulo,$pro1,$pro2,$pro3,$pro4,$pro5,$pro6,$preco){
			$sql = MySql::conectar()->prepare("INSERT INTO `tb_combos` VALUES (null,?,?,?,?,?,?,?,?)");
			$sql->execute(array($titulo,$pro1,$pro2,$pro3,$pro4,$pro5,$pro6,$preco));
		}

		public static function listarCombo(){
			
			$sql = MySql::conectar()->prepare("SELECT * FROM `tb_combos`");
			$sql->execute();


			return $sql->fetchAll();

		}

		public static function editarCombo($id,$titulo,$pro1,$pro2,$pro3,$pro4,$pro5,$pro6,$preco){
		$sql = MySql::conectar()->prepare("UPDATE `tb_combos` SET  titulo = ?, produto1 = ?,produto2 = ?,produto3 = ?,produto4 = ?,produto5 = ?,produto6 = ?, preco = ? WHERE id = ? ");
			if($sql->execute(array($titulo,$pro1,$pro2,$pro3,$pro4,$pro5,$pro6,$preco,$id))){
				return true;
			}else{
				return false;
			}

		}

	}


 ?>