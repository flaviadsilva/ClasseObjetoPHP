<?php

class Pessoa {
    public $nome;
    public $idade;

    // CONSTRUTOR
    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function apresentar() {
        return "Nome: " . $this->nome . " | Idade: " . $this->idade;
    }
}