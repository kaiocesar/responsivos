<?php
/**
 *	Authentication
 *	@todo Authentication class
 *  @author Kaio Cesar <programador.kaio@gmail.com>
 */

class Authentication{

	public function __construct($checked=true) {
		if ($checked==true) {
			$this->checked();
		}
	}

	public function checked() {

		if (!isset($_COOKIE['session']) 
		 || !isset($_COOKIE['session_expiration']) 
		 || !isset($_COOKIE['session_user'])
		 || strlen($_COOKIE['session']) ==0
		 || strlen($_COOKIE['session_user']) ==0
		 || strlen($_COOKIE['session_expiration']) ==0
		  ):
			header("Location: login.php");
		else:
			$genHash = $this->CreatedAccessKey($_COOKIE['session_user'], $_COOKIE['session_expiration'], false);

			if(! $genHash === $_COOKIE['session']):
				header("Location: login.php");
				exit();
			endif;

		endif;

	}

	public function verifyKeyHash($hash=null){
		var_dump($hash);
		exit;
	}


	public function login($post=null) {

		global $conn;

		if (isset($_POST['username']) && isset($_POST['password'])):

			//1- antiinjection
			$username = $this->antiinjection($_POST['username']);
			$password = $this->antiinjection($_POST['password']);


			//2- find
			$users =$conn->prepare('SELECT * FROM users WHERE username = "'.$username.'" AND password = "'.$password.'" AND STATUS = 1 ');
			$users->execute();
			$user = $users->fetch(PDO::FETCH_ASSOC);


			//3- redirect
			if ($user!==false):
				$rd = rand(1,32);
				$this->CreatedAccessKey($user['username'],$rd);
				return true;
			else:
				return false;
			endif;

		endif;

	}



	public function antiinjection($sql) {
	    $sql = strip_tags(trim($sql));
	    // melhorar isso para expressão regular
	    $sql = str_replace("'", "",$sql);
	    $sql = str_replace("/", "",$sql);
	    $sql = str_replace("#", "",$sql);
	    $sql = str_replace(" ", "",$sql);
	    return $sql;
	}


	public function CreatedAccessKey($username=null, $rd=null, $create_cookie=true) {

		// hash baseado em ?
		$hashUser = md5(sha1(strrev($username)));		
		$hash_arrU = (str_split($hashUser,$rd)); // username dividido
		$hash_arrU = array_reverse($hash_arrU);

		// hash ordem
		$ordeKeysUser = implode("", array_keys($hash_arrU));
		$hashOrderKey = md5(sha1(strrev($ordeKeysUser)));
		$hashOrderKey = substr($hashOrderKey,0, $rd);

		$hash_arrU	= implode("",$hash_arrU);
		$hashFINAL = $hash_arrU.''.$hashOrderKey;

		if ($create_cookie==true):
			setcookie("session", $hashFINAL, time()+3600*24);
			setcookie("session_expiration", $rd, time()+3600*24);
			setcookie("session_user", $username, time()+3600*24);
		else:
			return $hashFINAL;
		endif;

	}


	public function logout(){

		unset($_COOKIE["session"]);
		unset($_COOKIE["session_expiration"]);
		unset($_COOKIE["session_user"]);

		setcookie("session","", 1);
		setcookie("session_expiration","",1);
		setcookie("session_user","",1);


		header('Location: login.php');
	}


	public function logsAttempts(){
		$ip = $_SERVER['REMOTE_ADDR'];

		global $conn;

		$res = $this->CheckLog($ip);

		if ($res['count(*)']>0):
			header("Location: blacklist.php");
		endif;
		
		$getCookie =0;

		if (isset($_COOKIE['session_init'])){
			$getCookie = $_COOKIE['session_init'];
		}

		setcookie('session_init', (int)$getCookie + 1, time()+3600*24);


		if ($_COOKIE['session_init']>=3):			
			$sql = "INSERT INTO blacklist (ip, data_register, status) VALUES(:ip, :data_register, :status)";
			$ss = $conn->prepare($sql);
			$ss->bindValue(":ip", $ip);
			$ss->bindValue(":data_register", date('Y-m-d h:i:s'));
			$ss->bindValue(":status", '1');
			$ss->execute();
		endif;

	}


	public function CheckLog($ip=null) {
		global $conn;
		$black = $conn->prepare("SELECT count(*) FROM blacklist WHERE ip = '".$ip."' ");
		$black->execute();
		$res = $black->fetch(PDO::FETCH_ASSOC);
		return $res;
	}



}