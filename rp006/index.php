<?php

error_reporting(E_ALL);

/**
 * Include dos arquivos do luminu
 */
require_once "orm/Lumine.php";
require_once "orm/lumine-conf.php";

/**
 * inicialização de configuração do lumine
 */
Lumine_Log::setLevel( 0 ); // Debug

date_default_timezone_set("America/Sao_Paulo");

$cfg = new Lumine_Configuration($lumineConfig);

spl_autoload_register(function($class) {
	Lumine::autoload($class);
});


?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="ISO-8859-1">
	<title>Relacionamento de tabelas, usando Mysql com Lumine ORM</title>

	<!-- Biblioteca Jquery  -->
	<script type="text/javascript"src="assets/js/jquery-1.10.1.min.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="assets/js/fancy/jquery.fancybox.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/js/fancy/jquery.fancybox.css" media="screen" />

	<style type="text/css">
		body{margin:0;padding:0;font-family: Arial, Verdana, Trebuchet MS; font-size: 14px;}
		#content{margin:0 auto; max-width: 96%;}
	</style>

	<script type="text/javascript">
		$(document).ready(function() {
			$(".light").fancybox({
				maxWidth	: 800,
				maxHeight	: 600,
				fitToView	: false,
				width		: '70%',
				height		: '70%',
				autoSize	: false,
				closeClick	: false,
				openEffect	: 'none',
				closeEffect	: 'none'
			});
		});
	</script>

</head>
<body>
	<div id="content">
		<h1>Listagem dos posts</h1>
		<?php	
			$posts = new Posts;
			$authors = new Authors;
			$posts->join($authors);
			$posts->find();

			while($posts->fetch()):
				echo "<b>Title: </b>". $posts->title ."</br/>";
				echo "<b>Author: </b>". $posts->name ." (<i>". $posts->email ."</i>) <a href='inner/box.php?id=".$posts->authorsId."' data-fancybox-type='iframe' class='light'>Ver perfil</a></br/>";
				echo "<b>Created at: </b>". $posts->createdAt ."</br/>";
				echo "<br/><b>Post: </b><br/>". $posts->body ."</br/>";
				echo "<hr/>";
			endwhile;
		?>	
	</div>
</body>
</html>
