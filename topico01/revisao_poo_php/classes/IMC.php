<?php
include_once "Pessoa.php";

class IMC{

    public static function toString() { 
            return self::class;//$this

     }

    public static function calc(Pessoa $objPessoa){
        echo "\n Calculando o IMC de $objPessoa->nome\n";
        if (
			!is_numeric($objPessoa->getAltura()) // nao se usa this aqui. Arrumar
			|| !is_numeric($objPessoa->getPeso())
			|| $objPessoa->getAltura() <= 0
			|| $objPessoa->getPeso() <= 0
		) {
			echo "\nIMC $objPessoa->nome: Erro, informe peso e altura corretamente.\n";
            return;
        }

        $objPessoa->setImc($objPessoa->getPeso() / $objPessoa->getAltura() ** 2);
		echo "\nO IMC do $objPessoa->nome é: " . number_format($objPessoa->getImc(), 2) . "\n";
        return;
    }

    public static function classifica(Pessoa $objPessoa){
        
        if($objPessoa->getImc() < 18.5){
            echo "\n De acordo com o IMC, voce esta Abaixo do peso.\n";
        }
        if($objPessoa->getImc() > 30){
            echo "\n De acordo com o IMC, voce esta Obeso.\n";
        }
        if($objPessoa->getImc() >= 18.5 && $objPessoa->getImc() <= 24.9){
            echo "\n De acordo com o IMC, voce esta Saudavel.\n";
        }
        if($objPessoa->getImc() >= 25 && $objPessoa->getImc() <= 29.9){
            echo "\n De acordo com o IMC, voce esta om Sobrepeso.\n";
        }

        return self::calc($objPessoa);
    }
}