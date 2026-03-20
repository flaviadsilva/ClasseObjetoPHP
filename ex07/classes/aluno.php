<?php

class Aluno {
    private $nome;
    private $nota;

    // SETTERS
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setNota($nota) {
        $this->nota = $nota;
    }

    // GETTERS
    public function getNome() {
        return $this->nome;
    }

    public function getNota() {
        return $this->nota;
    }
}