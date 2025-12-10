<?php

declare(strict_types=1);

namespace Modules\Xot\Helpers;

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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
use Exception;
use Illuminate\Support\Str;
use ReflectionClass;
use RuntimeException;
<<<<<<< HEAD
=======
=======
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
use RuntimeException;
use ReflectionClass;
use Exception;
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;

use function Safe\error_log;
use function Safe\file_get_contents;
use function Safe\file_put_contents;
use function Safe\glob;
use function Safe\preg_match;
use function Safe\preg_replace;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use function Safe\error_log;
use function Safe\file_get_contents;
use function Safe\file_put_contents;
use function Safe\glob;
use function Safe\preg_match;
use function Safe\preg_replace;
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;

=======
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 2f3197ab (.)
=======
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

>>>>>>> ce6fc085 (.)
use function Safe\glob;
use function Safe\error_log;
use function Safe\preg_match;
use function Safe\preg_replace;
use function Safe\file_get_contents;
use function Safe\file_put_contents;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)

class ResourceFormSchemaGenerator
{
    /**
     * @param class-string $resourceClass
     * @param class-string $resourceClass
     * @param class-string $resourceClass
     * @param class-string $resourceClass
     * @param class-string $resourceClass
     */
    public static function generateFormSchema(string $resourceClass): bool
    {
        try {
            if (!class_exists($resourceClass)) {
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
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ce6fc085 (.)
            if (!class_exists($resourceClass)) {
            if (!class_exists($resourceClass)) {
<<<<<<< HEAD
            if (!class_exists($resourceClass)) {
            if (!class_exists($resourceClass)) {
=======
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
=======
            if (!class_exists($resourceClass)) {
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
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
            if (str_contains($fileContents, 'public function getFormSchema')) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (strpos($fileContents, 'public function getFormSchema') !== false) {
=======
=======
            if (strpos($fileContents, 'public function getFormSchema') !== false) {
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
            if (str_contains($fileContents, 'public function getFormSchema')) {
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
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
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod.'}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
<<<<<<< HEAD
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
<<<<<<< HEAD
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod.'}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod.'}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
<<<<<<< HEAD
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
=======
>>>>>>> 399f46d3 (.)
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> ce6fc085 (.)
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod.'}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
=======
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 17684f52 (.)
>>>>>>> ce6fc085 (.)
            $modifiedContents = preg_replace(
                '/}(\s*)$/',
                $formSchemaMethod.'}$1',
                $fileContents
            );
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
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
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
>>>>>>> ce6fc085 (.)
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod.'}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod.'}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod.'}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod.'}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
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
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
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
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)

            // Write back to the file
            file_put_contents($filename, $modifiedContents);

            return true;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
        } catch (Exception $e) {
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
            error_log("Error generating form schema for {$resourceClass}: ".$e->getMessage());

=======
>>>>>>> 2f3197ab (.)
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
<<<<<<< HEAD
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
        } catch (\Exception $e) {
            error_log("Error generating form schema for {$resourceClass}: ".$e->getMessage());
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
>>>>>>> 5a14301c (.)
=======
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ce6fc085 (.)
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
<<<<<<< HEAD
            error_log("Error generating form schema for {$resourceClass}: ".$e->getMessage());

            error_log("Error generating form schema for {$resourceClass}: ".$e->getMessage());

            error_log("Error generating form schema for {$resourceClass}: ".$e->getMessage());

            error_log("Error generating form schema for {$resourceClass}: ".$e->getMessage());

=======
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
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
=======
            error_log("Error generating form schema for {$resourceClass}: ".$e->getMessage());
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
            error_log("Error generating form schema for {$resourceClass}: ".$e->getMessage());
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
            error_log("Error generating form schema for {$resourceClass}: ".$e->getMessage());
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
            error_log("Error generating form schema for {$resourceClass}: ".$e->getMessage());
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
            error_log("Error generating form schema for {$resourceClass}: ".$e->getMessage());
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
            error_log("Error generating form schema for {$resourceClass}: ".$e->getMessage());
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
            error_log("Error generating form schema for {$resourceClass}: ".$e->getMessage());

            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
            error_log("Error generating form schema for {$resourceClass}: ".$e->getMessage());

            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
            error_log("Error generating form schema for {$resourceClass}: ".$e->getMessage());
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
            error_log("Error generating form schema for {$resourceClass}: ".$e->getMessage());
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
            error_log("Error generating form schema for {$resourceClass}: ".$e->getMessage());

            error_log("Error generating form schema for {$resourceClass}: ".$e->getMessage());

            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
            error_log("Error generating form schema for {$resourceClass}: ".$e->getMessage());
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
<<<<<<< HEAD
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
=======
            error_log("Error generating form schema for {$resourceClass}: ".$e->getMessage());
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
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
>>>>>>> 091f883c (.)
            return false;
        }
    }

    /**
     * @return array{updated: array<string>, skipped: array<string>}
     */
    public static function generateForAllResources(): array
    {
        $resourceFiles = glob(
            '/var/www/html/base_orisbroker_fila3/laravel/Modules/*/app/Filament/Resources/*Resource.php',
        );
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $resourceFiles = glob('/var/www/html/base_orisbroker_fila3/laravel/Modules/*/app/Filament/Resources/*Resource.php');
=======
=======
        $resourceFiles = glob('/var/www/html/base_orisbroker_fila3/laravel/Modules/*/app/Filament/Resources/*Resource.php');
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
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
>>>>>>> ce6fc085 (.)
=======
        $resourceFiles = glob(
            '/var/www/html/base_orisbroker_fila3/laravel/Modules/*/app/Filament/Resources/*Resource.php',
        );
<<<<<<< HEAD
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        $resourceFiles = glob('/var/www/html/base_orisbroker_fila3/laravel/Modules/*/app/Filament/Resources/*Resource.php');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)

        $results = ['updated' => [], 'skipped' => []];

        foreach ($resourceFiles as $file) {
            try {
<<<<<<< HEAD
                Assert::string($file, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
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
                Assert::string($file, __FILE__.':'.__LINE__.' - '.class_basename(self::class));
=======
>>>>>>> 2f3197ab (.)
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file);
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
                Assert::string($file, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
                Assert::string($file, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
                Assert::string($file, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file);
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
>>>>>>> ce6fc085 (.)
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
=======
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
>>>>>>> 218dfed3 (.)
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file);
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file);
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file);
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
<<<<<<< HEAD
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file);
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file);
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file);
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
                Assert::string($file, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file);
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
>>>>>>> ca9324a4 (.)
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
                Assert::string($file);
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
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
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
                $content = file_get_contents($file);
                $namespaceMatch = [];
                $classMatch = [];

                if (
                    preg_match('/namespace\s+([\w\\\\\\\\]+);/', $content, $namespaceMatch) &&
                        preg_match('/class\s+(\w+)\s+extends\s+XotBaseResource/', $content, $classMatch) &&
                        ! empty($namespaceMatch[1]) &&
                        ! empty($classMatch[1])
                ) {
                    $fullClassName = $namespaceMatch[1].'\\'.$classMatch[1];
                        !empty($namespaceMatch[1]) &&
                        !empty($classMatch[1])
                ) {
                    $fullClassName = $namespaceMatch[1] . '\\' . $classMatch[1];
<<<<<<< HEAD
                    $fullClassName = $namespaceMatch[1] . '\\' . $classMatch[1];
                    $fullClassName = $namespaceMatch[1] . '\\' . $classMatch[1];
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
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
>>>>>>> ce6fc085 (.)
                if (preg_match('/namespace\s+([\w\\\\\\\\]+);/', $content, $namespaceMatch) &&
                    preg_match('/class\s+(\w+)\s+extends\s+XotBaseResource/', $content, $classMatch) &&
                    !empty($namespaceMatch[1]) && !empty($classMatch[1])) {
                    $fullClassName = $namespaceMatch[1].'\\'.$classMatch[1];
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
>>>>>>> 091f883c (.)

                    if (class_exists($fullClassName)) {
                        /** @var class-string $fullClassName */
                        if (self::generateFormSchema($fullClassName)) {
                            $results['updated'][] = $fullClassName;
                        }
                    }
                }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
            } catch (Exception $e) {
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
=======
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
<<<<<<< HEAD
>>>>>>> a67e542f (.)
                $results['skipped'][] = is_string($file) ? $file : (((string) $file).': '.$e->getMessage());
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
<<<<<<< HEAD
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
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
>>>>>>> 5a14301c (.)
=======
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
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
            } catch (Exception $e) {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
            } catch (\Exception $e) {
                $results['skipped'][] = is_string($file) ? $file : (string) $file.': '.$e->getMessage();
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
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
<<<<<<< HEAD
                $results['skipped'][] = is_string($file) ? $file : (((string) $file).': '.$e->getMessage());
                $results['skipped'][] = is_string($file) ? $file : (((string) $file).': '.$e->getMessage());
                $results['skipped'][] = is_string($file) ? $file : (((string) $file).': '.$e->getMessage());
                $results['skipped'][] = is_string($file) ? $file : (((string) $file).': '.$e->getMessage());
=======
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
>>>>>>> 218dfed3 (.)
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
                $results['skipped'][] = is_string($file) ? $file : (string) $file.': '.$e->getMessage();
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
                $results['skipped'][] = is_string($file) ? $file : (string) $file.': '.$e->getMessage();
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
                $results['skipped'][] = is_string($file) ? $file : (string) $file.': '.$e->getMessage();
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
<<<<<<< HEAD
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
                $results['skipped'][] = is_string($file) ? $file : (string) $file.': '.$e->getMessage();
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
                $results['skipped'][] = is_string($file) ? $file : (string) $file.': '.$e->getMessage();
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
                $results['skipped'][] = is_string($file) ? $file : (((string) $file).': '.$e->getMessage());
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
                $results['skipped'][] = is_string($file) ? $file : (((string) $file).': '.$e->getMessage());
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
                $results['skipped'][] = is_string($file) ? $file : (string) $file.': '.$e->getMessage();
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
                $results['skipped'][] = is_string($file) ? $file : (string) $file.': '.$e->getMessage();
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
                $results['skipped'][] = is_string($file) ? $file : (((string) $file).': '.$e->getMessage());
                $results['skipped'][] = is_string($file) ? $file : (((string) $file).': '.$e->getMessage());
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
                $results['skipped'][] = is_string($file) ? $file : (string) $file.': '.$e->getMessage();
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
=======
                $results['skipped'][] = is_string($file) ? $file : (string) $file.': '.$e->getMessage();
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
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
>>>>>>> 091f883c (.)
            }
        }

        return $results;
    }
}
