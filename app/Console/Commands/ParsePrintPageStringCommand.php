<?php

declare(strict_types=1);

/**
 * @see ---
 */

namespace Modules\Xot\Console\Commands;

<<<<<<< HEAD
use Exception;
=======
<<<<<<< HEAD
use Exception;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
<<<<<<< HEAD
     */
=======
     *
     * @return void
     */
<<<<<<< HEAD
    
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    
=======
=======
>>>>>>> origin/develop
    public function __construct()
    {
        parent::__construct();
    }
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $str = $this->argument('str');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! is_string($str)) {
=======
=======
>>>>>>> 399f46d3 (.)
        if (!is_string($str)) {
>>>>>>> 5a14301c (.)
=======
        if (!is_string($str)) {
>>>>>>> 3fbbf1f5 (.)
            throw new Exception('argument str must be a string');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!is_string($str)) {
=======
        if (! is_string($str)) {
>>>>>>> a12f125f4a (.)
=======
        if (!is_string($str)) {
>>>>>>> b93ef594b4 (.)
            throw new Exception('argument str must be a string');
=======
        if (! is_string($str)) {
            throw new \Exception('argument str must be a string');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        }
        dddx(app(ParsePrintPageStringAction::class)->execute($str));
    }
}
