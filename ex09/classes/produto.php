<?php

class Produto {
    private $nome;
    private $preco;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setPreco($preco) {
        if ($preco < 0) {
            return "Erro: preço não pode ser negativo!";
        }
        $this->preco = $preco;
        return null;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getPreco() {
        return $this->preco;
    }
}