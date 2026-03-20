<?php

class Usuario {
    private $email;
    private $senha;

    public function __construct($email, $senha) {
        $this->email = $email;
        $this->senha = $senha;
    }

    public function login($email, $senha) {
        if ($email === $this->email && $senha === $this->senha) {
            return "Login realizado com sucesso!";
        } else {
            return "Email ou senha inválidos!";
        }
    }
}