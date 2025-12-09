<?php

declare(strict_types=1);

namespace Modules\Xot\Helpers;

<<<<<<< HEAD
<<<<<<< HEAD
use Exception;
use Illuminate\Support\Str;
use ReflectionClass;
use RuntimeException;
=======
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
use RuntimeException;
use ReflectionClass;
use Exception;
use Illuminate\Support\Str;
>>>>>>> 5a14301c (.)
use Webmozart\Assert\Assert;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
use function Safe\error_log;
use function Safe\file_get_contents;
use function Safe\file_put_contents;
use function Safe\glob;
use function Safe\preg_match;
use function Safe\preg_replace;
<<<<<<< HEAD
=======
=======
use function Safe\glob;
=======
>>>>>>> b93ef594b4 (.)
use function Safe\error_log;
use function Safe\file_get_contents;
use function Safe\file_put_contents;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use function Safe\glob;
use function Safe\preg_match;
use function Safe\preg_replace;
>>>>>>> b93ef594b4 (.)
=======
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;

use function Safe\glob;
use function Safe\error_log;
use function Safe\preg_match;
use function Safe\preg_replace;
use function Safe\file_get_contents;
use function Safe\file_put_contents;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

class ResourceFormSchemaGenerator
{
    /**
<<<<<<< HEAD
     * @param  class-string  $resourceClass
=======
     * @param class-string $resourceClass
>>>>>>> 5a14301c (.)
     */
    public static function generateFormSchema(string $resourceClass): bool
    {
        try {
<<<<<<< HEAD
            if (! class_exists($resourceClass)) {
=======
            if (!class_exists($resourceClass)) {
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
                throw new RuntimeException("Class {$resourceClass} does not exist");
            }

            $reflection = new ReflectionClass($resourceClass);
            $filename = $reflection->getFileName();

            if ($filename === false) {
                throw new RuntimeException("Failed to get filename for class: {$resourceClass}");
<<<<<<< HEAD
=======
=======
                throw new \RuntimeException("Class {$resourceClass} does not exist");
            }

            $reflection = new \ReflectionClass($resourceClass);
            $filename = $reflection->getFileName();

            if ($filename === false) {
                throw new \RuntimeException("Failed to get filename for class: {$resourceClass}");
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            }

            // Read the file contents
            $fileContents = file_get_contents($filename);

            // Check if getFormSchema method already exists
<<<<<<< HEAD
            if (str_contains($fileContents, 'public function getFormSchema')) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (str_contains($fileContents, 'public function getFormSchema')) {
=======
            if (strpos($fileContents, 'public function getFormSchema') !== false) {
>>>>>>> a12f125f4a (.)
=======
            if (str_contains($fileContents, 'public function getFormSchema')) {
>>>>>>> b93ef594b4 (.)
=======
            if (strpos($fileContents, 'public function getFormSchema') !== false) {
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
<<<<<<< HEAD
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod.'}$1', $fileContents);
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> 5a14301c (.)
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> 3fbbf1f5 (.)
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
=======
=======
>>>>>>> origin/develop
            $modifiedContents = preg_replace(
                '/}(\s*)$/',
                $formSchemaMethod.'}$1',
                $fileContents
            );
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)

            // Write back to the file
            file_put_contents($filename, $modifiedContents);

            return true;
<<<<<<< HEAD
        } catch (Exception $e) {
<<<<<<< HEAD
<<<<<<< HEAD
            error_log("Error generating form schema for {$resourceClass}: ".$e->getMessage());

=======
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
        } catch (Exception $e) {
<<<<<<< HEAD
<<<<<<< HEAD
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
=======
            error_log("Error generating form schema for {$resourceClass}: ".$e->getMessage());
>>>>>>> a12f125f4a (.)
=======
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
>>>>>>> b93ef594b4 (.)
=======
        } catch (\Exception $e) {
            error_log("Error generating form schema for {$resourceClass}: ".$e->getMessage());
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
            return false;
        }
    }

    /**
     * @return array{updated: array<string>, skipped: array<string>}
     */
    public static function generateForAllResources(): array
    {
<<<<<<< HEAD
        $resourceFiles = glob(
            '/var/www/html/base_orisbroker_fila3/laravel/Modules/*/app/Filament/Resources/*Resource.php',
        );
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $resourceFiles = glob(
            '/var/www/html/base_orisbroker_fila3/laravel/Modules/*/app/Filament/Resources/*Resource.php',
        );
=======
        $resourceFiles = glob('/var/www/html/base_orisbroker_fila3/laravel/Modules/*/app/Filament/Resources/*Resource.php');
>>>>>>> a12f125f4a (.)
=======
        $resourceFiles = glob(
            '/var/www/html/base_orisbroker_fila3/laravel/Modules/*/app/Filament/Resources/*Resource.php',
        );
>>>>>>> b93ef594b4 (.)
=======
        $resourceFiles = glob('/var/www/html/base_orisbroker_fila3/laravel/Modules/*/app/Filament/Resources/*Resource.php');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

        $results = ['updated' => [], 'skipped' => []];

        foreach ($resourceFiles as $file) {
            try {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                Assert::string($file, __FILE__.':'.__LINE__.' - '.class_basename(self::class));
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 5a14301c (.)
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 3fbbf1f5 (.)
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
                Assert::string($file);
>>>>>>> a12f125f4a (.)
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> b93ef594b4 (.)
=======
                Assert::string($file);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
                $content = file_get_contents($file);
                $namespaceMatch = [];
                $classMatch = [];

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
                if (
                    preg_match('/namespace\s+([\w\\\\\\\\]+);/', $content, $namespaceMatch) &&
                        preg_match('/class\s+(\w+)\s+extends\s+XotBaseResource/', $content, $classMatch) &&
<<<<<<< HEAD
                        ! empty($namespaceMatch[1]) &&
                        ! empty($classMatch[1])
                ) {
                    $fullClassName = $namespaceMatch[1].'\\'.$classMatch[1];
=======
                        !empty($namespaceMatch[1]) &&
                        !empty($classMatch[1])
                ) {
                    $fullClassName = $namespaceMatch[1] . '\\' . $classMatch[1];
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
                if (preg_match('/namespace\s+([\w\\\\\\\\]+);/', $content, $namespaceMatch) &&
                    preg_match('/class\s+(\w+)\s+extends\s+XotBaseResource/', $content, $classMatch) &&
                    !empty($namespaceMatch[1]) && !empty($classMatch[1])) {
                    $fullClassName = $namespaceMatch[1].'\\'.$classMatch[1];
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)

                    if (class_exists($fullClassName)) {
                        /** @var class-string $fullClassName */
                        if (self::generateFormSchema($fullClassName)) {
                            $results['updated'][] = $fullClassName;
                        }
                    }
                }
<<<<<<< HEAD
            } catch (Exception $e) {
<<<<<<< HEAD
<<<<<<< HEAD
                $results['skipped'][] = is_string($file) ? $file : (((string) $file).': '.$e->getMessage());
=======
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
            } catch (Exception $e) {
<<<<<<< HEAD
<<<<<<< HEAD
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
=======
                $results['skipped'][] = is_string($file) ? $file : (string) $file.': '.$e->getMessage();
>>>>>>> a12f125f4a (.)
=======
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
>>>>>>> b93ef594b4 (.)
=======
            } catch (\Exception $e) {
                $results['skipped'][] = is_string($file) ? $file : (string) $file.': '.$e->getMessage();
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
            }
        }

        return $results;
    }
}
