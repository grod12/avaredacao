<?php

	require_once("../model/Login.php");
	class UsuarioController{
		private $login;
		public function __construct(){
			$this->login = new Login();
			$this->verificar();
			
		}

		private function verificar(){
			if(!empty($_POST['matricula']) || !empty($_POST['senha'){
				$this->login->setMatricula($_POST['matricula']);
				$this->login->setSenha($_POST['senha']);

				echo "<b>A sua matricula é: </b>".$this->login->getMatricula($_POST['matricula'])."<br>";
				echo "<b>A sua senha é: </b>".$this->login->getSenha($_POST['senha']);
			}else{
				echo "NÃO DEIXE NENHUM CAMPO VAZIO";
				
			}

		}
	}

	new UsuarioController();