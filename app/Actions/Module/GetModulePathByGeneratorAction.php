<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Module;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Error;
use Exception;
use Illuminate\Support\Facades\Config;
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
use Exception;
use Error;
use Illuminate\Support\Facades\Config;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

class GetModulePathByGeneratorAction
{
    public function execute(string $moduleName, string $generatorPath): string
    {
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
        $relativePath = Config::string('modules.paths.generator.'.$generatorPath.'.path');
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
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
>>>>>>> 7131bd09 (.)
        $relativePath = Config::string('modules.paths.generator.' . $generatorPath . '.path');
>>>>>>> 5a14301c (.)
        try {
            $res = module_path($moduleName, $relativePath);
        } catch (Exception|Error $e) {
            throw new Exception('Module path not found: 
<<<<<<< HEAD
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
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
=======
        $relativePath = Config::string('modules.paths.generator.'.$generatorPath.'.path');
=======
        $relativePath = Config::string('modules.paths.generator.' . $generatorPath . '.path');
>>>>>>> b93ef594b4 (.)
=======
        $relativePath = Config::string('modules.paths.generator.' . $generatorPath . '.path');
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
        Assert::string($res);
>>>>>>> a12f125f4a (.)
=======
        Assert::string($res, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
        $relativePath = Config::string('modules.paths.generator.'.$generatorPath.'.path');
        try {
            $res = module_path($moduleName, $relativePath);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
        } catch (\Exception|\Error $e) {
            throw new \Exception('Module path not found: '.$moduleName.' '.$generatorPath);
        }
        Assert::string($res);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
        Assert::string($res, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 7131bd09 (.)
        } catch (Exception|Error $e) {
            throw new Exception('Module path not found: '.$moduleName.' '.$generatorPath);
        }
        Assert::string($res);
>>>>>>> f1d4085 (.)
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
>>>>>>> 7131bd09 (.)

        return $res;
    }
}
