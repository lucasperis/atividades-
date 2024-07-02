<?php
    class conta{

        public $saldo = 0;

        function depositar($valor) {
            $this->$saldo += $valor;
        }

        function sacar($valor) {

        }
    
    }

    class contacorrente extends conta {

        function transparente(contadestino, $valor){
            $this->saldo -= $valor
        }
    }

    $novaconta1 = new conta corrente();
    $novaconta2 = new conta contacorrente();
    $novaconta1->transferir( 'xxx-xxx' , 500):
    $novaconta2->depositar(500);

     echo "soldo:" . $novaconta1->saldo;
     echo "soldo"  . $novaconta2->saldo
?>