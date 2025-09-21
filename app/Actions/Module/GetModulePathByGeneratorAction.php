<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Module;

<<<<<<< HEAD
use Exception;
use Error;
=======
<<<<<<< HEAD
use Exception;
use Error;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Illuminate\Support\Facades\Config;
use Webmozart\Assert\Assert;

class GetModulePathByGeneratorAction
{
    public function execute(string $moduleName, string $generatorPath): string
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
        $relativePath = Config::string('modules.paths.generator.' . $generatorPath . '.path');
        try {
            $res = module_path($moduleName, $relativePath);
        } catch (Exception|Error $e) {
            throw new Exception('Module path not found: 
            name:[' .
            $moduleName .
            '] 
            generatorPath:[' .
            $generatorPath .
            ']
            error_message:[' .
            $e->getMessage() .
                ']');
        }
        Assert::string($res, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
=======
=======
        $relativePath = Config::string('modules.paths.generator.'.$generatorPath.'.path');
=======
        $relativePath = Config::string('modules.paths.generator.' . $generatorPath . '.path');
>>>>>>> b93ef594b4 (.)
        try {
            $res = module_path($moduleName, $relativePath);
        } catch (Exception|Error $e) {
            throw new Exception('Module path not found: 
            name:[' .
            $moduleName .
            '] 
            generatorPath:[' .
            $generatorPath .
            ']
            error_message:[' .
            $e->getMessage() .
                ']');
        }
<<<<<<< HEAD
        Assert::string($res);
>>>>>>> a12f125f4a (.)
=======
        Assert::string($res, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> b93ef594b4 (.)
=======
        $relativePath = Config::string('modules.paths.generator.'.$generatorPath.'.path');
        try {
            $res = module_path($moduleName, $relativePath);
        } catch (\Exception|\Error $e) {
            throw new \Exception('Module path not found: '.$moduleName.' '.$generatorPath);
        }
        Assert::string($res);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

        return $res;
    }
}
