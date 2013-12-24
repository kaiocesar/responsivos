<?php
/**
 *	Logout	
 *	@todo Página de logout, "solução didatica".
 *	@author Kaio Cesar <programador.kaio@gmail.com>
 */

include 'app/configs/config.php';

$auth = new Authentication(false);
$auth->logout();
