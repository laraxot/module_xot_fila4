<?php

declare(strict_types=1);

namespace Modules\Xot\Helpers;

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
=======
>>>>>>> 9db27d12 (.)
use RuntimeException;
use ReflectionClass;
use Exception;
use Illuminate\Support\Str;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  class-string  $resourceClass
=======
     * @param class-string $resourceClass
>>>>>>> 5a14301c (.)
=======
     * @param class-string $resourceClass
>>>>>>> 5a14301c (.)
=======
     * @param class-string $resourceClass
>>>>>>> 5a14301c (.)
=======
     * @param class-string $resourceClass
>>>>>>> 5a14301c (.)
=======
     * @param class-string $resourceClass
>>>>>>> 5a14301c (.)
     */
    public static function generateFormSchema(string $resourceClass): bool
    {
        try {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (! class_exists($resourceClass)) {
=======
            if (!class_exists($resourceClass)) {
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
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
>>>>>>> 6dcebf8a (.)
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod.'}$1', $fileContents);
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> 5a14301c (.)
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> 3fbbf1f5 (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> 399f46d3 (.)
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> 17684f52 (.)
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> 399f46d3 (.)
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> 399f46d3 (.)
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod.'}$1', $fileContents);
=======
>>>>>>> ab8cc3f3 (.)
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod.'}$1', $fileContents);
=======
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod.'}$1', $fileContents);
=======
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod.'}$1', $fileContents);
=======
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
=======
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
=======
<<<<<<< HEAD
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/develop
<<<<<<< HEAD
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
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 399f46d3 (.)
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
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> origin/develop
>>>>>>> 399f46d3 (.)
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
=======
>>>>>>> 7131bd09 (.)
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
=======
=======
>>>>>>> origin/develop
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod.'}$1', $fileContents);
=======
<<<<<<< HEAD
<<<<<<< HEAD
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
            $modifiedContents = preg_replace(
                '/}(\s*)$/',
                $formSchemaMethod.'}$1',
                $fileContents
            );
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
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
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> ca9324a4 (.)
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> 5a14301c (.)
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
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> 9db27d12 (.)
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> ca9324a4 (.)
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod.'}$1', $fileContents);
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod.'}$1', $fileContents);
>>>>>>> 71586de2 (.)
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> ca9324a4 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod . '}$1', $fileContents);
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
            $modifiedContents = preg_replace('/}(\s*)$/', $formSchemaMethod.'}$1', $fileContents);
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)

            // Write back to the file
            file_put_contents($filename, $modifiedContents);

            return true;
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
            error_log("Error generating form schema for {$resourceClass}: ".$e->getMessage());

=======
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
=======
>>>>>>> 6dcebf8a (.)
=======
            error_log("Error generating form schema for {$resourceClass}: ".$e->getMessage());

=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
            error_log("Error generating form schema for {$resourceClass}: ".$e->getMessage());

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
            error_log("Error generating form schema for {$resourceClass}: ".$e->getMessage());

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
            error_log("Error generating form schema for {$resourceClass}: ".$e->getMessage());

=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
=======
            error_log("Error generating form schema for {$resourceClass}: ".$e->getMessage());
>>>>>>> f1d4085 (.)
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
>>>>>>> ed734516 (.)
=======
=======
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
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
=======
=======
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
>>>>>>> 5a14301c (.)
=======
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
=======
            error_log("Error generating form schema for {$resourceClass}: ".$e->getMessage());
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
>>>>>>> 5a14301c (.)
=======
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
=======
            error_log("Error generating form schema for {$resourceClass}: ".$e->getMessage());
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
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
=======
=======
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
            error_log("Error generating form schema for {$resourceClass}: ".$e->getMessage());

>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
            error_log("Error generating form schema for {$resourceClass}: ".$e->getMessage());

>>>>>>> 71586de2 (.)
=======
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
>>>>>>> 5a14301c (.)
=======
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
=======
            error_log("Error generating form schema for {$resourceClass}: ".$e->getMessage());
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
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
=======
=======
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
            error_log("Error generating form schema for {$resourceClass}: " . $e->getMessage());
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
            error_log("Error generating form schema for {$resourceClass}: ".$e->getMessage());

