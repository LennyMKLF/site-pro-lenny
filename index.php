<!DOCTYPE html>

<html lang="fr">
	
    <head>
    	<title>Site Perso</title>
	    <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
		<style>
			@import url('https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap');
		</style>
	</head>
	
	<body>
		<?php 
		include('php/menutop.php');


		$content=\file_get_contents('data/menutop.yaml');
		$data=yaml_parse($content);

		foreach($data as $cle=>$val){
			echo '<section id="'.$val.'">';
			include('php/'.$val.'.php');
			echo '</section>';
		}	
		?> 
	<footer>
        <p>Copyright © 2021 - Lenny MIKALEFF, tout droits réservés.</p>
    </footer>

<script>
window.location.href='#accueil';
</script>

	</body>

</html>