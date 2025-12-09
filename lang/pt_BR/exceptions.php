<?php

declare(strict_types=1);

return [
    /*
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     |--------------------------------------------------------------------------
     | Exception Language Lines
     |--------------------------------------------------------------------------
     |
     | The following language lines are used in exceptions throughout the system.
     | Regardless of where it is placed, a message can be listed here so it is
     | easily found in an intuitive way.
     |
     |--------------------------------------------------------------------------
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
     * |--------------------------------------------------------------------------
     * | Exception Language Lines
     * |--------------------------------------------------------------------------
     * |
     * | The following language lines are used in Exceptions thrown throughout the system.
     * | Regardless where it is placed, a button can be listed here so it is easily
     * | found in a intuitive way.
     * |
     * |--------------------------------------------------------------------------
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
      |--------------------------------------------------------------------------
      | Exception Language Lines
      |--------------------------------------------------------------------------
      |
      | The following language lines are used in Exceptions thrown throughout the system.
      | Regardless where it is placed, a button can be listed here so it is easily
      | found in a intuitive way.
      |
      |--------------------------------------------------------------------------
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
     */

    'backend' => [
        'access' => [
            'roles' => [
                'already_exists' => 'Esse papel já existe. Por favor, escolha um nome diferente.',
                'cant_delete_admin' => 'Você não pode excluir o papel de Administrador.',
                'create_error' => 'Houve um problema ao criar esse papel. Por favor, tente novamente.',
                'delete_error' => 'Houve um problema ao excluir esse papel. Por favor, tente novamente.',
                'has_users' => 'Você não pode excluir um papel com usuários associados..',
                'needs_permission' => 'Você deve selecionar pelo menos uma permissão para este papel.',
                'not_found' => 'Este papel não existe.',
                'update_error' => 'Houve um problema ao atualizar esse papel. Por favor, tente novamente.',
            ],
            'users' => [
                'cant_deactivate_self' => 'Você não pode fazer isso com você mesmo.',
                'cant_delete_self' => 'Você não pode se excluir.',
                'cant_restore' => 'This user is not deleted so it can not be restored.',
                'create_error' => 'Houve um problema ao criar esse usuário. Por favor, tente novamente.',
                'delete_error' => 'Houve um problema ao excluir esse usuário. Por favor, tente novamente.',
                'delete_first' => 'This user must be deleted first before it can be destroyed permanently.',
                'email_error' => 'Esse endereço de e-mail pertence a um usuário diferente.',
                'mark_error' => 'Houve um problema ao atualizar esse usuário. Por favor, tente novamente',
                'not_found' => 'Esse usuário não existe.',
                'restore_error' => 'Houve um problema ao restaurar esse usuário. Por favor, tente novamente.',
                'role_needed_create' => 'Você deve escolher pelo menos uma função.',
                'role_needed' => 'Você deve escolher pelo menos uma função.',
                'update_error' => 'Houve um problema ao atualizar esse usuário. Por favor, tente novamente.',
                'update_password_error' => 'Houve um problema ao alterar a senha do usuário. Por favor, tente novamente.',
            ],
        ],
    ],
    'frontend' => [
        'auth' => [
            'confirmation' => [
                'already_confirmed' => 'Sua conta já está confirmada.',
                'confirm' => 'Confirme sua conta!',
                'created_confirm' => 'Sua conta foi criada com sucesso. Enviamos um e-mail para você confirmar a sua conta.',
                'mismatch' => 'Seu código de confirmação não corresponde.',
                'not_found' => 'Esse código de confirmação não existe.',
                'resend' => 'Sua conta não está confirmada. Por favor, clique no link de confirmação em seu e-mail, ou clique aqui</a> para reenviar o e-mail de confirmação.',
                'success' => 'Sua conta foi confirmada com sucesso!',
                'resent' => 'Um novo e-mail de confirmação foi enviado para você.',
            ],
            'deactivated' => 'Sua conta foi desativada.',
            'email_taken' => 'Esse endereço de e-mail já foi utilizado.',
            'password' => [
                'change_mismatch' => 'Essa não é a sua senha antiga.',
            ],
        ],
    ],
];
