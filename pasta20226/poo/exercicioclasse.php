<?php

class Funcionario{
    private public $nome;
    private public $cpf;
    private public $departamento;
    private public $dataAdimissao;
    private public $salario;
    private public $cargo;
    private public $aumento;
    private public $salariofinal;

    public function alterarSalario(){
        $this->aumento = $this->salario*0.15;
        $this->salariofinal = $this->salario + $this->aumento;
        echo ("<br>".$this->nome." recebeu um aumento de ".$this->aumento.". Seu novo salário é ".$this->salariofinal);
    }
}

$funcionario = new Funcionario();
$funcionario->nome = "Elias Pereira Santos";
$funcionario->cpf = "123.456.789-10";
$funcionario->departamento = "ADM";
$funcionario->dataAdimissao = "10/02/2023";
$funcionario->salario = 5000.00;
$funcionario->cargo = "Gerente";



echo "Funcionário: ".$funcionario->nome;
echo "<br>CPF: ".$funcionario->cpf;
echo "<br>Departamento: ".$funcionario->departamento;
echo "<br>Data Adimissão: ".$funcionario->dataAdimissao;
echo "<br>Salário: ".$funcionario->salario;
echo "<br>Cargo: ".$funcionario->cargo;

echo "<br>";
$funcionario->alterarSalario();


?>