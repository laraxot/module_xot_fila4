<?php

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
declare(strict_types=1);



declare(strict_types=1);






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
declare(strict_types=1);


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
<<<<<<< HEAD
=======
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
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)

    'servers' => [
        'filesystem' => [
            'command' => 'npx',
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
            'args' => ['-y', '@modelcontextprotocol/server-filesystem']
=======
            'args' => ['-y', '@modelcontextprotocol/server-filesystem'],
>>>>>>> b93ef594b4 (.)
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
=======
=======
>>>>>>> 218dfed3 (.)
=======
    /*
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
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

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
    /*
=======
    /*
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
=======
    /*
>>>>>>> 7468a7d2 (.)
    |--------------------------------------------------------------------------
    | MCP Model Contexts
    |--------------------------------------------------------------------------
    |
    | Definizione dei contesti per i modelli del sistema.
    | Ogni contesto definisce trait, relazioni e validazioni richieste.
    |
    */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
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
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)

    'contexts' => [
        'User' => [
            'type' => 'base',
            'traits' => [
                'HasFactory',
                'Notifiable',
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
                'HasParent',
            ],
            'relationships' => [
                'doctor',
                'patient',
            ],
            'table' => 'users',
            'type_column' => 'type',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
                'HasParent'
=======
                'HasParent',
>>>>>>> b93ef594b4 (.)
>>>>>>> ce6fc085 (.)
            ],
            'relationships' => [
                'doctor',
                'patient',
            ],
            'table' => 'users',
<<<<<<< HEAD
            'type_column' => 'type'
            'type_column' => 'type',
=======
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
            'type_column' => 'type'
>>>>>>> a12f125f4a (.)
=======
            'type_column' => 'type',
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ce6fc085 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
                'HasParent'
            ],
            'relationships' => [
                'doctor',
                'patient'
            ],
            'table' => 'users',
            'type_column' => 'type'
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
        ],
        'Doctor' => [
            'extends' => 'User',
            'type' => 'child',
            'traits' => [
<<<<<<< HEAD
                'HasParent',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                'HasParent',
                'HasParent',
                'HasParent',
                'HasParent'
=======
=======
                'HasParent'
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
                'HasParent',
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
                'HasParent',
=======
                'HasParent'
>>>>>>> f1d4085 (.)
=======
                'HasParent',
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
            ],
            'context' => 'medical',
            'validations' => [
                'medical_license',
<<<<<<< HEAD
                'specialization',
            ],
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                'specialization',
            ],
                'specialization',
            ],
                'specialization',
            ],
                'specialization'
            ]
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
                'specialization',
            ],
>>>>>>> 7468a7d2 (.)
=======
                'specialization'
            ]
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 7468a7d2 (.)
=======
                'specialization',
            ],
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
        ],
        'Patient' => [
            'extends' => 'User',
            'type' => 'child',
            'traits' => [
<<<<<<< HEAD
                'HasParent',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                'HasParent',
                'HasParent',
                'HasParent',
                'HasParent'
=======
=======
                'HasParent'
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
                'HasParent',
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
                'HasParent',
=======
                'HasParent'
>>>>>>> f1d4085 (.)
=======
                'HasParent',
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
            ],
            'context' => 'medical',
            'validations' => [
                'health_insurance',
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    ],
=======
=======
>>>>>>> 218dfed3 (.)
=======
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
>>>>>>> ce6fc085 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
                'medical_history'
            ]
        ]
    ],

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
    /*
=======
    /*
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
=======
    /*
>>>>>>> 7468a7d2 (.)
    |--------------------------------------------------------------------------
    | MCP Validation Rules
    |--------------------------------------------------------------------------
    |
    | Regole di validazione per i contesti dei modelli.
    |
    */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> ce6fc085 (.)
     * |--------------------------------------------------------------------------
     * | MCP Validation Rules
     * |--------------------------------------------------------------------------
     * |
     * | Regole di validazione per i contesti dei modelli.
     * |
     */
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)

    'validation' => [
        'strict' => true,
        'log_violations' => true,
<<<<<<< HEAD
        'throw_exceptions' => false,
    ],
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'throw_exceptions' => false,
    ],
        'throw_exceptions' => false,
    ],
        'throw_exceptions' => false,
    ],
        'throw_exceptions' => false
    ]
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'throw_exceptions' => false,
    ],
>>>>>>> 7468a7d2 (.)
=======
        'throw_exceptions' => false
    ]
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 7468a7d2 (.)
=======
        'throw_exceptions' => false,
    ],
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
];
