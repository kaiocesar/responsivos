<?php
/**
 *	Arquivo de configurações
 * 	@todo Aqui estão todas as configurações de inicialização da aplicação
 *  @author Kaio Cesar <programador.kaio@gmail.com>
 */

// OBS.: Um dia eu tomo vergonha e uso include_path
define('APP_URL', dirname(dirname(__FILE__)));

// include class athentication
include APP_URL. '/class/authentication.php';
//include APP_URL. '/class/rb.php';

/**
 * Configuração do RedBean 
 */
//R::setup('mysql:host=127.0.0.1;dbname=cerberus_db','root','37876732');

$conn = new PDO('mysql:host=127.0.0.1;dbname=cerberus_db','root','37876732');


/**
 * Inicialização da classe de autenticação
 */
$auth = new Authentication(false); // só cria o objeto

