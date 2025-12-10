<?php

<<<<<<< HEAD
declare(strict_types=1);



=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 5a14301c (.)
=======

>>>>>>> 5a14301c (.)
=======

>>>>>>> 5a14301c (.)
=======

>>>>>>> 5a14301c (.)
=======

>>>>>>> 5a14301c (.)
=======

>>>>>>> 5a14301c (.)
return [
    /*
     * |--------------------------------------------------------------------------
     * | MCP Servers Configuration
     * |--------------------------------------------------------------------------
     * |
     * | Configurazione dei server MCP disponibili nel sistema.
     * | Ogni server ha un comando e argomenti specifici.
     * |
     */
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
return [
    /*
    |--------------------------------------------------------------------------
    | MCP Servers Configuration
    |--------------------------------------------------------------------------
    |
    | Configurazione dei server MCP disponibili nel sistema.
    | Ogni server ha un comando e argomenti specifici.
    |
    */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
declare(strict_types=1);
>>>>>>> laraxot/develop


return [
    /*
     * |--------------------------------------------------------------------------
     * | MCP Servers Configuration
     * |--------------------------------------------------------------------------
     * |
     * | Configurazione dei server MCP disponibili nel sistema.
     * | Ogni server ha un comando e argomenti specifici.
     * |
     */
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop

    'servers' => [
        'filesystem' => [
            'command' => 'npx',
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
            'args' => ['-y', '@modelcontextprotocol/server-filesystem'],
        ],
        'memory' => [
            'command' => 'npx',
            'args' => ['-y', '@modelcontextprotocol/server-memory'],
        ],
        'fetch' => [
            'command' => 'npx',
            'args' => ['-y', '@modelcontextprotocol/server-fetch'],
        ],
        'mysql' => [
            'command' => 'npx',
            'args' => ['-y', '@modelcontextprotocol/server-mysql'],
        ],
        'redis' => [
            'command' => 'npx',
            'args' => ['-y', '@modelcontextprotocol/server-redis'],
        ],
    ],
    /*
     * |--------------------------------------------------------------------------
     * | MCP Model Contexts
     * |--------------------------------------------------------------------------
     * |
     * | Definizione dei contesti per i modelli del sistema.
     * | Ogni contesto definisce trait, relazioni e validazioni richieste.
     * |
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
            'args' => ['-y', '@modelcontextprotocol/server-filesystem']
=======
            'args' => ['-y', '@modelcontextprotocol/server-filesystem'],
>>>>>>> b93ef594b4 (.)
        ],
        'memory' => [
            'command' => 'npx',
            'args' => ['-y', '@modelcontextprotocol/server-memory'],
        ],
        'fetch' => [
            'command' => 'npx',
            'args' => ['-y', '@modelcontextprotocol/server-fetch'],
        ],
        'mysql' => [
            'command' => 'npx',
            'args' => ['-y', '@modelcontextprotocol/server-mysql'],
        ],
        'redis' => [
            'command' => 'npx',
            'args' => ['-y', '@modelcontextprotocol/server-redis'],
        ],
    ],
    /*
<<<<<<< HEAD
=======
            'args' => ['-y', '@modelcontextprotocol/server-filesystem']
        ],
        'memory' => [
            'command' => 'npx',
            'args' => ['-y', '@modelcontextprotocol/server-memory']
        ],
        'fetch' => [
            'command' => 'npx',
            'args' => ['-y', '@modelcontextprotocol/server-fetch']
        ],
        'mysql' => [
            'command' => 'npx',
            'args' => ['-y', '@modelcontextprotocol/server-mysql']
        ],
        'redis' => [
            'command' => 'npx',
            'args' => ['-y', '@modelcontextprotocol/server-redis']
        ]
    ],

    /*
>>>>>>> origin/develop
    |--------------------------------------------------------------------------
    | MCP Model Contexts
    |--------------------------------------------------------------------------
    |
    | Definizione dei contesti per i modelli del sistema.
    | Ogni contesto definisce trait, relazioni e validazioni richieste.
    |
    */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
     * |--------------------------------------------------------------------------
     * | MCP Model Contexts
     * |--------------------------------------------------------------------------
     * |
     * | Definizione dei contesti per i modelli del sistema.
     * | Ogni contesto definisce trait, relazioni e validazioni richieste.
     * |
     */
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop

    'contexts' => [
        'User' => [
            'type' => 'base',
            'traits' => [
                'HasFactory',
                'Notifiable',
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
                'HasParent',
            ],
            'relationships' => [
                'doctor',
                'patient',
            ],
            'table' => 'users',
            'type_column' => 'type',
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
                'HasParent'
=======
                'HasParent',
>>>>>>> b93ef594b4 (.)
            ],
            'relationships' => [
                'doctor',
                'patient',
            ],
            'table' => 'users',
<<<<<<< HEAD
            'type_column' => 'type'
>>>>>>> a12f125f4a (.)
=======
            'type_column' => 'type',
>>>>>>> b93ef594b4 (.)
=======
                'HasParent'
            ],
            'relationships' => [
                'doctor',
                'patient'
            ],
            'table' => 'users',
            'type_column' => 'type'
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
        ],
        'Doctor' => [
            'extends' => 'User',
            'type' => 'child',
            'traits' => [
<<<<<<< HEAD
                'HasParent',
=======
<<<<<<< HEAD
                'HasParent',
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                'HasParent',
=======
                'HasParent'
>>>>>>> a12f125f4a (.)
=======
                'HasParent',
>>>>>>> b93ef594b4 (.)
=======
                'HasParent'
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
            ],
            'context' => 'medical',
            'validations' => [
                'medical_license',
<<<<<<< HEAD
                'specialization',
            ],
=======
<<<<<<< HEAD
                'specialization',
            ],
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                'specialization',
            ],
=======
                'specialization'
            ]
