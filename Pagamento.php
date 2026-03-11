<?php

interface Pagamento
{
    public function pagar($valor);
}

class Cartao implements Pagamento
{

    public function pagar($valor)
    {
        echo "Pagamento de R$ $valor realizado com cartão.";
    }
}

class Boleto implements Pagamento
{

    public function pagar($valor)
    {
        echo "Pagamento de R$ $valor realizado com boleto.";
    }
}
