<?php
	
require_once("../config.php");

class Conexao{
	protected $con;

	public function __construct(){
		$this->conectar();
	}

	private function conectar(){
		try{
			$this->con = new PDO('mysql:host='. HOSTNAME .';dbname='. DATABASE .';charset=utf8', USER, PASSWORD);
		}catch(PDOException $e){
			echo "ERRO AO CONECTAR";
		}
		
	}

	public function doLogin($user, $pass){
		$stmt = $this->con->prepare("SELECT * FROM usuarios WHERE user = :user AND pass = :pass");
		$stmt->bindParam(':user', $user);
		$stmt->bindParam(':pass', $pass);
		$stmt->execute();

		if($stmt->rowCount() == 1){
			echo "LOGADO COM SUCESSO!!";
		}else{
			echo "SENHA E USUARIO INCORRETO";
		}
	}
}