>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
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
                Assert::string($file, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 6dcebf8a (.)
=======
                Assert::string($file, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 6dcebf8a (.)
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 5a14301c (.)
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 3fbbf1f5 (.)
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 399f46d3 (.)
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 17684f52 (.)
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 399f46d3 (.)
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 399f46d3 (.)
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 17684f52 (.)
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 399f46d3 (.)
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
=======
                Assert::string($file, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
                Assert::string($file, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
                Assert::string($file, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
                Assert::string($file, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
                Assert::string($file);
>>>>>>> f1d4085 (.)
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
>>>>>>> ed734516 (.)
=======
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
                Assert::string($file);
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 9db27d12 (.)
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 5a14301c (.)
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
                Assert::string($file);
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 5a14301c (.)
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
                Assert::string($file);
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
                Assert::string($file);
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
                Assert::string($file, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
                Assert::string($file, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 71586de2 (.)
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 5a14301c (.)
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
                Assert::string($file);
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> ca9324a4 (.)
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
                Assert::string($file);
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
                Assert::string($file, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
                Assert::string($file, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                        ! empty($namespaceMatch[1]) &&
                        ! empty($classMatch[1])
                ) {
<<<<<<< HEAD
                    $fullClassName = $namespaceMatch[1].'\\'.$classMatch[1];
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
                        !empty($namespaceMatch[1]) &&
                        !empty($classMatch[1])
                ) {
                    $fullClassName = $namespaceMatch[1] . '\\' . $classMatch[1];
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
<<<<<<< HEAD
                    $fullClassName = $namespaceMatch[1].'\\'.$classMatch[1];
>>>>>>> b7afadf9 (.)
=======
=======
<<<<<<< HEAD
                    $fullClassName = $namespaceMatch[1].'\\'.$classMatch[1];
>>>>>>> b7afadf9 (.)
=======
                    $fullClassName = $namespaceMatch[1] . '\\' . $classMatch[1];
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
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
                    $fullClassName = $namespaceMatch[1] . '\\' . $classMatch[1];
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
                if (preg_match('/namespace\s+([\w\\\\\\\\]+);/', $content, $namespaceMatch) &&
                    preg_match('/class\s+(\w+)\s+extends\s+XotBaseResource/', $content, $classMatch) &&
                    !empty($namespaceMatch[1]) && !empty($classMatch[1])) {
                    $fullClassName = $namespaceMatch[1].'\\'.$classMatch[1];
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
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
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 71586de2 (.)
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
>>>>>>> ab8cc3f3 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 6dcebf8a (.)
                $results['skipped'][] = is_string($file) ? $file : (((string) $file).': '.$e->getMessage());
=======
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
=======
                $results['skipped'][] = is_string($file) ? $file : (((string) $file).': '.$e->getMessage());
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
                $results['skipped'][] = is_string($file) ? $file : (((string) $file).': '.$e->getMessage());
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
                $results['skipped'][] = is_string($file) ? $file : (((string) $file).': '.$e->getMessage());
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
                $results['skipped'][] = is_string($file) ? $file : (((string) $file).': '.$e->getMessage());
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
=======
                $results['skipped'][] = is_string($file) ? $file : (string) $file.': '.$e->getMessage();
>>>>>>> f1d4085 (.)
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
>>>>>>> ed734516 (.)
=======
=======
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
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
=======
=======
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
>>>>>>> 5a14301c (.)
=======
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
=======
                $results['skipped'][] = is_string($file) ? $file : (string) $file.': '.$e->getMessage();
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
>>>>>>> 5a14301c (.)
=======
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
=======
                $results['skipped'][] = is_string($file) ? $file : (string) $file.': '.$e->getMessage();
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
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
=======
=======
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
=======
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
                $results['skipped'][] = is_string($file) ? $file : (((string) $file).': '.$e->getMessage());
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> b7afadf9 (.)
=======
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
                $results['skipped'][] = is_string($file) ? $file : (((string) $file).': '.$e->getMessage());
>>>>>>> 71586de2 (.)
=======
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
>>>>>>> 5a14301c (.)
=======
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
=======
                $results['skipped'][] = is_string($file) ? $file : (string) $file.': '.$e->getMessage();
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
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
=======
=======
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
=======
                $results['skipped'][] = is_string($file) ? $file : (((string) $file) . ': ' . $e->getMessage());
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
                $results['skipped'][] = is_string($file) ? $file : (((string) $file).': '.$e->getMessage());
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
            }
        }

        return $results;
    }
}
