<?php

declare(strict_types=1);

namespace Modules\Xot\Datas;

use Exception;
use Illuminate\Support\Facades\File;
use Livewire\Wireable;
use Spatie\LaravelData\Concerns\WireableData;
use Spatie\LaravelData\Data;

/**
 * Undocumented class.
 */
class EnvData extends Data implements Wireable
{
    use WireableData;

    public string $app_url = 'http://localhost';

    public bool $debugbar_enabled = false;

    public string $google_maps_api_key = '';

    public string $telegram_bot_token = '';

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    private static ?self $instance = null;

    public static function make(): self
    {
        if (! self::$instance) {
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
    private static null|self $instance = null;

    public static function make(): self
    {
        if (!self::$instance) {
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
=======
>>>>>>> origin/develop
    private static ?self $instance = null;

    public static function make(): self
    {
        if (! self::$instance) {
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    private static null|self $instance = null;

    public static function make(): self
    {
        if (!self::$instance) {
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
            $data = [];

            foreach ($_ENV as $k => $v) {
                $k = mb_strtolower($k);
<<<<<<< HEAD
<<<<<<< HEAD
                if ($v === 'false') {
                    $v = false;
                }
                if ($v === 'true') {
=======
=======
>>>>>>> 5a14301c (.)
                if ('false' === $v) {
                    $v = false;
                }
                if ('true' === $v) {
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
                    $v = true;
                }
                $data[$k] = $v;
            }

            self::$instance = self::from($data);
        }

        return self::$instance;
    }

    public function update(array $data): void
    {
        $env_path = base_path('.env');
        $env_content = File::get($env_path);

        foreach ($data as $k => $v) {
<<<<<<< HEAD
<<<<<<< HEAD
            if ($v !== $this->$k && (is_bool($v) || is_int($v) || is_string($v))) {
=======
            if ($this->$k !== $v && (is_bool($v) || is_int($v) || is_string($v))) {
>>>>>>> 5a14301c (.)
=======
            if ($this->$k !== $v && (is_bool($v) || is_int($v) || is_string($v))) {
>>>>>>> 5a14301c (.)
                $env_content = $this->updateVar($k, $v, $env_content);
            }
        }

        File::put($env_path, $env_content);
    }

    public function updateVar(string $key, int|bool|string $value, string $env_content): string
    {
        $key = str($key)->upper()->toString();
        $replace = $this->getLine($key, $value);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $pos_start = mb_strpos($env_content, $key.'=');
        if ($pos_start === false) {
            // throw new \Exception('['.__LINE__.']['.class_basename($this).']');
            return $env_content."\n".$replace;
        }
        $pos_end = mb_strpos($env_content, "\n", $pos_start);
        if ($pos_end === false) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
=======
=======
>>>>>>> 3fbbf1f5 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
        $pos_start = mb_strpos($env_content, $key . '=');
        if (false === $pos_start) {
            // throw new \Exception('['.__LINE__.']['.class_basename($this).']');
            return $env_content . "\n" . $replace;
        }
        $pos_end = mb_strpos($env_content, "\n", $pos_start);
        if (false === $pos_end) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
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
        $pos_start = mb_strpos($env_content, $key.'=');
=======
        $pos_start = mb_strpos($env_content, $key . '=');
>>>>>>> b93ef594b4 (.)
        if (false === $pos_start) {
            // throw new \Exception('['.__LINE__.']['.class_basename($this).']');
            return $env_content . "\n" . $replace;
        }
        $pos_end = mb_strpos($env_content, "\n", $pos_start);
        if (false === $pos_end) {
<<<<<<< HEAD
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> a12f125f4a (.)
=======
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> b93ef594b4 (.)
=======
        $pos_start = mb_strpos($env_content, $key.'=');
        if (false === $pos_start) {
            // throw new \Exception('['.__LINE__.']['.class_basename($this).']');
            return $env_content."\n".$replace;
        }
        $pos_end = mb_strpos($env_content, "\n", $pos_start);
        if (false === $pos_end) {
            throw new \Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
        }

        $length = $pos_end - $pos_start;
        $find = mb_substr($env_content, $pos_start, $length + 1);

<<<<<<< HEAD
<<<<<<< HEAD
        return str($env_content)->replace($find, $replace)->toString();
=======
        $env_content = str($env_content)->replace($find, $replace)->toString();

        return $env_content;
>>>>>>> 5a14301c (.)
=======
        $env_content = str($env_content)->replace($find, $replace)->toString();

        return $env_content;
>>>>>>> 5a14301c (.)
    }

    public function getLine(string $key, int|bool|string $value): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $replace = $key.'=';
=======
        $replace = $key . '=';
>>>>>>> 5a14301c (.)
=======
        $replace = $key . '=';
>>>>>>> 3fbbf1f5 (.)
=======
        $replace = $key . '=';
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $replace = $key . '=';
=======
        $replace = $key.'=';
>>>>>>> a12f125f4a (.)
=======
        $replace = $key . '=';
>>>>>>> b93ef594b4 (.)
=======
        $replace = $key.'=';
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
        $replace = $key . '=';
>>>>>>> ca9324a4 (.)
=======
        $replace = $key . '=';
>>>>>>> 5a14301c (.)
        if (is_bool($value)) {
            $replace .= $value ? 'true' : 'false';
        }
        if (is_string($value)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $replace .= '"'.$value.'"';
=======
            $replace .= '"' . $value . '"';
>>>>>>> 5a14301c (.)
=======
            $replace .= '"' . $value . '"';
>>>>>>> 3fbbf1f5 (.)
=======
            $replace .= '"' . $value . '"';
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $replace .= '"' . $value . '"';
=======
            $replace .= '"'.$value.'"';
>>>>>>> a12f125f4a (.)
=======
            $replace .= '"' . $value . '"';
>>>>>>> b93ef594b4 (.)
=======
            $replace .= '"'.$value.'"';
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
            $replace .= '"' . $value . '"';
>>>>>>> ca9324a4 (.)
=======
            $replace .= '"' . $value . '"';
>>>>>>> 5a14301c (.)
        }
        if (is_int($value)) {
            $replace .= $value;
        }
        $replace .= "\n";

        return $replace;
    }
}
