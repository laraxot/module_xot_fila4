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
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
    /** @var array<string, mixed> */
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
>>>>>>> 38b70c7ba (.)
    public array $replaces = [];

    /**
     * Execute the function with the given model class.
     *
<<<<<<< HEAD
     * @param  string  $model_class  the class name of the model
=======
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> a67e542f (.)
     * @param  string  $model_class  the class name of the model
=======
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
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
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string $model_class the class name of the model
     *
     * @return string
=======
>>>>>>> ce6fc085 (.)
     * @param  string  $model_class  the class name of the model
     * @param  string  $model_class  the class name of the model
<<<<<<< HEAD
     * @param  string  $model_class  the class name of the model
     * @param string $model_class the class name of the model
     *
     * @return string
     * @param  string  $model_class  the class name of the model
=======
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
>>>>>>> 17684f52 (.)
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
>>>>>>> 17684f52 (.)
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
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5cf46378 (.)
     * @param  string  $model_class  the class name of the model
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
     * @param  string  $model_class  the class name of the model
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
     * @param string $model_class the class name of the model
     *
     * @return string
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 218dfed3 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
     * @param string $model_class the class name of the model
     *
     * @return string
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
     * @param string $model_class the class name of the model
     *
     * @return string
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
     * @param string $model_class the class name of the model
     *
     * @return string
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
     * @param  string  $model_class  the class name of the model
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
     * @param  string  $model_class  the class name of the model
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
     */
    public function execute(string $model_class): string
    {
        Assert::classExists($model_class);

        $namespace = str_replace('\\', '/', $model_class);

        $this->generate($model_class);
        $filename = app(GetFilenameByClassnameAction::class)->execute($model_class);

        $content_old = File::get($filename);
        Assert::string($content_old, 'File content must be a string');

        $content = $content_old;
        foreach ($this->replaces as $k => $v) {
<<<<<<< HEAD
            if (method_exists($this, 'replace'.$k)) {
                $content = $this->{'replace'.$k}($v, $content);
=======
<<<<<<< HEAD
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
<<<<<<< HEAD
            if (method_exists($this, 'replace'.$k)) {
                $content = $this->{'replace'.$k}($v, $content);
            if (method_exists($this, 'replace'.$k)) {
                $content = $this->{'replace'.$k}($v, $content);
            if (method_exists($this, 'replace'.$k)) {
                $content = $this->{'replace'.$k}($v, $content);
            if (method_exists($this, 'replace' . $k)) {
                $content = $this->{'replace' . $k}($v, $content);
=======
>>>>>>> 5a14301c (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
            if (method_exists($this, 'replace'.$k)) {
                $content = $this->{'replace'.$k}($v, $content);
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
            Assert::string($k, 'Replace key must be string');
            if (method_exists($this, 'replace'.$k)) {
                $content = $this->{'replace'.$k}($v, $content);
                Assert::string($content, 'Content must remain string after replace');
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
            if (method_exists($this, 'replace' . $k)) {
                $content = $this->{'replace' . $k}($v, $content);
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
            if (method_exists($this, 'replace'.$k)) {
                $content = $this->{'replace'.$k}($v, $content);
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
            if (method_exists($this, 'replace'.$k)) {
                $content = $this->{'replace'.$k}($v, $content);
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
            }

            // $content=$this->replace($content,$k,$v);
        }
<<<<<<< HEAD
        $content = is_string($content) ? str_replace(' extends Model', ' extends BaseModel', $content) : $content;
        $content = is_string($content) ? str_replace('use \Modules\Xot\Models\Traits\HasXotFactory;', '', $content) : $content;
        Assert::string($content, '['.__LINE__.']['.class_basename($this).']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($content, 'Content must be string before final replacements');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $content = is_string($content) ? str_replace(' extends Model', ' extends BaseModel', $content) : $content;
        $content = is_string($content) ? str_replace('use \Modules\Xot\Models\Traits\HasXotFactory;', '', $content) : $content;
        Assert::string($content, '['.__LINE__.']['.class_basename($this).']');
=======
>>>>>>> 7468a7d2 (.)
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
>>>>>>> 88ea7103 (.)
=======
=======
>>>>>>> 17684f52 (.)
=======
=======
>>>>>>> b7afadf9 (.)
        Assert::string($content, 'Content must be string before final replacements');
        $content = str_replace(' extends Model', ' extends BaseModel', $content);
<<<<<<< HEAD
        $content = str_replace('use \Modules\Xot\Models\Traits\HasXotFactory;', '', $content);
        Assert::string($content, '['.__LINE__.']['.class_basename($this).']');
=======
        $content = str_replace('use HasFactory;', '', $content);
<<<<<<< HEAD
        Assert::string($content, '[' . __LINE__ . '][' . class_basename($this) . ']');
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
<<<<<<< HEAD
        Assert::string($content, '['.__LINE__.']['.class_basename($this).']');
=======
        Assert::string($content, '[' . __LINE__ . '][' . class_basename($this) . ']');
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 399f46d3 (.)
=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
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
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
        $content = str_replace(' extends Model', ' extends BaseModel', $content);
        $content = str_replace('use HasFactory;', '', $content);
        Assert::string($content, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
        $content = is_string($content) ? str_replace(' extends Model', ' extends BaseModel', $content) : $content;
        $content = is_string($content) ? str_replace('use \Modules\Xot\Models\Traits\HasXotFactory;', '', $content) : $content;
        Assert::string($content, '['.__LINE__.']['.class_basename($this).']');
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)

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
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
>>>>>>> 38b70c7ba (.)
        Assert::integer(
            $fillable_start = mb_strpos($content, 'protected $fillable'),
<<<<<<< HEAD
=======
            '['.__LINE__.']['.class_basename($this).']',
        );
>>>>>>> 551c768c4 (.)
        $fillable_end = mb_strpos($content, '];', $fillable_start);
<<<<<<< HEAD
        if ($table_start === false) {
            $before = mb_substr($content, 0, $fillable_end + 2);
            $after = mb_substr($content, $fillable_end + 2);
            $content = $before.PHP_EOL.'    protected $table = "'.$value.'";'.PHP_EOL.$after;
=======
<<<<<<< HEAD
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
<<<<<<< HEAD
=======
        if (false === $table_start) {
            $before = mb_substr($content, 0, $fillable_end + 2);
            $after = mb_substr($content, $fillable_end + 2);
            $content = $before . PHP_EOL . '    protected $table = "' . $value . '";' . PHP_EOL . $after;
<<<<<<< HEAD
=======
        Assert::integer($fillable_start = mb_strpos($content, 'protected $fillable'), '['.__LINE__.']['.class_basename($this).']');
        $fillable_end = mb_strpos($content, '];', $fillable_start);
>>>>>>> d2b0a27 (.)
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
        if ($table_start === false) {
            $before = mb_substr($content, 0, $fillable_end + 2);
            $after = mb_substr($content, $fillable_end + 2);
            $content = $before.PHP_EOL.'    protected $table = "'.$value.'";'.PHP_EOL.$after;
<<<<<<< HEAD
<<<<<<< HEAD
            '[' . __LINE__ . '][' . class_basename($this) . ']',
        );
        $fillable_end = mb_strpos($content, '];', $fillable_start);
            '[' . __LINE__ . '][' . class_basename($this) . ']',
        );
        $fillable_end = mb_strpos($content, '];', $fillable_start);
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> 7468a7d2 (.)
            '[' . __LINE__ . '][' . class_basename($this) . ']',
        );
        $fillable_end = mb_strpos($content, '];', $fillable_start);
=======
=======
<<<<<<< HEAD
=======
>>>>>>> b7afadf9 (.)
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
>>>>>>> 17684f52 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 218dfed3 (.)
        Assert::integer($fillable_start = mb_strpos($content, 'protected $fillable'), '['.__LINE__.']['.class_basename($this).']');
        $fillable_end = mb_strpos($content, '];', $fillable_start);
=======
=======
        Assert::integer($fillable_start = mb_strpos($content, 'protected $fillable'), '['.__LINE__.']['.class_basename($this).']');
        $fillable_end = mb_strpos($content, '];', $fillable_start);
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
        if ($table_start === false) {
            $before = mb_substr($content, 0, $fillable_end + 2);
            $after = mb_substr($content, $fillable_end + 2);
            $content = $before.PHP_EOL.'    protected $table = "'.$value.'";'.PHP_EOL.$after;
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 5cf46378 (.)
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
=======
>>>>>>> b7afadf9 (.)
<<<<<<< HEAD
=======
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
>>>>>>> 53d6a6ba (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
        }

        return $content;
    }

    /**
     * Create a factory for the given model class.
     *
<<<<<<< HEAD
     * @param  string  $model_class  The class name of the model to create the factory for
=======
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
>>>>>>> a67e542f (.)
     * @param  string  $model_class  The class name of the model to create the factory for
=======
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 7468a7d2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
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
>>>>>>> 17684f52 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
=======
>>>>>>> ce6fc085 (.)
     * @param  string  $model_class  The class name of the model to create the factory for
     * @param  string  $model_class  The class name of the model to create the factory for
<<<<<<< HEAD
     * @param  string  $model_class  The class name of the model to create the factory for
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
     * @param  string  $model_class  The class name of the model to create the factory for
=======
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
>>>>>>> 17684f52 (.)
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
>>>>>>> 17684f52 (.)
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
>>>>>>> 88ea7103 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 5cf46378 (.)
     * @param  string  $model_class  The class name of the model to create the factory for
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
     * @param  string  $model_class  The class name of the model to create the factory for
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> ab8cc3f3 (.)
=======
>>>>>>> b7afadf9 (.)
=======
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
>>>>>>> 73eab74 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 21348520 (.)
=======
>>>>>>> 218dfed3 (.)
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
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
=======
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
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
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
>>>>>>> 9db27d12 (.)
<<<<<<< HEAD
>>>>>>> 091f883c (.)
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
=======
>>>>>>> d2b0a27 (.)
>>>>>>> b7afadf9 (.)
=======
     * @param string $model_class The class name of the model to create the factory for
     *
     * @return void
>>>>>>> 300ef70 (.)
<<<<<<< HEAD
>>>>>>> 6dcebf8a (.)
=======
     * @param  string  $model_class  The class name of the model to create the factory for
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
     * @param  string  $model_class  The class name of the model to create the factory for
>>>>>>> 551c768c4 (.)
>>>>>>> 38b70c7ba (.)
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
=======
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
>>>>>>> 38b70c7ba (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
        /*
        $output=Artisan::output();
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> ce6fc085 (.)

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
>>>>>>> 218dfed3 (.)
=======
=======
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
    /**
     * @param  array<string, mixed>  $replaces
     */
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> ce6fc085 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 5cf46378 (.)
    /**
     * @param  array<string, mixed>  $replaces
     */
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
>>>>>>> 38b70c7ba (.)
    public function setCustomReplaces(array $replaces): self
    {
        $this->replaces = array_merge($this->replaces, $replaces);

        return $this;
    }
}
