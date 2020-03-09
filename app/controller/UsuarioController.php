<?php

	require_once("../model/Login.php");
	class UsuarioController{
		private $login;
		public function __construct(){
			$this->login = new Login();
			$this->verificar();
			
		}

		private function verificar(){
			if(!empty($_POST['matricula']) || !empty($_POST['senha'])){
				$this->login->setMatricula($_POST['matricula']);
				$this->login->setSenha($_POST['senha']);
				$this->login->fazerLogin();
			}else{
				echo "NÃO DEIXE NENHUM CAMPO VAZIO";
				
			}

		}
	}

	new UsuarioController();