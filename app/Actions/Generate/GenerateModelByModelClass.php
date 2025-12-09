<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Generate;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Modules\Xot\Actions\Class\GetFilenameByClassnameAction;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class GenerateModelByModelClass
{
    use QueueableAction;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    /** @var array<string, mixed> */
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    public array $replaces = [];

    /**
     * Execute the function with the given model class.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $model_class  the class name of the model
=======
     * @param string $model_class the class name of the model
     *
     * @return string
>>>>>>> 5a14301c (.)
=======
     * @param string $model_class the class name of the model
     *
     * @return string
=======
     * @param string $model_class the class name of the model
     *
     * @return string
>>>>>>> 399f46d3 (.)
=======
     * @param string $model_class the class name of the model
     *
     * @return string
>>>>>>> 17684f52 (.)
=======
     * @param string $model_class the class name of the model
     *
     * @return string
>>>>>>> 399f46d3 (.)
=======
     * @param string $model_class the class name of the model
     *
     * @return string
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string $model_class the class name of the model
     *
     * @return string
=======
     * @param  string  $model_class  the class name of the model
>>>>>>> a12f125f4a (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
     * @param string $model_class the class name of the model
     *
     * @return string
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> b93ef594b4 (.)
=======
     * @param string $model_class the class name of the model
     *
     * @return string
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
     * @param string $model_class the class name of the model
     *
     * @return string
>>>>>>> ca9324a4 (.)
=======
     * @param string $model_class the class name of the model
     *
     * @return string
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
     * @param string $model_class the class name of the model
     *
     * @return string
=======
     * @param  string  $model_class  the class name of the model
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
     * @param string $model_class the class name of the model
     *
     * @return string
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
     * @param string $model_class the class name of the model
     *
     * @return string
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
     * @param string $model_class the class name of the model
     *
     * @return string
>>>>>>> ca9324a4 (.)
=======
     * @param string $model_class the class name of the model
     *
     * @return string
=======
     * @param  string  $model_class  the class name of the model
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
     * @param string $model_class the class name of the model
     *
     * @return string
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
     * @param string $model_class the class name of the model
     *
     * @return string
>>>>>>> 9db27d12 (.)
=======
     * @param string $model_class the class name of the model
     *
     * @return string
>>>>>>> 5a14301c (.)
=======
     * @param string $model_class the class name of the model
     *
     * @return string
=======
     * @param  string  $model_class  the class name of the model
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
     * @param string $model_class the class name of the model
     *
     * @return string
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
     * @param string $model_class the class name of the model
     *
     * @return string
>>>>>>> ca9324a4 (.)
=======
     * @param string $model_class the class name of the model
     *
     * @return string
>>>>>>> 5a14301c (.)
=======
     * @param string $model_class the class name of the model
     *
     * @return string
=======
     * @param  string  $model_class  the class name of the model
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
     * @param string $model_class the class name of the model
     *
     * @return string
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
     */
    public function execute(string $model_class): string
    {
        Assert::classExists($model_class);

        $namespace = str_replace('\\', '/', $model_class);
        Assert::string($namespace, 'Namespace must be a string');

        $this->generate($model_class);
        $filename = app(GetFilenameByClassnameAction::class)->execute($model_class);

        $content_old = File::get($filename);
        $content = $content_old;
        foreach ($this->replaces as $k => $v) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (method_exists($this, 'replace'.$k)) {
                $content = $this->{'replace'.$k}($v, $content);
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
>>>>>>> 399f46d3 (.)
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
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
            if (method_exists($this, 'replace' . $k)) {
                $content = $this->{'replace' . $k}($v, $content);
>>>>>>> 5a14301c (.)
=======
            if (method_exists($this, 'replace' . $k)) {
                $content = $this->{'replace' . $k}($v, $content);
>>>>>>> 5a14301c (.)
=======
            if (method_exists($this, 'replace' . $k)) {
                $content = $this->{'replace' . $k}($v, $content);
>>>>>>> 5a14301c (.)
=======
            if (method_exists($this, 'replace' . $k)) {
                $content = $this->{'replace' . $k}($v, $content);
>>>>>>> 5a14301c (.)
            }

            // $content=$this->replace($content,$k,$v);
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $content = is_string($content) ? str_replace(' extends Model', ' extends BaseModel', $content) : $content;
        $content = is_string($content) ? str_replace('use \Modules\Xot\Models\Traits\HasXotFactory;', '', $content) : $content;
        Assert::string($content, '['.__LINE__.']['.class_basename($this).']');
=======
        $content = str_replace(' extends Model', ' extends BaseModel', $content);
        $content = str_replace('use HasFactory;', '', $content);
        Assert::string($content, '[' . __LINE__ . '][' . class_basename($this) . ']');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 399f46d3 (.)
=======
            if (method_exists($this, 'replace'.$k)) {
                $content = $this->{'replace'.$k}($v, $content);
                Assert::string($content, 'Content must be string after replace method');
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
            if (method_exists($this, 'replace' . $k)) {
                $content = $this->{'replace' . $k}($v, $content);
>>>>>>> b93ef594b4 (.)
            }

=======
            if (method_exists($this, 'replace'.$k)) {
                $content = $this->{'replace'.$k}($v, $content);
            }
>>>>>>> origin/develop
            // $content=$this->replace($content,$k,$v);
        }
        $content = str_replace(' extends Model', ' extends BaseModel', $content);
        $content = str_replace('use HasFactory;', '', $content);
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($content, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> a12f125f4a (.)
=======
        Assert::string($content, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> b93ef594b4 (.)
=======
        Assert::string($content, '['.__LINE__.']['.class_basename($this).']');
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
        $content = str_replace(' extends Model', ' extends BaseModel', $content);
        $content = str_replace('use HasFactory;', '', $content);
        Assert::string($content, '[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 5a14301c (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> ed734516 (.)
            }
            // $content=$this->replace($content,$k,$v);
        }
        Assert::string($content, 'Content must be string before str_replace');
        $content = str_replace(' extends Model', ' extends BaseModel', $content);
        $content = str_replace('use HasFactory;', '', $content);
        Assert::string($content, '['.__LINE__.']['.class_basename($this).']');
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
        $content = str_replace(' extends Model', ' extends BaseModel', $content);
        $content = str_replace('use HasFactory;', '', $content);
        Assert::string($content, '[' . __LINE__ . '][' . class_basename($this) . ']');
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
        $content = str_replace(' extends Model', ' extends BaseModel', $content);
        $content = str_replace('use HasFactory;', '', $content);
        Assert::string($content, '[' . __LINE__ . '][' . class_basename($this) . ']');
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

        if ($content !== $content_old) {
            File::put($filename, $content);
        }

        return $namespace;
    }

    public function replaceDummyTable(string $value, string $content): string
    {
        $table_start = mb_strpos($content, 'protected $table');
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        Assert::integer(
            $fillable_start = mb_strpos($content, 'protected $fillable'),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '['.__LINE__.']['.class_basename($this).']',
        );
        $fillable_end = mb_strpos($content, '];', $fillable_start);
        if ($table_start === false) {
            $before = mb_substr($content, 0, $fillable_end + 2);
            $after = mb_substr($content, $fillable_end + 2);
            $content = $before.PHP_EOL.'    protected $table = "'.$value.'";'.PHP_EOL.$after;
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            '[' . __LINE__ . '][' . class_basename($this) . ']',
        );
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
        $fillable_end = mb_strpos($content, '];', $fillable_start);
        if (false === $table_start) {
            $before = mb_substr($content, 0, $fillable_end + 2);
            $after = mb_substr($content, $fillable_end + 2);
            $content = $before . PHP_EOL . '    protected $table = "' . $value . '";' . PHP_EOL . $after;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
=======
        Assert::integer($fillable_start = mb_strpos($content, 'protected $fillable'), '['.__LINE__.']['.class_basename($this).']');
=======
>>>>>>> b93ef594b4 (.)
=======
        Assert::integer($fillable_start = mb_strpos($content, 'protected $fillable'), '['.__LINE__.']['.class_basename($this).']');
>>>>>>> origin/develop
        $fillable_end = mb_strpos($content, '];', $fillable_start);
        if (false === $table_start) {
            $before = mb_substr($content, 0, $fillable_end + 2);
            $after = mb_substr($content, $fillable_end + 2);
<<<<<<< HEAD
<<<<<<< HEAD
            $content = $before.PHP_EOL.'    protected $table = "'.$value.'";'.PHP_EOL.$after;
>>>>>>> a12f125f4a (.)
=======
            $content = $before . PHP_EOL . '    protected $table = "' . $value . '";' . PHP_EOL . $after;
>>>>>>> b93ef594b4 (.)
=======
            $content = $before.PHP_EOL.'    protected $table = "'.$value.'";'.PHP_EOL.$after;
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
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
        Assert::integer($fillable_start = mb_strpos($content, 'protected $fillable'), '['.__LINE__.']['.class_basename($this).']');
        $fillable_end = mb_strpos($content, '];', $fillable_start);
        if ($table_start === false) {
            $before = mb_substr($content, 0, $fillable_end + 2);
            $after = mb_substr($content, $fillable_end + 2);
            $content = $before.PHP_EOL.'    protected $table = "'.$value.'";'.PHP_EOL.$after;
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
        }

        return $content;
    }

    /**
     * Create a factory for the given model class.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $model_class  The class name of the model to create the factory for
=======
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
>>>>>>> 5a14301c (.)
=======
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
=======
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
>>>>>>> 399f46d3 (.)
=======
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
>>>>>>> 17684f52 (.)
=======
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
>>>>>>> 399f46d3 (.)
=======
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
=======
     * @param  string  $model_class  The class name of the model to create the factory for
>>>>>>> a12f125f4a (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 399f46d3 (.)
=======
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> b93ef594b4 (.)
=======
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
>>>>>>> ca9324a4 (.)
=======
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
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
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
=======
     * @param  string  $model_class  The class name of the model to create the factory for
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 21348520 (.)
=======
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
>>>>>>> ca9324a4 (.)
=======
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
=======
     * @param  string  $model_class  The class name of the model to create the factory for
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 88ea7103 (.)
=======
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
>>>>>>> 3310e9c6 (.)
=======
>>>>>>> 17684f52 (.)
=======
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
>>>>>>> 9db27d12 (.)
=======
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
>>>>>>> 5a14301c (.)
=======
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
=======
     * @param  string  $model_class  The class name of the model to create the factory for
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
=======
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
>>>>>>> ca9324a4 (.)
=======
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
>>>>>>> 5a14301c (.)
=======
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
=======
     * @param  string  $model_class  The class name of the model to create the factory for
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 399f46d3 (.)
     */
    public function generate(string $model_class): void
    {
        $model_name = class_basename($model_class);
        $module_name = Str::of($model_class)->between('Modules\\', '\Models\\')->toString();
        $artisan_cmd = 'module:make-model';
        $artisan_params = ['model' => $model_name, 'module' => $module_name];
        $res = Artisan::call($artisan_cmd, $artisan_params);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

        /*
         * $output=Artisan::output();
         *
         * dddx(
         * [
         * 'res'=>$res,
         * 'output'=>$output,
         * 'model_name'=>$model_name,
         * 'module_name'=>$module_name,
         * 'artisan_cmd'=>$artisan_cmd,
         * 'artisan_params'=>$artisan_params,
         * ]
         * );
         */
    }

<<<<<<< HEAD
=======
=======
        /*
        $output=Artisan::output();
=======
>>>>>>> b93ef594b4 (.)

        /*
         * $output=Artisan::output();
         *
         * dddx(
         * [
         * 'res'=>$res,
         * 'output'=>$output,
         * 'model_name'=>$model_name,
         * 'module_name'=>$module_name,
         * 'artisan_cmd'=>$artisan_cmd,
         * 'artisan_params'=>$artisan_params,
         * ]
         * );
         */
    }

<<<<<<< HEAD
    /**
     * @param  array<string, mixed>  $replaces
     */
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        /*
        $output=Artisan::output();

        dddx(
            [
                'res'=>$res,
                'output'=>$output,
                'model_name'=>$model_name,
                'module_name'=>$module_name,
                'artisan_cmd'=>$artisan_cmd,
                'artisan_params'=>$artisan_params,
            ]
        );
        */
    }

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    public function setCustomReplaces(array $replaces): self
    {
        $this->replaces = array_merge($this->replaces, $replaces);

        return $this;
    }
}
