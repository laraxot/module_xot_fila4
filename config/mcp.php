<?php

<<<<<<< HEAD
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

    'servers' => [
        'filesystem' => [
            'command' => 'npx',
<<<<<<< HEAD
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
=======
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

>>>>>>> 2f3197ab (.)
    /*
    |--------------------------------------------------------------------------
    | MCP Model Contexts
    |--------------------------------------------------------------------------
    |
    | Definizione dei contesti per i modelli del sistema.
    | Ogni contesto definisce trait, relazioni e validazioni richieste.
    |
    */
<<<<<<< HEAD
     * |--------------------------------------------------------------------------
     * | MCP Model Contexts
     * |--------------------------------------------------------------------------
     * |
     * | Definizione dei contesti per i modelli del sistema.
     * | Ogni contesto definisce trait, relazioni e validazioni richieste.
     * |
     */
=======
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)

    'contexts' => [
        'User' => [
            'type' => 'base',
            'traits' => [
                'HasFactory',
                'Notifiable',
<<<<<<< HEAD
                'HasParent',
            ],
            'relationships' => [
                'doctor',
                'patient',
            ],
            'table' => 'users',
            'type_column' => 'type',
<<<<<<< HEAD
            ],
            'relationships' => [
                'doctor',
                'patient',
            ],
            'table' => 'users',
            'type_column' => 'type'
            'type_column' => 'type',
=======
=======
>>>>>>> 2f3197ab (.)
                'HasParent'
            ],
            'relationships' => [
                'doctor',
                'patient'
            ],
            'table' => 'users',
            'type_column' => 'type'
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
        ],
        'Doctor' => [
            'extends' => 'User',
            'type' => 'child',
            'traits' => [
<<<<<<< HEAD
                'HasParent',
<<<<<<< HEAD
                'HasParent',
                'HasParent',
                'HasParent',
                'HasParent'
=======
=======
                'HasParent'
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
            ],
            'context' => 'medical',
            'validations' => [
                'medical_license',
<<<<<<< HEAD
                'specialization',
            ],
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
                'specialization'
            ]
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
        ],
        'Patient' => [
            'extends' => 'User',
            'type' => 'child',
            'traits' => [
<<<<<<< HEAD
                'HasParent',
<<<<<<< HEAD
                'HasParent',
                'HasParent',
                'HasParent',
                'HasParent'
=======
=======
                'HasParent'
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
            ],
            'context' => 'medical',
            'validations' => [
                'health_insurance',
<<<<<<< HEAD
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
    ],
=======
=======
                'medical_history'
            ]
        ]
    ],

>>>>>>> 2f3197ab (.)
    /*
    |--------------------------------------------------------------------------
    | MCP Validation Rules
    |--------------------------------------------------------------------------
    |
    | Regole di validazione per i contesti dei modelli.
    |
    */
<<<<<<< HEAD
     * |--------------------------------------------------------------------------
     * | MCP Validation Rules
     * |--------------------------------------------------------------------------
     * |
     * | Regole di validazione per i contesti dei modelli.
     * |
     */
=======
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)

    'validation' => [
        'strict' => true,
        'log_violations' => true,
<<<<<<< HEAD
        'throw_exceptions' => false,
    ],
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
        'throw_exceptions' => false
    ]
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
];
