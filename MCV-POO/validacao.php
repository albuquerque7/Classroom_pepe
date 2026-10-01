<?php 
    require_once "classes.php";
    require_once "instrutor.php";
    require_once "aluno.php";
    require_once "controle.php";

    $instrutor = new Instrutor(1, "Pedrão", "PedroTechJf@gmail.com", "123456", ["PHP, Programação Orientada a Objetos"]);

    $aluno = new Aluno(2, "Guilherme", "Marlycalcavscodeangelical@gmail.com", "abcdef", 150);

    $usuarios = [$instrutor, $aluno];

    $controller = new UsuarioController;

    $resultadoInstrutor = $controller-> validar_login("PedroTechJf@gmail.com", "123456", $usuarios);

    $resultadoAluno = $controller-> validar_login("ViviMaraca@gmail.com", "abcdef", $usuarios);

    require_once "index.php";
?>