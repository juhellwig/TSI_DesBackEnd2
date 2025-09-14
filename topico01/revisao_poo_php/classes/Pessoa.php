<?php

class Pessoa
{
	protected $imc;

	function __construct(
		public string $nome,
		public int $idade,
		protected float $altura = 0,
		protected float $peso = 0,
	){
		echo "\nObjeto $this->nome construído!!!\n";
	}

	function __destruct() {
		echo "\n$this->nome foi destruido!\n";
	}

	// function calcImc()
	// {
	// 	if (
	// 		!is_numeric($this->altura)
	// 		&& !is_numeric($this->peso)
	// 		|| $this->altura <= 0
	// 		|| $this->peso <= 0
	// 	) {
	// 		echo "\nIMC $this->nome: Erro, informe peso e altura corretamente.\n";
    //         return;
    //     }

    //     $this->imc = $this->peso / $this->altura ** 2;
	// 	echo "\nO IMC do $this->nome é: " . number_format($this->imc, 2) . "\n";
		
	// }

    function setImc($valor){
        $this->imc = $valor;
    }

    function getImc(){
        return $this->imc;
    }

	function getAltura(){
		return $this->altura;
	}

	function getPeso(){
		return $this->peso;
	}
}