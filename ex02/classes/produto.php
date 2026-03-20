<?php

class Produto {
    public $nome;
    public $preco;

    public function exibir() {
        return "Produto: " . $this->nome . " - R$ " . $this->preco;
    }
}