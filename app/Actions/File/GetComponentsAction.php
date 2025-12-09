<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\File;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Modules\Xot\Datas\ComponentFileData;
use ReflectionClass;
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
use ReflectionClass;
use function Safe\json_encode;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Modules\Xot\Datas\ComponentFileData;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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

use function Safe\json_decode;

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
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Modules\Xot\Datas\ComponentFileData;

use function Safe\json_decode;

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
use Spatie\LaravelData\DataCollection;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

<<<<<<< HEAD
use function Safe\json_decode;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use function Safe\json_encode;
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use function Safe\json_decode;

=======
>>>>>>> a12f125f4a (.)
=======
use function Safe\json_decode;

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
class GetComponentsAction
{
    use QueueableAction;

    /**
     * Undocumented function.
     *
     * @return DataCollection<ComponentFileData>
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
    public function execute(
        string $path,
        string $namespace,
        string $prefix,
        bool $force_recreate = false,
    ): DataCollection {
        Assert::string(
            $namespace = Str::replace('/', '\\', $namespace),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '['.__LINE__.']['.class_basename(static::class).']',
        );
        $components_json = $path.'/_components.json';
=======
            '[' . __LINE__ . '][' . class_basename(static::class) . ']',
        );
        $components_json = $path . '/_components.json';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
    public function execute(string $path, string $namespace, string $prefix, bool $force_recreate = false): DataCollection
    {
        Assert::string($namespace = Str::replace('/', '\\', $namespace), '['.__LINE__.']['.class_basename(static::class).']');
        $components_json = $path.'/_components.json';
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
            '[' . __LINE__ . '][' . class_basename(static::class) . ']',
        );
        $components_json = $path . '/_components.json';
>>>>>>> 5a14301c (.)
=======
>>>>>>> f1d4085 (.)
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
            '[' . __LINE__ . '][' . class_basename(static::class) . ']',
        );
        $components_json = $path . '/_components.json';
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
        $components_json = app(FixPathAction::class)->execute($components_json);

        $path = app(FixPathAction::class)->execute($path);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        if (!File::exists($path)) {
>>>>>>> 5a14301c (.)
=======
        if (!File::exists($path)) {
>>>>>>> 3fbbf1f5 (.)
=======
        if (!File::exists($path)) {
>>>>>>> 5a14301c (.)
=======
        if (!File::exists($path)) {
>>>>>>> 5a14301c (.)
            if (Str::startsWith($path, base_path('Modules'))) {
                File::makeDirectory($path, 0o755, true, true);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!File::exists($path)) {
            if (Str::startsWith($path, base_path('Modules'))) {
                File::makeDirectory($path, 0o755, true, true);
=======
        if (! File::exists($path)) {
            if (Str::startsWith($path, base_path('Modules'))) {
                File::makeDirectory($path, 0755, true, true);
>>>>>>> a12f125f4a (.)
=======
        if (!File::exists($path)) {
            if (Str::startsWith($path, base_path('Modules'))) {
                File::makeDirectory($path, 0o755, true, true);
>>>>>>> b93ef594b4 (.)
=======
        if (! File::exists($path)) {
            if (Str::startsWith($path, base_path('Modules'))) {
                File::makeDirectory($path, 0755, true, true);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            }
        }

        $exists = File::exists($components_json);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if ($exists && ! $force_recreate) {
            Assert::string(
                $content = File::get($components_json),
                '['.__LINE__.']['.class_basename(static::class).']',
            );
            $comps = json_decode($content, false);
            if (! is_array($comps)) {
                $comps = [];
            }

=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
        if ($exists && !$force_recreate) {
            Assert::string(
                $content = File::get($components_json),
                '[' . __LINE__ . '][' . class_basename(static::class) . ']',
            );
<<<<<<< HEAD
            $comps = json_decode($content, false);
            if (!is_array($comps)) {
=======
<<<<<<< HEAD
            $comps = json_decode($content, false);
            if (!is_array($comps)) {
=======
=======
>>>>>>> origin/develop
        
        if ($exists && ! $force_recreate) {
            Assert::string($content = File::get($components_json), '['.__LINE__.']['.class_basename(static::class).']');
            $comps = json_decode($content, false);
            if (! is_array($comps)) {
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            $comps = json_decode($content, false);
            if (!is_array($comps)) {
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
                $comps = [];
            }
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            return ComponentFileData::collection($comps);
        }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

        $files = File::allFiles($path);
        $comps = [];

<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        

        $files = File::allFiles($path);
        $comps = [];
        
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

        $files = File::allFiles($path);
        $comps = [];

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        foreach ($files as $file) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if ($file->getExtension() !== 'php') {
=======
            if ('php' !== $file->getExtension()) {
>>>>>>> 5a14301c (.)
=======
            if ('php' !== $file->getExtension()) {
>>>>>>> 5a14301c (.)
=======
            if ('php' !== $file->getExtension()) {
>>>>>>> 5a14301c (.)
                continue;
            }

            $class_name = $file->getFilenameWithoutExtension();
            $relative_path = $file->getRelativePath();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
            Assert::string(
                $relative_path = Str::replace('/', '\\', $relative_path),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
                '[' . __LINE__ . '][' . class_basename(static::class) . ']',
            );
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
            Assert::string($relative_path = Str::replace('/', '\\', $relative_path), '['.__LINE__.']['.class_basename(static::class).']');
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
            Assert::string($relative_path = Str::replace('/', '\\', $relative_path), '['.__LINE__.']['.class_basename(static::class).']');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

            $comp_name = Str::slug(Str::snake(Str::replace('\\', ' ', $class_name)));
            $comp_name = $prefix . $comp_name;
            $comp_ns = $namespace . '\\' . $class_name;

            if ('' !== $relative_path) {
                $comp_name = '';
                $piece = collect(explode('\\', $relative_path))
<<<<<<< HEAD
                    ->map(fn($item) => Str::slug(Str::snake($item)))
                    ->implode('.');

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                    ->map(fn($item) => Str::slug(Str::snake($item)))
                    ->implode('.');

=======
                    ->map(fn ($item) => Str::slug(Str::snake($item)))
                    ->implode('.');
                
>>>>>>> a12f125f4a (.)
=======
                    ->map(fn($item) => Str::slug(Str::snake($item)))
                    ->implode('.');

>>>>>>> b93ef594b4 (.)
=======
                    ->map(fn ($item) => Str::slug(Str::snake($item)))
                    ->implode('.');
                
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
                $comp_name = $prefix . $piece . '.' . Str::slug(Str::snake(Str::replace('\\', ' ', $class_name)));
                $comp_ns = $namespace . '\\' . $relative_path . '\\' . $class_name;
                $class_name = $relative_path . '\\' . $class_name;
            }

            try {
                if (!class_exists($comp_ns)) {
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
                    throw new Exception("La classe {$comp_ns} non esiste");
                }

=======
<<<<<<< HEAD
                    throw new Exception("La classe {$comp_ns} non esiste");
                }
<<<<<<< HEAD
<<<<<<< HEAD

=======
                
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
                /** @var class-string<object> $comp_ns */
                $reflection = new ReflectionClass($comp_ns);
                if ($reflection->isAbstract()) {
                    continue;
                }
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
                
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
                    throw new \Exception("La classe {$comp_ns} non esiste");
                }
                
                /** @var class-string<object> $comp_ns */
                $reflection = new \ReflectionClass($comp_ns);
                if ($reflection->isAbstract()) {
                    continue;
                }
                
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
                $comps[] = ComponentFileData::from([
                    'name' => $comp_name,
                    'class' => $class_name,
                    'ns' => $comp_ns,
                ])->toArray();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
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
=======
=======
                
            } catch (Exception $e) {
=======
                
            } catch (\Exception $e) {
>>>>>>> origin/develop
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
>>>>>>> a12f125f4a (.)
=======
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
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
                throw $e;
            }
        }

<<<<<<< HEAD
        $content = json_encode($comps, JSON_THROW_ON_ERROR);
=======
<<<<<<< HEAD
        $content = json_encode($comps, JSON_THROW_ON_ERROR);
=======
        $content = \Safe\json_encode($comps, JSON_THROW_ON_ERROR);
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
        $old_content = File::exists($components_json) ? File::get($components_json) : '';

        if ($old_content !== $content) {
            File::put($components_json, $content);
        }

        return ComponentFileData::collection($comps);
    }
}
