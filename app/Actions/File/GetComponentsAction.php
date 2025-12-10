<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\File;

use Exception;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Modules\Xot\Datas\ComponentFileData;
use ReflectionClass;
use ReflectionClass;
use function Safe\json_encode;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Modules\Xot\Datas\ComponentFileData;
<<<<<<< HEAD

use function Safe\json_decode;

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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 17684f52 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======

use function Safe\json_decode;

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
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> 2f3197ab (.)
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Modules\Xot\Datas\ComponentFileData;

use function Safe\json_decode;

<<<<<<< HEAD

use function Safe\json_decode;

=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
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
>>>>>>> 218dfed3 (.)
use Spatie\LaravelData\DataCollection;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

<<<<<<< HEAD
<<<<<<< HEAD

=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
use function Safe\json_decode;

=======
>>>>>>> f1d4085 (.)
=======
use function Safe\json_decode;

>>>>>>> 73eab74 (.)
class GetComponentsAction
{
    use QueueableAction;

    /**
     * Undocumented function.
     *
     * @return DataCollection<ComponentFileData>
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
    public function execute(
        string $path,
        string $namespace,
        string $prefix,
        bool $force_recreate = false,
    ): DataCollection {
        Assert::string(
            $namespace = Str::replace('/', '\\', $namespace),
        $components_json = $path . '/_components.json';
<<<<<<< HEAD
        $components_json = $path . '/_components.json';
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
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
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
>>>>>>> 2f3197ab (.)
    public function execute(string $path, string $namespace, string $prefix, bool $force_recreate = false): DataCollection
    {
        Assert::string($namespace = Str::replace('/', '\\', $namespace), '['.__LINE__.']['.class_basename(static::class).']');
        $components_json = $path.'/_components.json';
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 2f3197ab (.)
            '[' . __LINE__ . '][' . class_basename(static::class) . ']',
        );
        $components_json = $path . '/_components.json';
<<<<<<< HEAD
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
>>>>>>> 218dfed3 (.)
            '[' . __LINE__ . '][' . class_basename(static::class) . ']',
        );
        $components_json = $path . '/_components.json';
<<<<<<< HEAD
            '[' . __LINE__ . '][' . class_basename(static::class) . ']',
        );
        $components_json = $path . '/_components.json';
            '[' . __LINE__ . '][' . class_basename(static::class) . ']',
        );
        $components_json = $path . '/_components.json';
            '[' . __LINE__ . '][' . class_basename(static::class) . ']',
        );
        $components_json = $path . '/_components.json';
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
>>>>>>> 218dfed3 (.)
        $components_json = app(FixPathAction::class)->execute($components_json);

        $path = app(FixPathAction::class)->execute($path);

<<<<<<< HEAD
        if (! File::exists($path)) {
        if (! File::exists($path)) {
        if (! File::exists($path)) {
        if (!File::exists($path)) {
        if (!File::exists($path)) {
        if (!File::exists($path)) {
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
        if (! File::exists($path)) {
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> ed734516 (.)
=======
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
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
        if (!File::exists($path)) {
        if (!File::exists($path)) {
        if (!File::exists($path)) {
        if (!File::exists($path)) {
            if (Str::startsWith($path, base_path('Modules'))) {
                File::makeDirectory($path, 0o755, true, true);
<<<<<<< HEAD
        if (!File::exists($path)) {
            if (Str::startsWith($path, base_path('Modules'))) {
                File::makeDirectory($path, 0o755, true, true);
        if (! File::exists($path)) {
            if (Str::startsWith($path, base_path('Modules'))) {
                File::makeDirectory($path, 0755, true, true);
=======
=======
        if (! File::exists($path)) {
            if (Str::startsWith($path, base_path('Modules'))) {
                File::makeDirectory($path, 0755, true, true);
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
        if (!File::exists($path)) {
            if (Str::startsWith($path, base_path('Modules'))) {
                File::makeDirectory($path, 0o755, true, true);
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
            }
        }

        $exists = File::exists($components_json);
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)

        if ($exists && ! $force_recreate) {
            Assert::string(
                $content = File::get($components_json),
                '['.__LINE__.']['.class_basename(static::class).']',
            );
            $comps = json_decode($content, false);
            if (! is_array($comps)) {
                $comps = [];
            }

        if ($exists && !$force_recreate) {
            Assert::string(
                $content = File::get($components_json),
                '[' . __LINE__ . '][' . class_basename(static::class) . ']',
            );
        
        if ($exists && ! $force_recreate) {
            Assert::string($content = File::get($components_json), '['.__LINE__.']['.class_basename(static::class).']');
            $comps = json_decode($content, false);
            if (! is_array($comps)) {
            $comps = json_decode($content, false);
            if (!is_array($comps)) {
<<<<<<< HEAD
=======
        
        if ($exists && ! $force_recreate) {
            Assert::string($content = File::get($components_json), '['.__LINE__.']['.class_basename(static::class).']');
            $comps = json_decode($content, false);
            if (! is_array($comps)) {
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
                $comps = [];
            }
            return ComponentFileData::collection($comps);
        }
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)

        $files = File::allFiles($path);
        $comps = [];

<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
        

        $files = File::allFiles($path);
        $comps = [];
        
<<<<<<< HEAD

        $files = File::allFiles($path);
        $comps = [];

=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
        foreach ($files as $file) {
            if ('php' !== $file->getExtension()) {
            if ('php' !== $file->getExtension()) {
            if ('php' !== $file->getExtension()) {
            if ('php' !== $file->getExtension()) {
            if ('php' !== $file->getExtension()) {
                continue;
            }

            $class_name = $file->getFilenameWithoutExtension();
            $relative_path = $file->getRelativePath();
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
            Assert::string(
                $relative_path = Str::replace('/', '\\', $relative_path),
                '['.__LINE__.']['.class_basename(static::class).']',
            );

            $comp_name = Str::slug(Str::snake(Str::replace('\\', ' ', $class_name)));
            $comp_name = $prefix.$comp_name;
            $comp_ns = $namespace.'\\'.$class_name;

            if ($relative_path !== '') {
                $comp_name = '';
                $piece = collect(explode('\\', $relative_path))
                    ->map(fn ($item) => Str::slug(Str::snake($item)))
                    ->implode('.');

                $comp_name = $prefix.$piece.'.'.Str::slug(Str::snake(Str::replace('\\', ' ', $class_name)));
                $comp_ns = $namespace.'\\'.$relative_path.'\\'.$class_name;
                $class_name = $relative_path.'\\'.$class_name;
            }

            try {
                if (! class_exists($comp_ns)) {
                '[' . __LINE__ . '][' . class_basename(static::class) . ']',
            );
<<<<<<< HEAD
<<<<<<< HEAD
            Assert::string($relative_path = Str::replace('/', '\\', $relative_path), '['.__LINE__.']['.class_basename(static::class).']');
=======
=======
            Assert::string($relative_path = Str::replace('/', '\\', $relative_path), '['.__LINE__.']['.class_basename(static::class).']');
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
=======
=======
            Assert::string($relative_path = Str::replace('/', '\\', $relative_path), '['.__LINE__.']['.class_basename(static::class).']');
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)

            $comp_name = Str::slug(Str::snake(Str::replace('\\', ' ', $class_name)));
            $comp_name = $prefix . $comp_name;
            $comp_ns = $namespace . '\\' . $class_name;

            if ('' !== $relative_path) {
                $comp_name = '';
                $piece = collect(explode('\\', $relative_path))
<<<<<<< HEAD
<<<<<<< HEAD
                    ->map(fn($item) => Str::slug(Str::snake($item)))
                    ->implode('.');

<<<<<<< HEAD
                    ->map(fn ($item) => Str::slug(Str::snake($item)))
                    ->implode('.');
                
=======
=======
                    ->map(fn ($item) => Str::slug(Str::snake($item)))
                    ->implode('.');
                
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
                    ->map(fn($item) => Str::slug(Str::snake($item)))
                    ->implode('.');

>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
                $comp_name = $prefix . $piece . '.' . Str::slug(Str::snake(Str::replace('\\', ' ', $class_name)));
                $comp_ns = $namespace . '\\' . $relative_path . '\\' . $class_name;
                $class_name = $relative_path . '\\' . $class_name;
            }

            try {
                if (!class_exists($comp_ns)) {
                    throw new Exception("La classe {$comp_ns} non esiste");
                }
<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD

=======
=======
                
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
                /** @var class-string<object> $comp_ns */
                $reflection = new ReflectionClass($comp_ns);
                if ($reflection->isAbstract()) {
                    continue;
                }
<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
                    throw new \Exception("La classe {$comp_ns} non esiste");
                }
                
                /** @var class-string<object> $comp_ns */
                $reflection = new \ReflectionClass($comp_ns);
                if ($reflection->isAbstract()) {
                    continue;
                }
                
