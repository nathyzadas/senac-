<?php

    //parent pega a constante da class pai e o self da class atual

    class ValorPi{
        const pi = 3.14;
    }

    class Circunferencia extends ValorPi {
        public function calcularCircunferencia($r){
            $circunferencia = 2 * $r * self::pi;
            echo "<hr> Valor da Circunferência de raio $r é $circunferencia";
        }
    }
    
    
    Class Area extends ValorPi {
        const pi = 5; # criei um valor errado aqui para mostrar o uso do parent
        public function calcularArea($r){
        $area= parent::pi * pow($r,2);
        echo "<hr> Valor da Área de raio $r é $area";
        }
    }
    
    $circ = new Circunferencia;
    $circ->calcularCircunferencia(5);
    $area = new Area;
    $area->calcularArea(5);

?>