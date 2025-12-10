<?php

declare(strict_types=1);

return [
    /*
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 358ba79a7 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
     * |--------------------------------------------------------------------------
     * | Exception Language Lines
     * |--------------------------------------------------------------------------
     * |
     * | The following language lines are used in Exceptions thrown throughout the system.
     * | Regardless where it is placed, a button can be listed here so it is easily
     * | found in a intuitive way.
     * |
     */
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
=======
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 358ba79a7 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
=======
=======
>>>>>>> dbce41cec (.)
=======
>>>>>>> 358ba79a7 (.)
    |--------------------------------------------------------------------------
    | Exception Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in Exceptions thrown throughout the system.
    | Regardless where it is placed, a button can be listed here so it is easily
    | found in a intuitive way.
    |
    */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 358ba79a7 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)

    'backend' => [
        'access' => [
            'roles' => [
                'already_exists' => 'Este Rol ya existe. Por favor, especifique un nombre de Rol diferente.',
                'cant_delete_admin' => 'No puede eliminar el Rol de Administrador.',
                'create_error' => 'Hubo un problema al crear el Rol. Intentelo de nuevo.',
                'delete_error' => 'Hubo un problema al eliminar el Rol. Intentelo de nuevo.',
                'has_users' => 'No puede eliminar un Rol que tenga usuarios asignados.',
                'needs_permission' => 'Debe seleccionar al menos un permiso para cada Rol.',
                'not_found' => 'El Rol requerido no existe.',
                'update_error' => 'Hubo un problema al modificar el Rol. Intentelo de nuevo.',
            ],
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

=======
=======
>>>>>>> 218dfed3 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
=======

>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 358ba79a7 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
=======

>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
=======

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
            'users' => [
                'cant_deactivate_self' => 'No puede desactivarse a sí mismo.',
                'cant_delete_self' => 'No puede eliminarse usted mismo.',
                'cant_restore' => 'This user is not deleted so it can not be restored.',
                'create_error' => 'Hubo un problema al crear el Usuario. Intentelo de nuevo.',
                'delete_error' => 'Hubo un problema al eliminar el Usuario. Intentelo de nuevo.',
                'delete_first' => 'This user must be deleted first before it can be destroyed permanently.',
                'email_error' => 'Ya hay un Usuario con la dirección de E-Mail especificada.',
                'mark_error' => 'Hubo un problema al modificar el Usuario. Intentelo de nuevo.',
                'not_found' => 'El Usuario requerido no existe.',
                'restore_error' => 'Hubo un problema al restaurar el Usuario. Intentelo de nuevo.',
                'role_needed_create' => 'Los Usuarios deben tener al menos un Rol.',
                'role_needed' => 'Debes elegir al menos un Rol.',
                'update_error' => 'Hubo un problema al modificar el Usuario. Intentelo de nuevo.',
                'update_password_error' => 'Hubo un problema al cambiar la contraseña. Intentelo de nuevo.',
            ],
        ],
    ],
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

=======
=======
>>>>>>> 218dfed3 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
=======

>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 358ba79a7 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
=======

>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
=======

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> aba62c408 (.)
    'frontend' => [
        'auth' => [
            'confirmation' => [
                'already_confirmed' => 'Su cuenta ya ha sido verificada.',
                'confirm' => 'Revise su correo y verifique su cuenta!',
                'created_confirm' => 'Su cuenta ha sido creada. Le hemos enviado un e-mail con un enlace de verificación.',
                'mismatch' => 'El código de verificación no coincide.',
                'not_found' => 'El código de verificación especificado no existe.',
                'resend' => 'Su cuenta no ha sido verificada todavía. Por favor, revise su e-mail, o pulse aquí</a> para re-enviar el correo de verificación.',
                'success' => 'Su cuenta ha sido verificada satisfactoriamente!',
                'resent' => 'Un nuevo correo de verificación le ha sido enviado.',
            ],
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'deactivated' => 'Su cuenta ha sido desactivada.',
            'email_taken' => 'El correo especificado ya está registrado.',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 7468a7d2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6be8834c2 (.)
            'deactivated' => 'Su cuenta ha sido desactivada.',
            'email_taken' => 'El correo especificado ya está registrado.',
=======
<<<<<<< HEAD
            'deactivated' => 'Su cuenta ha sido desactivada.',
            'email_taken' => 'El correo especificado ya está registrado.',
=======
>>>>>>> 5cf46378 (.)
=======
            'deactivated' => 'Su cuenta ha sido desactivada.',
            'email_taken' => 'El correo especificado ya está registrado.',
=======
<<<<<<< HEAD
>>>>>>> 358ba79a7 (.)
<<<<<<< HEAD
<<<<<<< HEAD
            'deactivated' => 'Su cuenta ha sido desactivada.',
            'email_taken' => 'El correo especificado ya está registrado.',
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
=======
            'deactivated' => 'Su cuenta ha sido desactivada.',
            'email_taken' => 'El correo especificado ya está registrado.',
=======
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> origin/develop
>>>>>>> 358ba79a7 (.)

            'deactivated' => 'Su cuenta ha sido desactivada.',
            'email_taken' => 'El correo especificado ya está registrado.',

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'deactivated' => 'Su cuenta ha sido desactivada.',
            'email_taken' => 'El correo especificado ya está registrado.',
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 6be8834c2 (.)
=======
            'deactivated' => 'Su cuenta ha sido desactivada.',
            'email_taken' => 'El correo especificado ya está registrado.',
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 358ba79a7 (.)
>>>>>>> a12f125f4a (.)
=======
            'deactivated' => 'Su cuenta ha sido desactivada.',
            'email_taken' => 'El correo especificado ya está registrado.',
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> d2b0a27 (.)
=======
            'deactivated' => 'Su cuenta ha sido desactivada.',
            'email_taken' => 'El correo especificado ya está registrado.',
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> 358ba79a7 (.)
=======
            'deactivated' => 'Su cuenta ha sido desactivada.',
            'email_taken' => 'El correo especificado ya está registrado.',
>>>>>>> aba62c408 (.)
            'password' => [
                'change_mismatch' => 'La contraseña antigua no coincide.',
            ],
        ],
    ],
];
