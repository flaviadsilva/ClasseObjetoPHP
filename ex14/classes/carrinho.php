<?php

class Carrinho {
    public $produtos = [];

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
}