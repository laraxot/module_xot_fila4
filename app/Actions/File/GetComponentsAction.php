<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\File;

use Exception;
use ReflectionClass;
use function Safe\json_encode;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Modules\Xot\Datas\ComponentFileData;
<<<<<<< HEAD
<<<<<<< HEAD
=======

use function Safe\json_decode;

>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
use Spatie\LaravelData\DataCollection;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

<<<<<<< HEAD
<<<<<<< HEAD
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
            '[' . __LINE__ . '][' . class_basename(static::class) . ']',
        );
        $components_json = $path . '/_components.json';
<<<<<<< HEAD
=======
    public function execute(string $path, string $namespace, string $prefix, bool $force_recreate = false): DataCollection
    {
        Assert::string($namespace = Str::replace('/', '\\', $namespace), '['.__LINE__.']['.class_basename(static::class).']');
        $components_json = $path.'/_components.json';
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
        $components_json = app(FixPathAction::class)->execute($components_json);

        $path = app(FixPathAction::class)->execute($path);

<<<<<<< HEAD
<<<<<<< HEAD
        if (!File::exists($path)) {
            if (Str::startsWith($path, base_path('Modules'))) {
                File::makeDirectory($path, 0o755, true, true);
=======
        if (! File::exists($path)) {
            if (Str::startsWith($path, base_path('Modules'))) {
                File::makeDirectory($path, 0755, true, true);
>>>>>>> f1d4085 (.)
=======
        if (!File::exists($path)) {
            if (Str::startsWith($path, base_path('Modules'))) {
                File::makeDirectory($path, 0o755, true, true);
>>>>>>> 73eab74 (.)
            }
        }

        $exists = File::exists($components_json);
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)

        if ($exists && !$force_recreate) {
            Assert::string(
                $content = File::get($components_json),
                '[' . __LINE__ . '][' . class_basename(static::class) . ']',
            );
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
        

        $files = File::allFiles($path);
        $comps = [];
        
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
        foreach ($files as $file) {
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
                '[' . __LINE__ . '][' . class_basename(static::class) . ']',
            );
<<<<<<< HEAD
=======
            Assert::string($relative_path = Str::replace('/', '\\', $relative_path), '['.__LINE__.']['.class_basename(static::class).']');
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)

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

=======
                    ->map(fn ($item) => Str::slug(Str::snake($item)))
                    ->implode('.');
                
>>>>>>> f1d4085 (.)
=======
                    ->map(fn($item) => Str::slug(Str::snake($item)))
                    ->implode('.');

>>>>>>> 73eab74 (.)
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

=======
                
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
                /** @var class-string<object> $comp_ns */
                $reflection = new ReflectionClass($comp_ns);
                if ($reflection->isAbstract()) {
                    continue;
                }
<<<<<<< HEAD
<<<<<<< HEAD

=======
                
>>>>>>> f1d4085 (.)
=======

>>>>>>> 73eab74 (.)
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
=======
                
            } catch (Exception $e) {
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
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
                throw $e;
            }
        }

        $content = json_encode($comps, JSON_THROW_ON_ERROR);
        $old_content = File::exists($components_json) ? File::get($components_json) : '';

        if ($old_content !== $content) {
            File::put($components_json, $content);
        }

        return ComponentFileData::collection($comps);
    }
}
