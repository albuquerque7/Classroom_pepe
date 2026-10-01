<?php

require_once 'classes.php';
require_once 'instrutor.php';
require_once 'aluno.php';

class UsuarioController {

    public function validar_login(string $email, string $senha, array $usuarios): array {

        foreach ($usuarios as $usuario) {

            if ($usuario->email === $email) {

                if ($usuario->verificarSenha($senha)) {
                    return [
                        'sucesso' => true,
                        'mensagem' => "Login bem-sucedido! Bem-vindo, {$usuario->nome}.",
                        'usuario' => $usuario
                    ];
                }

                return [
                    'sucesso' => false,
                    'mensagem' => "Email ou senha incorretos.",
                    'usuario' => null
                ];
            }
        }

        return [
            'sucesso' => false,
            'mensagem' => "Erro: Usuário não encontrado.",
            'usuario' => null
        ];
    }
}
    