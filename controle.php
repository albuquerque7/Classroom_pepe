<?php
require_once 'usuario.php';
require_once 'instrutor.php';
require_once 'aluno.php';

function validarlogin(string $email, string $senha, array $usuarios): array{
    foreach ($usuarios as $usuario) {
        if ($usuario->email === $email && $usuario->verificarSenha($senha)){
            return [
                'sucesso' => true,
                'mensagem' => "Login bem-sucedido! Bem-vindo, {usuario->nome}.",
                'usuario' => $usuario 
            ];
        }else{
            return [
                'sucesso' => false,
                'mensagem' => "Email ou senha incorretos."
            ];
        }
    }
}
    return [
        'sucesso' => false,
        'mensagem' => "Erro: Usuário não encontrado.",
        'usuario' => null
    ];

    