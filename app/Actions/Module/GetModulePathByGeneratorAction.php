<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Module;

<<<<<<< HEAD
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
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
use Exception;
=======
>>>>>>> 414a4ffcb (.)
use Error;
use Exception;
use Illuminate\Support\Facades\Config;
<<<<<<< HEAD
use Webmozart\Assert\Assert;
=======
use Error;
use Exception;
use Illuminate\Support\Facades\Config;
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)

class GetModulePathByGeneratorAction
{
    public function execute(string $moduleName, string $generatorPath): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $relativePath = Config::string('modules.paths.generator.'.$generatorPath.'.path');
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
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 6dcebf8a (.)
=======
        $relativePath = Config::string('modules.paths.generator.'.$generatorPath.'.path');
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 5cf46378 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        $relativePath = Config::string('modules.paths.generator.' . $generatorPath . '.path');
<<<<<<< HEAD
=======
>>>>>>> a6ef6dc7 (.)
=======
        $relativePath = Config::string('modules.paths.generator.'.$generatorPath.'.path');
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($res, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
        Assert::string($res, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
        $relativePath = Config::string('modules.paths.generator.'.$generatorPath.'.path');
>>>>>>> b7afadf9 (.)
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
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
        $relativePath = Config::string('modules.paths.generator.'.$generatorPath.'.path');
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
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
        $relativePath = Config::string('modules.paths.generator.'.$generatorPath.'.path');
=======
=======
>>>>>>> a67e542f (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 3310e9c6 (.)
>>>>>>> a67e542f (.)
        $relativePath = Config::string('modules.paths.generator.' . $generatorPath . '.path');
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
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 7468a7d2 (.)
        $relativePath = Config::string('modules.paths.generator.'.$generatorPath.'.path');
        $relativePath = Config::string('modules.paths.generator.' . $generatorPath . '.path');
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
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> 2f3197ab (.)
        $relativePath = Config::string('modules.paths.generator.'.$generatorPath.'.path');
        $relativePath = Config::string('modules.paths.generator.' . $generatorPath . '.path');
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
        $relativePath = Config::string('modules.paths.generator.'.$generatorPath.'.path');
        $relativePath = Config::string('modules.paths.generator.' . $generatorPath . '.path');
        $relativePath = Config::string('modules.paths.generator.' . $generatorPath . '.path');
        $relativePath = Config::string('modules.paths.generator.' . $generatorPath . '.path');
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
        $relativePath = Config::string('modules.paths.generator.'.$generatorPath.'.path');
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
        $relativePath = Config::string('modules.paths.generator.'.$generatorPath.'.path');
        try {
            $res = module_path($moduleName, $relativePath);
=======
>>>>>>> b93ef594b4 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 17684f52 (.)
=======
        $relativePath = Config::string('modules.paths.generator.'.$generatorPath.'.path');
        try {
            $res = module_path($moduleName, $relativePath);
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
        } catch (\Exception|\Error $e) {
            throw new \Exception('Module path not found: '.$moduleName.' '.$generatorPath);
        }
        Assert::string($res);
<<<<<<< HEAD
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
>>>>>>> ce6fc085 (.)
        Assert::string($res, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
        } catch (Exception|Error $e) {
            throw new Exception('Module path not found: '.$moduleName.' '.$generatorPath);
        }
        Assert::string($res);
<<<<<<< HEAD
        Assert::string($res, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        Assert::string($res, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        Assert::string($res, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        Assert::string($res);
        Assert::string($res, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
        Assert::string($res, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        Assert::string($res, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
        Assert::string($res, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
        Assert::string($res);
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
        Assert::string($res, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
=======
>>>>>>> 414a4ffcb (.)

        return $res;
    }
}
