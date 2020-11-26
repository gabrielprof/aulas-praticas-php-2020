<?php
abstract class Gestor
{
    public $nome;
    public $cargo;
    public $salario;
}

class Gerente extends Gestor
{
    public $bonus = 0.15;

    public function retornaSalarioComBonus($salario){
        $salarioComBonus = $salario + ($salario * $this->bonus);
        return $salarioComBonus;
    }
}
?>