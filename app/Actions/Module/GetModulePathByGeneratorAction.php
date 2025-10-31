<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Module;

use Error;
use Exception;
use Illuminate\Support\Facades\Config;
use Webmozart\Assert\Assert;

class GetModulePathByGeneratorAction
{
    public function execute(string $moduleName, string $generatorPath): string
    {
<<<<<<< HEAD
        $relativePath = Config::string('modules.paths.generator.'.$generatorPath.'.path');
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
        $relativePath = Config::string('modules.paths.generator.' . $generatorPath . '.path');
>>>>>>> a6ef6dc7 (.)
        try {
            $res = module_path($moduleName, $relativePath);
        } catch (Exception|Error $e) {
            throw new Exception('Module path not found: 
            name:['.
            $moduleName.
            '] 
            generatorPath:['.
            $generatorPath.
            ']
            error_message:['.
            $e->getMessage().
                ']');
        }
<<<<<<< HEAD
        Assert::string($res, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
        Assert::string($res, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
        $relativePath = Config::string('modules.paths.generator.'.$generatorPath.'.path');
        try {
            $res = module_path($moduleName, $relativePath);
        } catch (Exception|Error $e) {
            throw new Exception('Module path not found: 
            name:['.
            $moduleName.
            '] 
            generatorPath:['.
            $generatorPath.
            ']
            error_message:['.
            $e->getMessage().
                ']');
        }
<<<<<<< HEAD
        Assert::string($res, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
        Assert::string($res);
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)

        return $res;
    }
}
