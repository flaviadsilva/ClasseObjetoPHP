<?php

class Pessoa {
    public $nome;

    public function apresentar() {
        return "Olá, meu nome é " . $this->nome;
    }
}