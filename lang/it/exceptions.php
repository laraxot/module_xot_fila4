<?php

declare(strict_types=1);

return [
    /*
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 8b18e4bff (.)
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
<<<<<<< HEAD
>>>>>>> 285375c74 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
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
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
>>>>>>> 8b18e4bff (.)
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
=======
=======
>>>>>>> 8b18e4bff (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
>>>>>>> 285375c74 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)

    'backend' => [
        'access' => [
            'roles' => [
                'already_exists' => 'Questo ruolo esiste già. Si prega di scegliere un nome diverso.',
                'cant_delete_admin' => 'Non è possibile eliminare il ruolo di Amministratore.',
                'create_error' => "C'è stato un problema durante la creazione di questo ruolo. Si prega di riprovare più tardi.",
                'delete_error' => "C'è stato un problema durante l'eliminazione di questo ruolo. Si prega di riprovare più tardi.",
                'has_users' => 'Non è possibile cancellare un ruolo associato a degli utenti.',
                'needs_permission' => 'Bisogna selezionare almeno un permesso per questo ruolo.',
                'not_found' => 'Questo ruolo non esiste.',
                'update_error' => "C'è stato un problema durante l'aggiornamento di questo ruolo. Si prega di riprovare più tardi.",
            ],
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
<<<<<<< HEAD
=======
>>>>>>> 8b18e4bff (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
>>>>>>> 285375c74 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
            'users' => [
                'cant_deactivate_self' => 'Non puoi eseguire questa operazione su te stesso.',
                'cant_delete_self' => 'Non puoi cancellare te stesso.',
                'cant_restore' => 'This user is not deleted so it can not be restored.',
                'create_error' => "C'è stato un problema durante la creazione dell'utente. Si prega di riprovare.",
                'delete_error' => "C'è stato un problema durante l'eliminazione dell'utente. Si prega di riprovare.",
                'delete_first' => 'This user must be deleted first before it can be destroyed permanently.',
                'email_error' => 'Questo indirizzo e-mail appartiene ad un altro utente.',
                'mark_error' => "C'è stato un problema durante l'aggiornamento dell'utente. Si prega di riprovare.",
                'not_found' => 'Questo utente non esiste.',
                'restore_error' => "C'è stato un problema durante il ripristino dell'utente. Si prega di riprovare.",
                'role_needed_create' => 'Devi scegliere almeno un ruolo.',
                'role_needed' => 'Devi scegliere almeno un ruolo',
                'update_error' => "C'è stato un problema durante l'aggiornamento dell'utente. Si prega di riprovare",
                'update_password_error' => "C'è stato un problema durante il cambio di password per l'utente. Si prega di riprovare.",
            ],
        ],
    ],
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
<<<<<<< HEAD
=======
>>>>>>> 8b18e4bff (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
>>>>>>> 285375c74 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
    'frontend' => [
        'auth' => [
            'confirmation' => [
                'already_confirmed' => 'Il tuo account è già confermato',
                'confirm' => 'Conferma il tuo account!',
                'created_confirm' => "Il tuo account è stato creato con successo. Ti abbiamo inviato un'email per confermare il tuo account.",
                'mismatch' => 'Il tuo codice di conferma non corrisponde',
                'not_found' => 'Questo codice di conferma non esiste.',
                'resend' => 'Il tuo account non è confermato. Per cortesia clicca sul link di conferma nell\'email che ti abbiamo mandato, o <a href="'.route('frontend.auth.account.confirm.resend', ':user_id').'">clicca qui</a> per rimandare l\'email di conferma.',
                'success' => 'Il tuo account è stato confermato con successo!',
                'resent' => "Una nuova e-mail di conferma è stata inviata all'indirizzo registrato.",
            ],
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

            'deactivated' => 'Il tuo account è stato disattivato.',
            'email_taken' => 'Questo indirizzo e-mail è stato già utilizzato.',

=======
<<<<<<< HEAD
            'deactivated' => 'Il tuo account è stato disattivato.',
            'email_taken' => 'Questo indirizzo e-mail è stato già utilizzato.',
=======
            'deactivated' => 'Il tuo account è stato disattivato.',
            'email_taken' => 'Questo indirizzo e-mail è stato già utilizzato.',
>>>>>>> 8b18e4bff (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
            'deactivated' => 'Il tuo account è stato disattivato.',
            'email_taken' => 'Questo indirizzo e-mail è stato già utilizzato.',
=======

            'deactivated' => 'Il tuo account è stato disattivato.',
            'email_taken' => 'Questo indirizzo e-mail è stato già utilizzato.',

>>>>>>> f1d4085 (.)
=======
            'deactivated' => 'Il tuo account è stato disattivato.',
            'email_taken' => 'Questo indirizzo e-mail è stato già utilizzato.',
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
            'deactivated' => 'Il tuo account è stato disattivato.',
            'email_taken' => 'Questo indirizzo e-mail è stato già utilizzato.',
>>>>>>> 285375c74 (.)
=======
=======
            'deactivated' => 'Il tuo account è stato disattivato.',
            'email_taken' => 'Questo indirizzo e-mail è stato già utilizzato.',
>>>>>>> 300ef70 (.)
>>>>>>> 8b18e4bff (.)
            'password' => [
                'change_mismatch' => 'Questa non è la tua vecchia password.',
            ],
        ],
    ],
];
