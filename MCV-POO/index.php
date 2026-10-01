<?php

require_once 'classes.php';
require_once 'instrutor.php';
require_once 'aluno.php';
require_once 'controle.php';


$instrutor = new Instrutor(
    1,
    "Pedrão",
    "PedroTechJf@gmail.com",
    ["PHP", "Programação Orientada a Objetos"]
);

$aluno = new Aluno(
    2,
    "Guilherme",
    "Marlycalcvsdecodeangelica1@gmail.com",
    150
);


$instrutor->definirSenha("123456");
$aluno->definirSenha("abcdef");

$usuarios = [$instrutor, $aluno];

$controller = new UsuarioController();

$resultadoInstrutor = $controller->validar_login(
    "PedroTechJf@gmail.com",
    "123456",
    $usuarios
);

$resultadoAluno = $controller->validar_login(
    "Marlycalcvsdecodeangelica1@gmail.com",
    "abcdef",
    $usuarios
);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Teste de Login</title>


</head>

<body>

    <h1>Teste de Login - Usuários</h1>


    <div class="resultado">

        <h2>Instrutor</h2>

        <?php if ($resultadoInstrutor['sucesso']): ?>

            <p class="sucesso">
                <?= htmlspecialchars($resultadoInstrutor['mensagem']) ?>
            </p>

            <p>
                <strong>Saudação:</strong>
                <?= htmlspecialchars($resultadoInstrutor['usuario']->boasvindas()) ?>
            </p>

            <p>
                <strong>Nome:</strong>
                <?= htmlspecialchars($resultadoInstrutor['usuario']->nome) ?>
            </p>

            <p>
                <strong>Email:</strong>
                <?= htmlspecialchars($resultadoInstrutor['usuario']->email) ?>
            </p>

            <p>
                <strong>Tipo:</strong>
                <?= htmlspecialchars($resultadoInstrutor['usuario']->tipo) ?>
            </p>

        <?php else: ?>

            <p class="erro">
                <?= htmlspecialchars($resultadoInstrutor['mensagem']) ?>
            </p>

        <?php endif; ?>

    </div>


    <div class="resultado">

        <h2>Aluno</h2>

        <?php if ($resultadoAluno['sucesso']): ?>

            <p class="sucesso">
                <?= htmlspecialchars($resultadoAluno['mensagem']) ?>
            </p>

            <p>
                <strong>Saudação:</strong>
                <?= htmlspecialchars($resultadoAluno['usuario']->boasvindas()) ?>
            </p>

            <p>
                <strong>Nome:</strong>
                <?= htmlspecialchars($resultadoAluno['usuario']->nome) ?>
            </p>

            <p>
                <strong>Email:</strong>
                <?= htmlspecialchars($resultadoAluno['usuario']->email) ?>
            </p>

            <p>
                <strong>Tipo:</strong>
                <?= htmlspecialchars($resultadoAluno['usuario']->tipo) ?>
            </p>

        <?php else: ?>

            <p class="erro">
                <?= htmlspecialchars($resultadoAluno['mensagem']) ?>
            </p>

        <?php endif; ?>

    </div>

</body>

</html>