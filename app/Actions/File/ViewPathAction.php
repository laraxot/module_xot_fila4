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
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 285375c74 (.)
        Assert::string(
            $group_dir = Str::replace('.', '/', $stringable),
            '['.__LINE__.']['.class_basename(static::class).']',
        );
        $res = $ns_dir.'/'.$group_dir.'.blade.php';
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 285375c74 (.)
=======
<<<<<<< HEAD
            '[' . __LINE__ . '][' . class_basename(static::class) . ']',
        );
        $res = $ns_dir . '/' . $group_dir . '.blade.php';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
=======
        Assert::string($group_dir = Str::replace('.', '/', $stringable), '['.__LINE__.']['.class_basename(static::class).']');
        $res = $ns_dir.'/'.$group_dir.'.blade.php';
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
            '[' . __LINE__ . '][' . class_basename(static::class) . ']',
        );
        $res = $ns_dir . '/' . $group_dir . '.blade.php';
>>>>>>> 5a14301c (.)
=======
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
        Assert::string($group_dir = Str::replace('.', '/', $stringable), '['.__LINE__.']['.class_basename(static::class).']');
        $res = $ns_dir.'/'.$group_dir.'.blade.php';
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
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 48515e368 (.)
=======
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 6dcebf8a (.)
=======
>>>>>>> 53d6a6ba (.)
>>>>>>> 285375c74 (.)

        return app(FixPathAction::class)->execute($res);
    }
}
