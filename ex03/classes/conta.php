<?php

class conta {
    public $saldo;

    public function verSaldo() {
        return "Saldo atual: R$ " . $this->saldo;
    }
}