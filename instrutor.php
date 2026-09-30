<?php
require_once 'usuario.php';

class Instrutor extends Usuario {
    public string $especialidade;

    public function __construct(int $id, string $nome, string $email, string $tipo, array $especialidade){
        parent::__construct($id, $nome, $email, $tipo):
        $this->especialidade = $especialmente;
    }

    public function tipo_formato(): string {
        return "instrutor - {$this->especialidades}";
    }
}