<?php include('config.php'); ?>



<!DOCTYPE html>
<html>
<head>
	<title>Projeto 01</title>
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/font-awesome.min.css">
	
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="<?php echo INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<meta name="keywords" content="palavras-chave,do,meu,site">
	<meta name="description" content="Descrição do meu website">
	<meta charset="utf-8" />
</head>
<body>


	




<header>

		

		<div class="center">
				
			<div class="left">
				<a  style="text-decoration:none; "href="<?php echo INCLUDE_PATH;?>"><h2>CINEMANIA</h2></a>
			</div>

			<div class="right " style="margin-left:150px">
			<a href="<?php echo INCLUDE_PATH;?>painel"><h3><i class="fa-solid fa-right-to-bracket"></i> Login</h3></a>
			</div>

			<div class="right ">
				<a href="<?php echo INCLUDE_PATH;?>cartaz"><h3>Cartaz</h3></a>
				<a href="<?php echo INCLUDE_PATH;?>breve"><h3>Breve</h3></a>
				<a href="<?php echo INCLUDE_PATH;?>cardapio"><h3>Snack-Bar</h3></a>
				<a href="<?php echo INCLUDE_PATH;?>combo"><h3>Combo</h3></a>
			</div>
		</div>
</header>
	<?php



	$url= isset($_GET['url']) ? $_GET['url'] : 'home';
	
		if(file_exists('pages/'.$url.'.php')){
			include('pages/'.$url.'.php');
		}else{
			include('upload.php');
		}
		

	?>

<footer>


<section id="#contato">

        <div class="center">

		
				

            <div class="info">

			<i class="fa-brands fa-facebook"></i>
                <h3>/Facebook</h3>
                <h4>/CINEMANIA</h4>

            </div>
            <div class="info">

			<i class="fa-brands fa-twitter"></i>
                <h3>/Twitter</h3>
                <h4>/CINEMANIA</h4>

            </div><div class="info">

			<i class="fa-brands fa-instagram"></i>
                <h3>/Instagram</h3>
                <h4>/CINEMANIA</h4>

            </div><div class="info">

                <i class="fa-brands fa-youtube"></i>
                <h3>/Youtube</h3>
                <h4>/CINEMANIA</h4>

            </div>

			<div class="info">

			<i class="fa-brands fa-linkedin"></i>
                <h3>/Linkedin</h3>
                <h4>/CINEMANIA</h4>

            </div>


        </div>

</section>
	
	<div class="center">
		
		<a href="">&copy; Bruno Bianchi</a>
		<a href="" class="">Politica de privacidade</a>
		<a href="" class="" >Termos de uso</a>
		
	

</footer>

<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
<script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>




</body>
</html>