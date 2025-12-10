<?php

declare(strict_types=1);

namespace Modules\Xot\Datas;

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
=======
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
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
>>>>>>> 218dfed3 (.)
    private static null|self $instance = null;

    public static function make(): self
    {
        if (!self::$instance) {
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
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
=======
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 7131bd09 (.)
>>>>>>> 2f3197ab (.)
    private static ?self $instance = null;

    public static function make(): self
    {
        if (! self::$instance) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> ed734516 (.)
>>>>>>> 2f3197ab (.)
    private static null|self $instance = null;

    public static function make(): self
    {
        if (!self::$instance) {
    private static ?self $instance = null;

    public static function make(): self
    {
        if (! self::$instance) {
    private static null|self $instance = null;

    public static function make(): self
    {
        if (!self::$instance) {
<<<<<<< HEAD
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
            $data = [];

            foreach ($_ENV as $k => $v) {
                $k = mb_strtolower($k);
                if ($v === 'false') {
                    $v = false;
                }
                if ($v === 'true') {
                if ('false' === $v) {
                    $v = false;
                }
                if ('true' === $v) {
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
            if ($this->$k !== $v && (is_bool($v) || is_int($v) || is_string($v))) {
            if ($this->$k !== $v && (is_bool($v) || is_int($v) || is_string($v))) {
            if ($this->$k !== $v && (is_bool($v) || is_int($v) || is_string($v))) {
            if ($this->$k !== $v && (is_bool($v) || is_int($v) || is_string($v))) {
            if ($this->$k !== $v && (is_bool($v) || is_int($v) || is_string($v))) {
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
        $pos_start = mb_strpos($env_content, $key.'=');
        if ($pos_start === false) {
        $pos_start = mb_strpos($env_content, $key . '=');
        if (false === $pos_start) {
            // throw new \Exception('['.__LINE__.']['.class_basename($this).']');
            return $env_content . "\n" . $replace;
        }
        $pos_end = mb_strpos($env_content, "\n", $pos_start);
            // throw new \Exception('['.__LINE__.']['.class_basename($this).']');
            return $env_content."\n".$replace;
        }
        $pos_end = mb_strpos($env_content, "\n", $pos_start);
        if (false === $pos_end) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
        if (false === $pos_end) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
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
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
        $pos_start = mb_strpos($env_content, $key.'=');
        if ($pos_start === false) {
            // throw new \Exception('['.__LINE__.']['.class_basename($this).']');
            return $env_content."\n".$replace;
        }
        $pos_end = mb_strpos($env_content, "\n", $pos_start);
        if ($pos_end === false) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
<<<<<<< HEAD
=======
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
>>>>>>> 218dfed3 (.)
        $pos_start = mb_strpos($env_content, $key . '=');
        if (false === $pos_start) {
            // throw new \Exception('['.__LINE__.']['.class_basename($this).']');
            return $env_content . "\n" . $replace;
        }
        $pos_end = mb_strpos($env_content, "\n", $pos_start);
        if (false === $pos_end) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
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
>>>>>>> 5a14301c (.)
=======
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 88ea7103 (.)
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
        $pos_start = mb_strpos($env_content, $key.'=');
        $pos_start = mb_strpos($env_content, $key . '=');
        if (false === $pos_start) {
            // throw new \Exception('['.__LINE__.']['.class_basename($this).']');
            return $env_content . "\n" . $replace;
        }
        $pos_end = mb_strpos($env_content, "\n", $pos_start);
        if (false === $pos_end) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
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
        $pos_start = mb_strpos($env_content, $key.'=');
        if (false === $pos_start) {
            // throw new \Exception('['.__LINE__.']['.class_basename($this).']');
            return $env_content."\n".$replace;
        }
        $pos_end = mb_strpos($env_content, "\n", $pos_start);
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
            throw new \Exception('['.__LINE__.']['.class_basename($this).']');
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
            throw new \Exception('['.__LINE__.']['.class_basename($this).']');
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
            throw new \Exception('['.__LINE__.']['.class_basename($this).']');
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
            throw new \Exception('['.__LINE__.']['.class_basename($this).']');
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
            throw new \Exception('['.__LINE__.']['.class_basename($this).']');
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
            throw new \Exception('['.__LINE__.']['.class_basename($this).']');
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
            throw new \Exception('['.__LINE__.']['.class_basename($this).']');
        if ($pos_end === false) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
        if (false === $pos_end) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            throw new \Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 2f3197ab (.)
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
<<<<<<< HEAD
        if (false === $pos_end) {
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
>>>>>>> 218dfed3 (.)
            throw new \Exception('['.__LINE__.']['.class_basename($this).']');
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
=======
>>>>>>> 3310e9c6 (.)
=======
            throw new \Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> f1d4085 (.)
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
            throw new \Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
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
        }

        $length = $pos_end - $pos_start;
        $find = mb_substr($env_content, $pos_start, $length + 1);

        $env_content = str($env_content)->replace($find, $replace)->toString();

        return $env_content;
        $env_content = str($env_content)->replace($find, $replace)->toString();

        return $env_content;
        $env_content = str($env_content)->replace($find, $replace)->toString();

        return $env_content;
        $env_content = str($env_content)->replace($find, $replace)->toString();

        return $env_content;
        $env_content = str($env_content)->replace($find, $replace)->toString();

        return $env_content;
    }

    public function getLine(string $key, int|bool|string $value): string
    {
<<<<<<< HEAD
        $replace = $key . '=';
        $replace = $key . '=';
        $replace = $key . '=';
        $replace = $key . '=';
        $replace = $key . '=';
        $replace = $key . '=';
        $replace = $key . '=';
        $replace = $key . '=';
        $replace = $key . '=';
        $replace = $key . '=';
        $replace = $key . '=';
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
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
        $replace = $key.'=';
        $replace = $key . '=';
        $replace = $key . '=';
        $replace = $key.'=';
        $replace = $key.'=';
<<<<<<< HEAD
        $replace = $key.'=';
        $replace = $key.'=';
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
        $replace = $key . '=';
>>>>>>> ca9324a4 (.)
=======
        $replace = $key . '=';
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
        $replace = $key . '=';
=======
        $replace = $key.'=';
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
        $replace = $key . '=';
        $replace = $key.'=';
        $replace = $key . '=';
        $replace = $key . '=';
        $replace = $key . '=';
<<<<<<< HEAD
        $replace = $key . '=';
        $replace = $key.'=';
        $replace = $key . '=';
        $replace = $key . '=';
        $replace = $key . '=';
        $replace = $key . '=';
        $replace = $key . '=';
        $replace = $key.'=';
        $replace = $key . '=';
        $replace = $key . '=';
        $replace = $key . '=';
        $replace = $key . '=';
        $replace = $key . '=';
        $replace = $key.'=';
        $replace = $key . '=';
        $replace = $key . '=';
        $replace = $key . '=';
        $replace = $key . '=';
        $replace = $key.'=';
        $replace = $key . '=';
        $replace = $key . '=';
        $replace = $key . '=';
        $replace = $key . '=';
        $replace = $key . '=';
        $replace = $key.'=';
        $replace = $key . '=';
        $replace = $key.'=';
        $replace = $key . '=';
        $replace = $key . '=';
        $replace = $key.'=';
        $replace = $key . '=';
        $replace = $key . '=';
        $replace = $key . '=';
        $replace = $key . '=';
        $replace = $key.'=';
        $replace = $key . '=';
        $replace = $key . '=';
        $replace = $key . '=';
        $replace = $key . '=';
        $replace = $key.'=';
        $replace = $key.'=';
        $replace = $key . '=';
        $replace = $key . '=';
        $replace = $key.'=';
        $replace = $key . '=';
        $replace = $key . '=';
=======
>>>>>>> ca9324a4 (.)
=======
        $replace = $key . '=';
=======
        $replace = $key.'=';
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
        $replace = $key . '=';
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
        if (is_bool($value)) {
            $replace .= $value ? 'true' : 'false';
        }
        if (is_string($value)) {
<<<<<<< HEAD
            $replace .= '"' . $value . '"';
            $replace .= '"' . $value . '"';
            $replace .= '"' . $value . '"';
            $replace .= '"' . $value . '"';
            $replace .= '"' . $value . '"';
            $replace .= '"' . $value . '"';
            $replace .= '"' . $value . '"';
            $replace .= '"' . $value . '"';
            $replace .= '"' . $value . '"';
            $replace .= '"' . $value . '"';
            $replace .= '"' . $value . '"';
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
>>>>>>> 2f3197ab (.)
=======
>>>>>>> 218dfed3 (.)
            $replace .= '"'.$value.'"';
            $replace .= '"' . $value . '"';
            $replace .= '"' . $value . '"';
            $replace .= '"'.$value.'"';
            $replace .= '"'.$value.'"';
<<<<<<< HEAD
            $replace .= '"'.$value.'"';
            $replace .= '"'.$value.'"';
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 399f46d3 (.)
=======
            $replace .= '"' . $value . '"';
>>>>>>> ca9324a4 (.)
=======
            $replace .= '"' . $value . '"';
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
            $replace .= '"' . $value . '"';
=======
            $replace .= '"'.$value.'"';
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ed734516 (.)
=======
=======
>>>>>>> 218dfed3 (.)
            $replace .= '"' . $value . '"';
            $replace .= '"'.$value.'"';
            $replace .= '"' . $value . '"';
            $replace .= '"' . $value . '"';
            $replace .= '"' . $value . '"';
<<<<<<< HEAD
            $replace .= '"' . $value . '"';
            $replace .= '"'.$value.'"';
            $replace .= '"' . $value . '"';
            $replace .= '"' . $value . '"';
            $replace .= '"' . $value . '"';
            $replace .= '"' . $value . '"';
            $replace .= '"' . $value . '"';
            $replace .= '"'.$value.'"';
            $replace .= '"' . $value . '"';
            $replace .= '"' . $value . '"';
            $replace .= '"' . $value . '"';
            $replace .= '"' . $value . '"';
            $replace .= '"' . $value . '"';
            $replace .= '"'.$value.'"';
            $replace .= '"' . $value . '"';
            $replace .= '"' . $value . '"';
            $replace .= '"' . $value . '"';
            $replace .= '"' . $value . '"';
            $replace .= '"'.$value.'"';
            $replace .= '"' . $value . '"';
            $replace .= '"' . $value . '"';
            $replace .= '"' . $value . '"';
            $replace .= '"' . $value . '"';
            $replace .= '"' . $value . '"';
            $replace .= '"'.$value.'"';
            $replace .= '"' . $value . '"';
            $replace .= '"'.$value.'"';
            $replace .= '"' . $value . '"';
            $replace .= '"' . $value . '"';
            $replace .= '"'.$value.'"';
            $replace .= '"' . $value . '"';
            $replace .= '"' . $value . '"';
            $replace .= '"' . $value . '"';
            $replace .= '"' . $value . '"';
            $replace .= '"'.$value.'"';
            $replace .= '"' . $value . '"';
            $replace .= '"' . $value . '"';
            $replace .= '"' . $value . '"';
            $replace .= '"' . $value . '"';
            $replace .= '"'.$value.'"';
            $replace .= '"'.$value.'"';
            $replace .= '"' . $value . '"';
            $replace .= '"' . $value . '"';
            $replace .= '"'.$value.'"';
            $replace .= '"' . $value . '"';
            $replace .= '"' . $value . '"';
=======
>>>>>>> ca9324a4 (.)
=======
            $replace .= '"' . $value . '"';
=======
            $replace .= '"'.$value.'"';
>>>>>>> f1d4085 (.)
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
=======
            $replace .= '"' . $value . '"';
>>>>>>> 73eab74 (.)
>>>>>>> 88ea7103 (.)
>>>>>>> 218dfed3 (.)
        }
        if (is_int($value)) {
            $replace .= $value;
        }
        $replace .= "\n";

        return $replace;
    }
}
