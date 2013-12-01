<?php 
error_reporting(E_ALL);

/**
 * Include dos arquivos do luminu
 */
require_once "../orm/Lumine.php";
require_once "../orm/lumine-conf.php";

/**
 * inicialização de configuração do lumine
 */
Lumine_Log::setLevel( 0 ); // Debug

date_default_timezone_set("America/Sao_Paulo");

$cfg = new Lumine_Configuration($lumineConfig);

spl_autoload_register(function($class) {
	Lumine::autoload($class);
});

$author = new Authors;
$have = $author->get($_GET['id']);
if ($have):
	echo "<b>name: </b>". $author->name ."</br/>";
	echo "<b>email: </b>". $author->email ."</br/>";
else:
	echo "<h3>Nenhum dado foi encontrado.</h3>";
endif;
