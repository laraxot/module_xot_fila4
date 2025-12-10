<?php

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

    'servers' => [
        'filesystem' => [
            'command' => 'npx',
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
    |--------------------------------------------------------------------------
    | MCP Model Contexts
    |--------------------------------------------------------------------------
    |
    | Definizione dei contesti per i modelli del sistema.
    | Ogni contesto definisce trait, relazioni e validazioni richieste.
    |
    */
     * |--------------------------------------------------------------------------
     * | MCP Model Contexts
     * |--------------------------------------------------------------------------
     * |
     * | Definizione dei contesti per i modelli del sistema.
     * | Ogni contesto definisce trait, relazioni e validazioni richieste.
     * |
     */

    'contexts' => [
        'User' => [
            'type' => 'base',
            'traits' => [
                'HasFactory',
                'Notifiable',
                'HasParent',
            ],
            'relationships' => [
                'doctor',
                'patient',
            ],
            'table' => 'users',
            'type_column' => 'type',
            ],
            'relationships' => [
                'doctor',
                'patient',
            ],
            'table' => 'users',
            'type_column' => 'type'
            'type_column' => 'type',
                'HasParent'
            ],
            'relationships' => [
                'doctor',
                'patient'
            ],
            'table' => 'users',
            'type_column' => 'type'
        ],
        'Doctor' => [
            'extends' => 'User',
            'type' => 'child',
            'traits' => [
                'HasParent',
                'HasParent',
                'HasParent',
                'HasParent',
                'HasParent'
            ],
            'context' => 'medical',
            'validations' => [
                'medical_license',
                'specialization',
            ],
                'specialization',
            ],
                'specialization',
            ],
                'specialization',
            ],
                'specialization'
            ]
        ],
        'Patient' => [
            'extends' => 'User',
            'type' => 'child',
            'traits' => [
                'HasParent',
                'HasParent',
                'HasParent',
                'HasParent',
                'HasParent'
            ],
            'context' => 'medical',
            'validations' => [
                'health_insurance',
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
    ],
    /*
    |--------------------------------------------------------------------------
    | MCP Validation Rules
    |--------------------------------------------------------------------------
    |
    | Regole di validazione per i contesti dei modelli.
    |
    */
     * |--------------------------------------------------------------------------
     * | MCP Validation Rules
     * |--------------------------------------------------------------------------
     * |
     * | Regole di validazione per i contesti dei modelli.
     * |
     */

    'validation' => [
        'strict' => true,
        'log_violations' => true,
        'throw_exceptions' => false,
    ],
        'throw_exceptions' => false,
    ],
        'throw_exceptions' => false,
    ],
        'throw_exceptions' => false,
    ],
        'throw_exceptions' => false
    ]
];
