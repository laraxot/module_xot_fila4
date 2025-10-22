<?php

declare(strict_types=1);

namespace Modules\Xot\Helpers;

use Exception;
use Illuminate\Support\Str;
use ReflectionClass;
use RuntimeException;
use Webmozart\Assert\Assert;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
use function Safe\error_log;
use function Safe\file_get_contents;
use function Safe\file_put_contents;
use function Safe\glob;
use function Safe\preg_match;
use function Safe\preg_replace;
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
use function Safe\glob;
use function Safe\error_log;
use function Safe\preg_match;
use function Safe\preg_replace;
use function Safe\file_get_contents;
use function Safe\file_put_contents;
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)

class ResourceFormSchemaGenerator
{
    /**
     * @param  class-string  $resourceClass
     */
    public static function generateFormSchema(string $resourceClass): bool
    {
        try {
            if (! class_exists($resourceClass)) {
                throw new RuntimeException("Class {$resourceClass} does not exist");
            }

            $reflection = new ReflectionClass($resourceClass);
            $filename = $reflection->getFileName();

            if ($filename === false) {
                throw new RuntimeException("Failed to get filename for class: {$resourceClass}");
            }

            // Read the file contents
            $fileContents = file_get_contents($filename);

            // Check if getFormSchema method already exists
<<<<<<< HEAD
<<<<<<< HEAD
            if (str_contains($fileContents, 'public function getFormSchema')) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
            if (str_contains($fileContents, 'public function getFormSchema')) {
=======
            if (strpos($fileContents, 'public function getFormSchema') !== false) {
>>>>>>> f1d4085 (.)
=======
            if (str_contains($fileContents, 'public function getFormSchema')) {
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
            if (str_contains($fileContents, 'public function getFormSchema')) {
>>>>>>> 300ef70 (.)
                return false;
            }

            // Generate form schema
            $modelName = str_replace('Resource', '', $reflection->getShortName());
            $modelVariable = Str::camel($modelName);

            $formSchemaMethod = "\n    public function getFormSchema(): array\n    {\n        return [\n";
            $formSchemaMethod .= "            Forms\\Components\\TextInput::make('{$modelVariable}_name')\n";
            $formSchemaMethod .= "                ->required(),\n";
            $formSchemaMethod .= "        ];\n    }\n";

            // Insert the method before the last closing brace
<<<<<<< HEAD
<<<<<<< HEAD
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod.'}$1', $fileContents);
=======
<<<<<<< HEAD
<<<<<<< HEAD
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
=======
            $modifiedContents = preg_replace(
                '/}(\s*)$/',
                $formSchemaMethod.'}$1',
                $fileContents
            );
>>>>>>> f1d4085 (.)
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> 300ef70 (.)

            // Write back to the file
            file_put_contents($filename, $modifiedContents);

            return true;
        } catch (Exception $e) {
<<<<<<< HEAD
<<<<<<< HEAD
            error_log("Error generating form schema for {$resourceClass}: ".$e->getMessage());

=======
<<<<<<< HEAD
<<<<<<< HEAD
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
=======
            error_log("Error generating form schema for {$resourceClass}: ".$e->getMessage());
>>>>>>> f1d4085 (.)
=======
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
>>>>>>> 300ef70 (.)
            return false;
        }
    }

    /**
     * @return array{updated: array<string>, skipped: array<string>}
     */
    public static function generateForAllResources(): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $resourceFiles = glob(
            '/var/www/html/base_orisbroker_fila3/laravel/Modules/*/app/Filament/Resources/*Resource.php',
        );
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $resourceFiles = glob(
            '/var/www/html/base_orisbroker_fila3/laravel/Modules/*/app/Filament/Resources/*Resource.php',
        );
=======
        $resourceFiles = glob('/var/www/html/base_orisbroker_fila3/laravel/Modules/*/app/Filament/Resources/*Resource.php');
>>>>>>> f1d4085 (.)
=======
        $resourceFiles = glob(
            '/var/www/html/base_orisbroker_fila3/laravel/Modules/*/app/Filament/Resources/*Resource.php',
        );
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
        $resourceFiles = glob(
            '/var/www/html/base_orisbroker_fila3/laravel/Modules/*/app/Filament/Resources/*Resource.php',
        );
>>>>>>> 300ef70 (.)

        $results = ['updated' => [], 'skipped' => []];

        foreach ($resourceFiles as $file) {
            try {
<<<<<<< HEAD
<<<<<<< HEAD
                Assert::string($file, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
<<<<<<< HEAD
<<<<<<< HEAD
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
                Assert::string($file);
>>>>>>> f1d4085 (.)
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 300ef70 (.)
                $content = file_get_contents($file);
                $namespaceMatch = [];
                $classMatch = [];

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
                if (
                    preg_match('/namespace\s+([\w\\\\\\\\]+);/', $content, $namespaceMatch) &&
                        preg_match('/class\s+(\w+)\s+extends\s+XotBaseResource/', $content, $classMatch) &&
                        ! empty($namespaceMatch[1]) &&
                        ! empty($classMatch[1])
                ) {
<<<<<<< HEAD
                    $fullClassName = $namespaceMatch[1].'\\'.$classMatch[1];
=======
                    $fullClassName = $namespaceMatch[1] . '\\' . $classMatch[1];
<<<<<<< HEAD
<<<<<<< HEAD
=======
                if (preg_match('/namespace\s+([\w\\\\\\\\]+);/', $content, $namespaceMatch) &&
                    preg_match('/class\s+(\w+)\s+extends\s+XotBaseResource/', $content, $classMatch) &&
                    !empty($namespaceMatch[1]) && !empty($classMatch[1])) {
                    $fullClassName = $namespaceMatch[1].'\\'.$classMatch[1];
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)

                    if (class_exists($fullClassName)) {
                        /** @var class-string $fullClassName */
                        if (self::generateFormSchema($fullClassName)) {
                            $results['updated'][] = $fullClassName;
                        }
                    }
                }
            } catch (Exception $e) {
<<<<<<< HEAD
<<<<<<< HEAD
                $results['skipped'][] = is_string($file) ? $file : (((string) $file).': '.$e->getMessage());
=======
<<<<<<< HEAD
<<<<<<< HEAD
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
=======
                $results['skipped'][] = is_string($file) ? $file : (string) $file.': '.$e->getMessage();
>>>>>>> f1d4085 (.)
=======
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
>>>>>>> 300ef70 (.)
            }
        }

        return $results;
    }
}
