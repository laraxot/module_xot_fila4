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
>>>>>>> 300ef70 (.)
        Assert::string(
            $group_dir = Str::replace('.', '/', $stringable),
            '['.__LINE__.']['.class_basename(static::class).']',
        );
<<<<<<< HEAD
        $res = $ns_dir.'/'.$group_dir.'.blade.php';
=======
        $res = $ns_dir . '/' . $group_dir . '.blade.php';
<<<<<<< HEAD
<<<<<<< HEAD
=======
        Assert::string($group_dir = Str::replace('.', '/', $stringable), '['.__LINE__.']['.class_basename(static::class).']');
        $res = $ns_dir.'/'.$group_dir.'.blade.php';
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)

        return app(FixPathAction::class)->execute($res);
    }
}
