<?php 

namespace Gvg\Dbe2\traits;

//class
trait IMC
{
	protected float | null $imc;
    
	public function calcIMC(): void
    {
        if(isset($this->peso)&&isset($this->altura)) {
            $this->imc = $this->peso/$this->altura**2;
        } else {
            echo "Erro, defina peso e altura primeiro!";
        }
    }

    public function showIMC(): void
    {
        $msg = "\nIMC $this->nome: ";
        if(isset($this->imc)) {
            $msg.= number_format($this->imc, 2);
        } else {
            $msg .= " Erro, calcule o imc primeiro";
        }
        echo $msg;
    }

    public function classifica(): string
    {
        if(!isset($this->imc)){
            return "IMC não calculado";
        }
        if($this->imc < 18.5){
            return "Voce esta abaixo do peso";
        } else if($this->imc <= 24.9){
            return "Voce esta saudavel!";
        } else if($this->imc <= 29.9){
            return "Voce esta com sobrepeso!";
        } else{
            return "Voce esta obeso!";
        }
    }

    public function isNormal(): bool
    {
        if(!isset($this->imc)){
            return false;
        }

        return ($this->imc >= 18.5 && $this->imc <= 24.9);
    }
}

