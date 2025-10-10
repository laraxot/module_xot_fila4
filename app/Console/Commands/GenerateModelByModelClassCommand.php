<?php

declare(strict_types=1);

/**
 * @see https://github.com/paulvl/backup/blob/master/src/Console/Commands/MysqlDump.php
 */

namespace Modules\Xot\Console\Commands;

use Illuminate\Console\Command;
use Modules\Xot\Actions\Generate\GenerateModelByModelClass;
use Webmozart\Assert\Assert;

class GenerateModelByModelClassCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'xot:generate-model {model_class}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'generate a model from model_class';

    /**
     * Create a new command instance.
     *
     * @return void
     */
<<<<<<< HEAD
    
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

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        Assert::classExists(
            $model_class = $this->argument('model_class'),
            '[' . __LINE__ . '][' . class_basename($this) . ']',
        );
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        Assert::classExists($model_class = $this->argument('model_class'), '['.__LINE__.']['.class_basename($this).']');
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        Assert::classExists($model_class = $this->argument('model_class'), '['.__LINE__.']['.class_basename($this).']');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

        app(GenerateModelByModelClass::class)
            ->setCustomReplaces(['DummyTable' => 'lime_survey_xxx'])
            ->execute($model_class);
    }
}