>>>>>>> a12f125f4a (.)
=======
                'specialization',
            ],
>>>>>>> b93ef594b4 (.)
=======
                'specialization'
            ]
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
        ],
        'Patient' => [
            'extends' => 'User',
            'type' => 'child',
            'traits' => [
<<<<<<< HEAD
                'HasParent',
=======
<<<<<<< HEAD
                'HasParent',
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                'HasParent',
=======
                'HasParent'
>>>>>>> a12f125f4a (.)
=======
                'HasParent',
>>>>>>> b93ef594b4 (.)
=======
                'HasParent'
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
            ],
            'context' => 'medical',
            'validations' => [
                'health_insurance',
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
                'medical_history',
            ],
        ],
    ],
    /*
     * |--------------------------------------------------------------------------
     * | MCP Validation Rules
     * |--------------------------------------------------------------------------
     * |
     * | Regole di validazione per i contesti dei modelli.
     * |
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
                'medical_history'
            ]
        ]
=======
                'medical_history',
            ],
        ],
>>>>>>> b93ef594b4 (.)
    ],
    /*
<<<<<<< HEAD
=======
                'medical_history'
            ]
        ]
    ],

    /*
>>>>>>> origin/develop
    |--------------------------------------------------------------------------
    | MCP Validation Rules
    |--------------------------------------------------------------------------
    |
    | Regole di validazione per i contesti dei modelli.
    |
    */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
     * |--------------------------------------------------------------------------
     * | MCP Validation Rules
     * |--------------------------------------------------------------------------
     * |
     * | Regole di validazione per i contesti dei modelli.
     * |
     */
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop

    'validation' => [
        'strict' => true,
        'log_violations' => true,
<<<<<<< HEAD
        'throw_exceptions' => false,
    ],
=======
<<<<<<< HEAD
        'throw_exceptions' => false,
    ],
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'throw_exceptions' => false,
    ],
=======
        'throw_exceptions' => false
    ]
>>>>>>> a12f125f4a (.)
=======
        'throw_exceptions' => false,
    ],
>>>>>>> b93ef594b4 (.)
=======
        'throw_exceptions' => false
    ]
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
];
