<?php
namespace Gvg\Dbe2\classes;

use Exception;
use Gvg\Dbe2\classes\Abstracts\Pessoa;
use Gvg\Dbe2\interfaces\iFuncionario;
use Gvg\Dbe2\traits\IMC;

class Atleta extends Pessoa implements iFuncionario{

	use IMC;

	private $salario;
	private $anosContrato;
	
	public function __construct($nome, $idade, $altura, $peso, $salario=0, $anosContrato=1)
	{
		$this->nome = $nome;
		$this->idade = $idade;
		$this->altura = $altura;
		$this->peso = $peso;
		$this->salario = $salario;
		$this->anosContrato = $anosContrato;
		// parent::__construct($nome, $idade, $peso, $altura); //Apenas para Pessoa Concreta
		$this->calcImc();
	}

	public function mostrarSalario(): string
	{
		return "Salário: R$ " . number_format($this->salario, 2, ',', '.');
	}

	public function mostrarTempoContrato(): string
	{
		return "Contrato de {$this->anosContrato} anos.";
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