<?php

class Cliente {

    public $cod;
    public $nome;
    public $cpf;
    public $endereco;
    public $cidade;
    public $telefone;

    public function __construct($cod ,$nome, $cpf, $endereco, $cidade, $telefone){

        $this->cod = $cod;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
        $this->cidade = $cidade;
        $this->telefone = $telefone;

    }

}