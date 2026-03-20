<?php

class Pedido {
    public $cliente;
    public $produtos = [];

    public function __construct($cliente) {
        $this->cliente = $cliente;
    }

    public function adicionarProduto($produto) {
        $this->produtos[] = $produto;
    }

    public function calcularTotal() {
        $total = 0;

        foreach ($this->produtos as $produto) {
            $total += $produto->preco;
        }

        return $total;
    }

    public function resumo() {
        $resumo = "Cliente: " . $this->cliente->nome . "<br>";
        $resumo .= "Produtos:<br>";

        foreach ($this->produtos as $produto) {
            $resumo .= "- " . $produto->nome . " (R$ " . $produto->preco . ")<br>";
        }

        $resumo .= "<strong>Total: R$ " . $this->calcularTotal() . "</strong>";

        return $resumo;
    }
}