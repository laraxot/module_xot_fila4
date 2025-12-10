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
    /** @var array<string, mixed> */
>>>>>>> f1d4085 (.)
    public array $replaces = [];

    /**
     * Execute the function with the given model class.
     *
<<<<<<< HEAD
     * @param string $model_class the class name of the model
     *
     * @return string
     * @param string $model_class the class name of the model
     *
     * @return string
     * @param string $model_class the class name of the model
     *
     * @return string
     * @param string $model_class the class name of the model
     *
     * @return string
     * @param string $model_class the class name of the model
     *
     * @return string
     * @param string $model_class the class name of the model
     *
     * @return string
     * @param string $model_class the class name of the model
     *
     * @return string
     * @param string $model_class the class name of the model
     *
     * @return string
     * @param string $model_class the class name of the model
     *
     * @return string
     * @param string $model_class the class name of the model
     *
     * @return string
     * @param string $model_class the class name of the model
     *
     * @return string
     * @param string $model_class the class name of the model
     *
     * @return string
     * @param string $model_class the class name of the model
     *
     * @return string
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
>>>>>>> 2f3197ab (.)
     * @param  string  $model_class  the class name of the model
     * @param  string  $model_class  the class name of the model
     * @param  string  $model_class  the class name of the model
     * @param  string  $model_class  the class name of the model
     * @param string $model_class the class name of the model
     *
     * @return string
     * @param  string  $model_class  the class name of the model
     * @param string $model_class the class name of the model
     *
     * @return string
     * @param string $model_class the class name of the model
     *
     * @return string
<<<<<<< HEAD
     * @param string $model_class the class name of the model
     *
     * @return string
     * @param string $model_class the class name of the model
     *
     * @return string
     * @param  string  $model_class  the class name of the model
     * @param string $model_class the class name of the model
     *
     * @return string
     * @param string $model_class the class name of the model
     *
     * @return string
     * @param string $model_class the class name of the model
     *
     * @return string
     * @param string $model_class the class name of the model
     *
     * @return string
     * @param  string  $model_class  the class name of the model
     * @param string $model_class the class name of the model
     *
     * @return string
     * @param string $model_class the class name of the model
     *
     * @return string
     * @param string $model_class the class name of the model
     *
     * @return string
     * @param string $model_class the class name of the model
     *
     * @return string
     * @param  string  $model_class  the class name of the model
     * @param string $model_class the class name of the model
     *
     * @return string
     * @param string $model_class the class name of the model
     *
     * @return string
     * @param string $model_class the class name of the model
     *
     * @return string
     * @param  string  $model_class  the class name of the model
     * @param string $model_class the class name of the model
     *
     * @return string
     * @param string $model_class the class name of the model
     *
     * @return string
     * @param string $model_class the class name of the model
     *
     * @return string
     * @param  string  $model_class  the class name of the model
     * @param  string  $model_class  the class name of the model
     * @param string $model_class the class name of the model
     *
     * @return string
     * @param string $model_class the class name of the model
     *
     * @return string
     * @param  string  $model_class  the class name of the model
     * @param string $model_class the class name of the model
     *
     * @return string
     * @param string $model_class the class name of the model
     *
     * @return string
     * @param string $model_class the class name of the model
     *
     * @return string
     * @param  string  $model_class  the class name of the model
     * @param string $model_class the class name of the model
     *
     * @return string
     * @param string $model_class the class name of the model
     *
     * @return string
     * @param  string  $model_class  the class name of the model
     * @param  string  $model_class  the class name of the model
     * @param string $model_class the class name of the model
     *
     * @return string
     * @param string $model_class the class name of the model
     *
     * @return string
     * @param  string  $model_class  the class name of the model
     * @param string $model_class the class name of the model
     *
     * @return string
=======
>>>>>>> ca9324a4 (.)
=======
     * @param string $model_class the class name of the model
     *
     * @return string
=======
     * @param  string  $model_class  the class name of the model
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
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
            if (method_exists($this, 'replace' . $k)) {
                $content = $this->{'replace' . $k}($v, $content);
            if (method_exists($this, 'replace' . $k)) {
                $content = $this->{'replace' . $k}($v, $content);
            if (method_exists($this, 'replace' . $k)) {
                $content = $this->{'replace' . $k}($v, $content);
            if (method_exists($this, 'replace' . $k)) {
                $content = $this->{'replace' . $k}($v, $content);
            if (method_exists($this, 'replace'.$k)) {
                $content = $this->{'replace'.$k}($v, $content);
            if (method_exists($this, 'replace'.$k)) {
                $content = $this->{'replace'.$k}($v, $content);
            Assert::string($k, 'Replace key must be string');
            if (method_exists($this, 'replace'.$k)) {
                $content = $this->{'replace'.$k}($v, $content);
                Assert::string($content, 'Content must remain string after replace');
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
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
>>>>>>> 2f3197ab (.)
            if (method_exists($this, 'replace' . $k)) {
                $content = $this->{'replace' . $k}($v, $content);
            if (method_exists($this, 'replace'.$k)) {
                $content = $this->{'replace'.$k}($v, $content);
            if (method_exists($this, 'replace'.$k)) {
                $content = $this->{'replace'.$k}($v, $content);
            if (method_exists($this, 'replace'.$k)) {
                $content = $this->{'replace'.$k}($v, $content);
            if (method_exists($this, 'replace' . $k)) {
                $content = $this->{'replace' . $k}($v, $content);
            if (method_exists($this, 'replace' . $k)) {
                $content = $this->{'replace' . $k}($v, $content);
            if (method_exists($this, 'replace'.$k)) {
                $content = $this->{'replace'.$k}($v, $content);
            if (method_exists($this, 'replace'.$k)) {
                $content = $this->{'replace'.$k}($v, $content);
            if (method_exists($this, 'replace'.$k)) {
                $content = $this->{'replace'.$k}($v, $content);
            if (method_exists($this, 'replace' . $k)) {
                $content = $this->{'replace' . $k}($v, $content);
            }

            // $content=$this->replace($content,$k,$v);
        }
        Assert::string($content, 'Content must be string before final replacements');
        $content = str_replace(' extends Model', ' extends BaseModel', $content);
        $content = is_string($content) ? str_replace(' extends Model', ' extends BaseModel', $content) : $content;
        $content = is_string($content) ? str_replace('use HasFactory;', '', $content) : $content;
        Assert::string($content, '['.__LINE__.']['.class_basename($this).']');
        $content = str_replace('use HasFactory;', '', $content);
        Assert::string($content, '['.__LINE__.']['.class_basename($this).']');
        Assert::string($content, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::string($content, '[' . __LINE__ . '][' . class_basename($this) . ']');
<<<<<<< HEAD
            if (method_exists($this, 'replace'.$k)) {
                $content = $this->{'replace'.$k}($v, $content);
                Assert::string($content, 'Content must be string after replace method');
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
>>>>>>> 7131bd09 (.)
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
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 2f3197ab (.)
            if (method_exists($this, 'replace' . $k)) {
                $content = $this->{'replace' . $k}($v, $content);
            }

            if (method_exists($this, 'replace'.$k)) {
                $content = $this->{'replace'.$k}($v, $content);
            }
            // $content=$this->replace($content,$k,$v);
        }
        $content = str_replace(' extends Model', ' extends BaseModel', $content);
        $content = str_replace('use HasFactory;', '', $content);
        Assert::string($content, '[' . __LINE__ . '][' . class_basename($this) . ']');
        Assert::string($content, '['.__LINE__.']['.class_basename($this).']');
        $content = str_replace(' extends Model', ' extends BaseModel', $content);
        $content = str_replace('use HasFactory;', '', $content);
        Assert::string($content, '[' . __LINE__ . '][' . class_basename($this) . ']');
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
            }
            // $content=$this->replace($content,$k,$v);
        }
        Assert::string($content, 'Content must be string before str_replace');
        $content = str_replace(' extends Model', ' extends BaseModel', $content);
        $content = str_replace('use HasFactory;', '', $content);
        Assert::string($content, '['.__LINE__.']['.class_basename($this).']');
<<<<<<< HEAD
        $content = str_replace(' extends Model', ' extends BaseModel', $content);
        $content = str_replace('use HasFactory;', '', $content);
        Assert::string($content, '[' . __LINE__ . '][' . class_basename($this) . ']');
        $content = str_replace(' extends Model', ' extends BaseModel', $content);
        $content = str_replace('use HasFactory;', '', $content);
        Assert::string($content, '[' . __LINE__ . '][' . class_basename($this) . ']');
        $content = str_replace(' extends Model', ' extends BaseModel', $content);
        $content = str_replace('use HasFactory;', '', $content);
        Assert::string($content, '['.__LINE__.']['.class_basename($this).']');
        $content = str_replace(' extends Model', ' extends BaseModel', $content);
        $content = str_replace('use HasFactory;', '', $content);
        Assert::string($content, '['.__LINE__.']['.class_basename($this).']');
        $content = str_replace(' extends Model', ' extends BaseModel', $content);
        $content = str_replace('use HasFactory;', '', $content);
        Assert::string($content, '[' . __LINE__ . '][' . class_basename($this) . ']');
        $content = str_replace(' extends Model', ' extends BaseModel', $content);
        $content = str_replace('use HasFactory;', '', $content);
        Assert::string($content, '['.__LINE__.']['.class_basename($this).']');
        $content = str_replace(' extends Model', ' extends BaseModel', $content);
        $content = str_replace('use HasFactory;', '', $content);
        Assert::string($content, '['.__LINE__.']['.class_basename($this).']');
        $content = str_replace(' extends Model', ' extends BaseModel', $content);
        $content = str_replace('use HasFactory;', '', $content);
        Assert::string($content, '[' . __LINE__ . '][' . class_basename($this) . ']');
=======
>>>>>>> f1d4085 (.)
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
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)

        if ($content !== $content_old) {
            File::put($filename, $content);
        }

        return $namespace;
    }

    public function replaceDummyTable(string $value, string $content): string
    {
        $table_start = mb_strpos($content, 'protected $table');
<<<<<<< HEAD
        Assert::integer(
            $fillable_start = mb_strpos($content, 'protected $fillable'),
        $fillable_end = mb_strpos($content, '];', $fillable_start);
        if (false === $table_start) {
            $before = mb_substr($content, 0, $fillable_end + 2);
            $after = mb_substr($content, $fillable_end + 2);
            $content = $before . PHP_EOL . '    protected $table = "' . $value . '";' . PHP_EOL . $after;
        Assert::integer($fillable_start = mb_strpos($content, 'protected $fillable'), '['.__LINE__.']['.class_basename($this).']');
        $fillable_end = mb_strpos($content, '];', $fillable_start);
        Assert::integer($fillable_start = mb_strpos($content, 'protected $fillable'), '['.__LINE__.']['.class_basename($this).']');
        $fillable_end = mb_strpos($content, '];', $fillable_start);
        Assert::integer($fillable_start = mb_strpos($content, 'protected $fillable'), '['.__LINE__.']['.class_basename($this).']');
        $fillable_end = mb_strpos($content, '];', $fillable_start);
        Assert::integer($fillable_start = mb_strpos($content, 'protected $fillable'), '['.__LINE__.']['.class_basename($this).']');
        $fillable_end = mb_strpos($content, '];', $fillable_start);
        if ($table_start === false) {
            $before = mb_substr($content, 0, $fillable_end + 2);
            $after = mb_substr($content, $fillable_end + 2);
            $content = $before.PHP_EOL.'    protected $table = "'.$value.'";'.PHP_EOL.$after;
            '[' . __LINE__ . '][' . class_basename($this) . ']',
        );
        $fillable_end = mb_strpos($content, '];', $fillable_start);
            '[' . __LINE__ . '][' . class_basename($this) . ']',
        );
        $fillable_end = mb_strpos($content, '];', $fillable_start);
            '[' . __LINE__ . '][' . class_basename($this) . ']',
        );
        $fillable_end = mb_strpos($content, '];', $fillable_start);
        if (false === $table_start) {
            $before = mb_substr($content, 0, $fillable_end + 2);
            $after = mb_substr($content, $fillable_end + 2);
            $content = $before . PHP_EOL . '    protected $table = "' . $value . '";' . PHP_EOL . $after;
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
=======
>>>>>>> 2f3197ab (.)
        Assert::integer($fillable_start = mb_strpos($content, 'protected $fillable'), '['.__LINE__.']['.class_basename($this).']');
        Assert::integer($fillable_start = mb_strpos($content, 'protected $fillable'), '['.__LINE__.']['.class_basename($this).']');
        $fillable_end = mb_strpos($content, '];', $fillable_start);
        if (false === $table_start) {
            $before = mb_substr($content, 0, $fillable_end + 2);
            $after = mb_substr($content, $fillable_end + 2);
            $content = $before . PHP_EOL . '    protected $table = "' . $value . '";' . PHP_EOL . $after;
            $content = $before.PHP_EOL.'    protected $table = "'.$value.'";'.PHP_EOL.$after;
<<<<<<< HEAD
        Assert::integer($fillable_start = mb_strpos($content, 'protected $fillable'), '['.__LINE__.']['.class_basename($this).']');
        $fillable_end = mb_strpos($content, '];', $fillable_start);
        Assert::integer($fillable_start = mb_strpos($content, 'protected $fillable'), '['.__LINE__.']['.class_basename($this).']');
        $fillable_end = mb_strpos($content, '];', $fillable_start);
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
>>>>>>> 7131bd09 (.)
=======
>>>>>>> 2f3197ab (.)
        Assert::integer($fillable_start = mb_strpos($content, 'protected $fillable'), '['.__LINE__.']['.class_basename($this).']');
        $fillable_end = mb_strpos($content, '];', $fillable_start);
        if ($table_start === false) {
            $before = mb_substr($content, 0, $fillable_end + 2);
            $after = mb_substr($content, $fillable_end + 2);
            $content = $before.PHP_EOL.'    protected $table = "'.$value.'";'.PHP_EOL.$after;
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
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
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
        }

        return $content;
    }

    /**
     * Create a factory for the given model class.
     *
<<<<<<< HEAD
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
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
>>>>>>> 2f3197ab (.)
     * @param  string  $model_class  The class name of the model to create the factory for
     * @param  string  $model_class  The class name of the model to create the factory for
     * @param  string  $model_class  The class name of the model to create the factory for
     * @param  string  $model_class  The class name of the model to create the factory for
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param  string  $model_class  The class name of the model to create the factory for
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
<<<<<<< HEAD
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param  string  $model_class  The class name of the model to create the factory for
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param  string  $model_class  The class name of the model to create the factory for
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param  string  $model_class  The class name of the model to create the factory for
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param  string  $model_class  The class name of the model to create the factory for
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param  string  $model_class  The class name of the model to create the factory for
     * @param  string  $model_class  The class name of the model to create the factory for
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param  string  $model_class  The class name of the model to create the factory for
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param  string  $model_class  The class name of the model to create the factory for
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param  string  $model_class  The class name of the model to create the factory for
     * @param  string  $model_class  The class name of the model to create the factory for
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param  string  $model_class  The class name of the model to create the factory for
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
=======
>>>>>>> ca9324a4 (.)
=======
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
=======
     * @param  string  $model_class  The class name of the model to create the factory for
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
     */
    public function generate(string $model_class): void
    {
        $model_name = class_basename($model_class);
        $module_name = Str::of($model_class)->between('Modules\\', '\Models\\')->toString();
        $artisan_cmd = 'module:make-model';
        $artisan_params = ['model' => $model_name, 'module' => $module_name];
        $res = Artisan::call($artisan_cmd, $artisan_params);
<<<<<<< HEAD

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

=======
=======
>>>>>>> 2f3197ab (.)
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

<<<<<<< HEAD
=======
    /**
     * @param  array<string, mixed>  $replaces
     */
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
    public function setCustomReplaces(array $replaces): self
    {
        $this->replaces = array_merge($this->replaces, $replaces);

        return $this;
    }
}
