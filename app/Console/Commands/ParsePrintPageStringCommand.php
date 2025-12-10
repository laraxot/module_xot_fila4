<?php

declare(strict_types=1);

/**
 * @see ---
 */

namespace Modules\Xot\Console\Commands;

use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
use Exception;
use Exception;
=======
=======
<<<<<<< HEAD
use Exception;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
use Illuminate\Console\Command;
use Modules\Xot\Actions\ParsePrintPageStringAction;

class ParsePrintPageStringCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'xot:parse-print-page {str}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = ' esplode';

    /**
     * Create a new command instance.
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> 7468a7d2 (.)
     *
     * @return void
     */
    
<<<<<<< HEAD
    
     */
     *
     * @return void
     */
    
    
=======
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
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
    
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/develop
<<<<<<< HEAD
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
=======
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
    public function __construct()
    {
        parent::__construct();
    }
<<<<<<< HEAD
=======
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 2f3197ab (.)
    
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
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
>>>>>>> 218dfed3 (.)
    
    
    
<<<<<<< HEAD
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
    
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
    
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
    
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
    
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $str = $this->argument('str');
<<<<<<< HEAD
<<<<<<< HEAD
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
        if (! is_string($str)) {
        if (!is_string($str)) {
        if (!is_string($str)) {
        if (!is_string($str)) {
        if (! is_string($str)) {
        if (! is_string($str)) {
        if (! is_string($str)) {
        if (! is_string($str)) {
        if (!is_string($str)) {
        if (! is_string($str)) {
        if (!is_string($str)) {
<<<<<<< HEAD
<<<<<<< HEAD
        if (!is_string($str)) {
        if (!is_string($str)) {
        if (! is_string($str)) {
        if (!is_string($str)) {
        if (!is_string($str)) {
        if (!is_string($str)) {
        if (!is_string($str)) {
        if (! is_string($str)) {
        if (!is_string($str)) {
        if (!is_string($str)) {
        if (!is_string($str)) {
        if (!is_string($str)) {
        if (! is_string($str)) {
        if (!is_string($str)) {
        if (!is_string($str)) {
        if (!is_string($str)) {
        if (! is_string($str)) {
        if (!is_string($str)) {
        if (!is_string($str)) {
        if (!is_string($str)) {
        if (!is_string($str)) {
        if (! is_string($str)) {
        if (!is_string($str)) {
        if (! is_string($str)) {
        if (!is_string($str)) {
        if (!is_string($str)) {
        if (! is_string($str)) {
        if (!is_string($str)) {
        if (!is_string($str)) {
        if (!is_string($str)) {
        if (! is_string($str)) {
        if (!is_string($str)) {
        if (!is_string($str)) {
        if (!is_string($str)) {
        if (! is_string($str)) {
        if (! is_string($str)) {
=======
=======
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
        if (! is_string($str)) {
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
        if (!is_string($str)) {
>>>>>>> 5a14301c (.)
=======
        if (!is_string($str)) {
>>>>>>> 3fbbf1f5 (.)
=======
        if (!is_string($str)) {
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5cf46378 (.)
        if (! is_string($str)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
        if (! is_string($str)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
        if (!is_string($str)) {
=======
        if (! is_string($str)) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
        if (!is_string($str)) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        if (!is_string($str)) {
>>>>>>> 3fbbf1f5 (.)
=======
        if (!is_string($str)) {
=======
        if (! is_string($str)) {
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
        if (!is_string($str)) {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
        if (!is_string($str)) {
>>>>>>> 3310e9c6 (.)
=======
        if (!is_string($str)) {
>>>>>>> 5a14301c (.)
=======
        if (!is_string($str)) {
=======
        if (! is_string($str)) {
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
        if (!is_string($str)) {
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
        if (!is_string($str)) {
>>>>>>> 218dfed3 (.)
>>>>>>> 3fbbf1f5 (.)
=======
        if (!is_string($str)) {
=======
        if (! is_string($str)) {
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        if (!is_string($str)) {
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
        if (!is_string($str)) {
>>>>>>> 3310e9c6 (.)
<<<<<<< HEAD
>>>>>>> a67e542f (.)
=======
=======
=======
>>>>>>> b7afadf9 (.)
=======
        if (!is_string($str)) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
            throw new Exception('argument str must be a string');
<<<<<<< HEAD
<<<<<<< HEAD
        if (! is_string($str)) {
        if (!is_string($str)) {
        if (!is_string($str)) {
        if (!is_string($str)) {
        if (! is_string($str)) {
        if (! is_string($str)) {
        if (! is_string($str)) {
        if (! is_string($str)) {
        if (!is_string($str)) {
        if (! is_string($str)) {
        if (!is_string($str)) {
        if (!is_string($str)) {
        if (!is_string($str)) {
        if (! is_string($str)) {
        if (!is_string($str)) {
        if (!is_string($str)) {
        if (!is_string($str)) {
        if (!is_string($str)) {
        if (! is_string($str)) {
        if (!is_string($str)) {
        if (!is_string($str)) {
        if (!is_string($str)) {
        if (!is_string($str)) {
        if (! is_string($str)) {
        if (!is_string($str)) {
        if (!is_string($str)) {
        if (!is_string($str)) {
        if (! is_string($str)) {
        if (!is_string($str)) {
        if (!is_string($str)) {
        if (!is_string($str)) {
        if (!is_string($str)) {
        if (! is_string($str)) {
        if (!is_string($str)) {
        if (! is_string($str)) {
        if (!is_string($str)) {
        if (!is_string($str)) {
        if (! is_string($str)) {
        if (!is_string($str)) {
        if (!is_string($str)) {
        if (!is_string($str)) {
        if (! is_string($str)) {
        if (!is_string($str)) {
        if (!is_string($str)) {
        if (!is_string($str)) {
        if (! is_string($str)) {
        if (! is_string($str)) {
        if (!is_string($str)) {
        if (!is_string($str)) {
        if (! is_string($str)) {
        if (!is_string($str)) {
        if (!is_string($str)) {
            throw new Exception('argument str must be a string');
        if (!is_string($str)) {
        if (!is_string($str)) {
            throw new Exception('argument str must be a string');
        if (! is_string($str)) {
            throw new \Exception('argument str must be a string');
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!is_string($str)) {
=======
        if (! is_string($str)) {
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        if (!is_string($str)) {
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
        if (!is_string($str)) {
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
            throw new Exception('argument str must be a string');
=======
        if (! is_string($str)) {
            throw new \Exception('argument str must be a string');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
        if (! is_string($str)) {
            throw new Exception('argument str must be a string');
>>>>>>> 551c768c4 (.)
        }
        dddx(app(ParsePrintPageStringAction::class)->execute($str));
    }
}
