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
        Assert::string(
            $group_dir = Str::replace('.', '/', $stringable),
<<<<<<< HEAD
<<<<<<< HEAD
            '['.__LINE__.']['.class_basename(static::class).']',
        );
        $res = $ns_dir.'/'.$group_dir.'.blade.php';
=======
            '[' . __LINE__ . '][' . class_basename(static::class) . ']',
        );
        $res = $ns_dir . '/' . $group_dir . '.blade.php';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
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
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
            '[' . __LINE__ . '][' . class_basename(static::class) . ']',
        );
        $res = $ns_dir . '/' . $group_dir . '.blade.php';
>>>>>>> 5a14301c (.)

        return app(FixPathAction::class)->execute($res);
    }
}
