<?php 


 include('classes/Mysql.php');
	$msg= false;

	if (isset($_FILES['arquivo'])) {
		$extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
		$novo_nome = md5(time()) . $extensao;
		$diretorio = "upload/";

		move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);

		$sql = "INSERT INTO arquivo (id, arquivo, data) VALUES(null,'novo_nome', NOW())";
		if ($pdo->query($sql)) {
			echo "foi";
		}else
		echo "faio";
	}
	
	$sql = "SELECT * from arquivo";
	//$pdo->query($sql);
	//echo $pdo;






 ?>




