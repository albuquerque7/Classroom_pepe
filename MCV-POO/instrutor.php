<?php
require_once 'classes.php';

class Instrutor extends Usuario {
    public array $especialidade = [];

    public function __construct(int $id, string $nome, string $email, array $especialidade = []){
        parent::__construct($id, $nome, $email, "instrutor");
        $this->especialidade = $especialidade;
    }

    public function tipo_formato(): string {
        return "instrutor - {$this->especialidade}";
    }
}