=======
=======
                
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======

>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
                $comps[] = ComponentFileData::from([
                    'name' => $comp_name,
                    'class' => $class_name,
                    'ns' => $comp_ns,
                ])->toArray();
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
            } catch (Exception $e) {
                /*
                 * dddx([
                 * 'comp_name' => $comp_name,
                 * 'class_name' => $class_name,
                 * 'comp_ns' => $comp_ns,
                 * 'path' => $path,
                 * 'namespace' => $namespace,
                 * 'prefix' => $prefix,
                 * 'message' => $e->getMessage(),
                 * ]);
                 */
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 218dfed3 (.)
=======
                
            } catch (Exception $e) {
>>>>>>> 2f3197ab (.)
                /*
                dddx([
                    'comp_name' => $comp_name,
                    'class_name' => $class_name,
                    'comp_ns' => $comp_ns,
                    'path' => $path,
                    'namespace' => $namespace,
                    'prefix' => $prefix,
                    'message' => $e->getMessage(),
                ]);
                */
<<<<<<< HEAD
            } catch (Exception $e) {
                /*
                 * dddx([
                 * 'comp_name' => $comp_name,
                 * 'class_name' => $class_name,
                 * 'comp_ns' => $comp_ns,
                 * 'path' => $path,
                 * 'namespace' => $namespace,
                 * 'prefix' => $prefix,
                 * 'message' => $e->getMessage(),
                 * ]);
                 */
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
                throw $e;
            }
        }

        $old_content = File::exists($components_json) ? File::get($components_json) : '';

        if ($old_content !== $content) {
            File::put($components_json, $content);
        }

        return ComponentFileData::collection($comps);
    }
}
