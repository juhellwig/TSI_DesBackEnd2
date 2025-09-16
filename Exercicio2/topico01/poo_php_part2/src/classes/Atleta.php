<?php
namespace Gvg\Dbe2\classes;

use Exception;
use Gvg\Dbe2\classes\Abstracts\Pessoa;
use Gvg\Dbe2\traits\IMC;

class Atleta extends Pessoa{

	use IMC;
	
	public function __construct($nome, $idade, $altura, $peso)
	{
		$this->nome = $nome;
		$this->idade = $idade;
		$this->altura = $altura;
		$this->peso = $peso;
		// parent::__construct($nome, $idade, $peso, $altura); //Apenas para Pessoa Concreta
		$this->calcImc();
	}

	public function __toString():string {
               $saida = "\n===Dados do ".self::class 
			   ."==="
               ."\nNome: $this->nome"
               .($this->idade ? "\nIdade: $this->idade" : "")
               ."\nPeso: $this->peso"
               ."\nAltura: $this->altura";

		$saida .= (isset($this->imc))
				?"\nIMC: ".number_format($this->imc, 3)
				:"";
		return $saida;
	}
}