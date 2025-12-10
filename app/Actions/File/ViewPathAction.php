<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\File;

use Illuminate\Support\Str;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class ViewPathAction
{
    use QueueableAction;

    public function execute(string $key): string
    {
        $ns_name = Str::before($key, '::');
        $stringable = Str::of($key)->after('::')->toString();
        $ns_dir = app(GetViewNameSpacePathAction::class)->execute($ns_name);
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
        Assert::string(
            $group_dir = Str::replace('.', '/', $stringable),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($group_dir = Str::replace('.', '/', $stringable), '['.__LINE__.']['.class_basename(static::class).']');
        $res = $ns_dir.'/'.$group_dir.'.blade.php';
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 551c768c4 (.)
            '['.__LINE__.']['.class_basename(static::class).']',
        );
<<<<<<< HEAD
<<<<<<< HEAD
        $res = $ns_dir.'/'.$group_dir.'.blade.php';
=======
<<<<<<< HEAD
        $res = $ns_dir.'/'.$group_dir.'.blade.php';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
            '[' . __LINE__ . '][' . class_basename(static::class) . ']',
        );
        $res = $ns_dir . '/' . $group_dir . '.blade.php';
<<<<<<< HEAD
        $res = $ns_dir . '/' . $group_dir . '.blade.php';
        $res = $ns_dir . '/' . $group_dir . '.blade.php';
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
>>>>>>> 2f3197ab (.)
        Assert::string($group_dir = Str::replace('.', '/', $stringable), '['.__LINE__.']['.class_basename(static::class).']');
        $res = $ns_dir.'/'.$group_dir.'.blade.php';
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        Assert::string($group_dir = Str::replace('.', '/', $stringable), '['.__LINE__.']['.class_basename(static::class).']');
        $res = $ns_dir.'/'.$group_dir.'.blade.php';
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
            '[' . __LINE__ . '][' . class_basename(static::class) . ']',
        );
        $res = $ns_dir . '/' . $group_dir . '.blade.php';
<<<<<<< HEAD
            '[' . __LINE__ . '][' . class_basename(static::class) . ']',
        );
        $res = $ns_dir . '/' . $group_dir . '.blade.php';
            '[' . __LINE__ . '][' . class_basename(static::class) . ']',
        );
        $res = $ns_dir . '/' . $group_dir . '.blade.php';
            '[' . __LINE__ . '][' . class_basename(static::class) . ']',
        );
        $res = $ns_dir . '/' . $group_dir . '.blade.php';
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
>>>>>>> 88ea7103 (.)
=======
        $res = $ns_dir . '/' . $group_dir . '.blade.php';
<<<<<<< HEAD
>>>>>>> ab8cc3f3 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 6dcebf8a (.)
=======
=======
<<<<<<< HEAD
        $res = $ns_dir.'/'.$group_dir.'.blade.php';
=======
        $res = $ns_dir . '/' . $group_dir . '.blade.php';
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7afadf9 (.)
=======
>>>>>>> 5cf46378 (.)
        Assert::string($group_dir = Str::replace('.', '/', $stringable), '['.__LINE__.']['.class_basename(static::class).']');
        $res = $ns_dir.'/'.$group_dir.'.blade.php';
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
            '[' . __LINE__ . '][' . class_basename(static::class) . ']',
        );
        $res = $ns_dir . '/' . $group_dir . '.blade.php';
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
>>>>>>> 551c768c4 (.)
=======
            '['.__LINE__.']['.class_basename(static::class).']',
        );
        $res = $ns_dir.'/'.$group_dir.'.blade.php';
>>>>>>> 414a4ffcb (.)

        return app(FixPathAction::class)->execute($res);
    }
}
