<?php
require_once 'classes.php';

class Aluno extends Usuario {
    public int $xp_total = 0;

    public function __construct(int $id, string $nome, string $email,int $xp_total = 0) {
        parent::__construct($id, $nome, $email, "aluno");
        $this->xp_total = $xp_total;
    }
}