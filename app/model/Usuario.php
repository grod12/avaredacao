<?php

require_once("Conexao.php");
class Usuario extends Conexao{

	private $matricula;
	private $senha;


	public function setMatricula($matricula){
		$this->matricula = $matricula;
	}

	public function setSenha($senha){
		$this->senha = $senha;
	}

	public function getMatricula(){
		return $this->matricula;
	}

	public function getSenha(){
		return $this->senha;
	}

	public function fazerLogin(){
		return $this->doLogin($this->getMatricula(), $this->getSenha());
	}
}