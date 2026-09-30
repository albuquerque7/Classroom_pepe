<?php
require_once 'usuario.php';

class Aluno extends Usuario {
    public string $curso;

    public function __construct(int $id, string $nome, string $email, string $tipo,int $xp_total = 0) {
        parent::__construct($id, $nome, $email, $tipo);
        $this->xp_total = $xp_total;
    }
}