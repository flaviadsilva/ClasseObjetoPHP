<?php

class Carro {
    public $marca;
    public $velocidade = 0;

    public function acelerar() {
        $this->velocidade += 10;
    }
}