<?php

declare(strict_types=1);

/**
 * @see ---
 */

namespace Modules\Xot\Console\Commands;

use Exception;
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
    public function __construct()
    {
        parent::__construct();
    }
>>>>>>> f1d4085 (.)
=======
    
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
    
>>>>>>> 300ef70 (.)

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $str = $this->argument('str');
<<<<<<< HEAD
<<<<<<< HEAD
        if (! is_string($str)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
        if (!is_string($str)) {
=======
        if (! is_string($str)) {
>>>>>>> f1d4085 (.)
=======
        if (!is_string($str)) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
        if (!is_string($str)) {
>>>>>>> 300ef70 (.)
            throw new Exception('argument str must be a string');
        }
        dddx(app(ParsePrintPageStringAction::class)->execute($str));
    }
}
