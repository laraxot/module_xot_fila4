<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

<<<<<<< HEAD
use Sushi\Sushi;
use Override;
use Modules\Xot\Database\Factories\FeedFactory;
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;
=======
<<<<<<< HEAD
use Sushi\Sushi;
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> a12f125f4a (.)
=======
use Override;
>>>>>>> b93ef594b4 (.)
use Modules\Xot\Database\Factories\FeedFactory;
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
use Illuminate\Support\Facades\File;

// --- services
// --- TRAITS ---
/**
 * Modules\Xot\Models\Feed.
 *
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
 * @method static FeedFactory factory($count = null, $state = [])
 * @method static Builder|Feed newModelQuery()
 * @method static Builder|Feed newQuery()
 * @method static Builder|Feed query()
 * @method static Builder|Feed newModelQuery()
 * @method static Builder|Feed newQuery()
 * @method static Builder|Feed query()
<<<<<<< HEAD
=======
=======
 * @method static \Modules\Xot\Database\Factories\FeedFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Feed  newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feed  newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feed  query()
 * @method static \Illuminate\Database\Eloquent\Builder|Feed  newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feed  newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feed  query()
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
 * @property string|null $id
 * @property string|null $name
 * @property int|null    $size
 * @property string|null $file_content
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
 * @method static Builder|Log whereId($value)
 * @method static Builder|Log whereName($value)
 * @method static Builder|Log whereSize($value)
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
<<<<<<< HEAD
=======
=======
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereSize($value)
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
 * @mixin IdeHelperLog
 * @mixin \Eloquent
 */
class Log extends BaseModel
{
<<<<<<< HEAD
    use Sushi;
=======
<<<<<<< HEAD
    use Sushi;
=======
    use \Sushi\Sushi;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)

    protected $fillable = ['id', 'name', 'size'];

    /**
     * @return array<int, array<string, mixed>>
     */
    public function getRows(): array
    {
        $rows = [];
        $files = File::files(storage_path('logs'));

        foreach ($files as $file) {
            if ('log' === $file->getExtension()) {
                $rows[] = [
                    'id' => $file->getFilenameWithoutExtension(),
                    'name' => $file->getFilenameWithoutExtension(),
                    'size' => $file->getSize(),
                ];
            }
        }

        return $rows;
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
    public function getFileContentAttribute(null|string $value): null|string
    {
        return File::get(storage_path('logs/' . $this->id . '.log'));
    }

    /** @return array<string, string> */
    #[Override]
<<<<<<< HEAD
=======
=======
    public function getFileContentAttribute(?string $value): ?string
=======
    public function getFileContentAttribute(null|string $value): null|string
>>>>>>> b93ef594b4 (.)
    {
        return File::get(storage_path('logs/' . $this->id . '.log'));
    }

    /** @return array<string, string> */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
=======
    public function getFileContentAttribute(?string $value): ?string
    {
        return File::get(storage_path('logs/'.$this->id.'.log'));
    }

    /** @return array<string, string> */
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    protected function casts(): array
    {
        return [
            'id' => 'string',
            'name' => 'string',
            'size' => 'integer',
<<<<<<< HEAD
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
=======
=======
>>>>>>> origin/develop

            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',

<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
        ];
    }
}

/*
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
 * dddx([
 * 'getRelativePath' => $file->getRelativePath(), // ""
 * 'getRelativePathname' => $file->getRelativePathname(),
 * 'getFilenameWithoutExtension' => $file->getFilenameWithoutExtension(),
 * // 'getContents' => $file->getContents(),
 * 'getPath' => $file->getPath(),
 * 'getFilename' => $file->getFilename(),
 * 'getExtension' => $file->getExtension(), // log
 * 'getBasename' => $file->getBasename(),
 * 'getPathname' => $file->getPathname(),
 * 'getPerms' => $file->getPerms(),
 * 'getInode' => $file->getInode(),
 * 'getSize' => $file->getSize(), // 12497
 * 'getOwner' => $file->getOwner(),
 * 'getGroup' => $file->getGroup(),
 * 'getATime' => $file->getATime(),
 * 'getMTime' => $file->getMTime(),
 * 'getCTime' => $file->getCTime(),
 * 'getType' => $file->getType(),
 * 'isWritable' => $file->isWritable(),
 * 'isReadable' => $file->isReadable(),
 * 'isExecutable' => $file->isExecutable(),
 * 'isFile' => $file->isFile(),
 * 'isDir' => $file->isDir(),
 * 'isLink' => $file->isLink(),
 * 'getLinkTarget' => $file->getLinkTarget(),
 * 'getRealPath' => $file->getRealPath(),
 * 'getFileInfo' => $file->getFileInfo(),
 * 'getPathInfo' => $file->getPathInfo(),
 * 'get_class_methods' => get_class_methods($file),
 * ]);
 *
 * "getRelativePath" => ""
 * "getRelativePathname" => "laravel-2024-03-01.log"
 * "getFilenameWithoutExtension" => "laravel-2024-03-01"
 * "getPath" => "C:\var\www\_bases\base_camping_fila3\laravel\storage\logs"
 * "getFilename" => "laravel-2024-03-01.log"
 * "getExtension" => "log"
 * "getBasename" => "laravel-2024-03-01.log"
 * "getPathname" => "C:\var\www\_bases\base_camping_fila3\laravel\storage\logs\laravel-2024-03-01.log"
 * "getPerms" => 33206
 * "getInode" => 32369622322094035
 * "getSize" => 12497
 * "getOwner" => 0
 * "getGroup" => 0
 * "getATime" => 1709646780
 * "getMTime" => 1709314074
 * "getCTime" => 1709313704
 * "getType" => "file"
 * "isWritable" => true
 * "isReadable" => true
 * "isExecutable" => false
 * "isFile" => true
 * "isDir" => false
 * "isLink" => false
 * "getLinkTarget" => "C:\var\www\_bases\base_camping_fila3\laravel\storage\logs\laravel-2024-03-01.log"
 * "getRealPath" => "C:\var\www\_bases\base_camping_fila3\laravel\storage\logs\laravel-2024-03-01.log"
 */
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
           dddx([
               'getRelativePath' => $file->getRelativePath(), // ""
               'getRelativePathname' => $file->getRelativePathname(),
               'getFilenameWithoutExtension' => $file->getFilenameWithoutExtension(),
               // 'getContents' => $file->getContents(),
               'getPath' => $file->getPath(),
               'getFilename' => $file->getFilename(),
               'getExtension' => $file->getExtension(), // log
               'getBasename' => $file->getBasename(),
               'getPathname' => $file->getPathname(),
               'getPerms' => $file->getPerms(),
               'getInode' => $file->getInode(),
               'getSize' => $file->getSize(), // 12497
               'getOwner' => $file->getOwner(),
               'getGroup' => $file->getGroup(),
               'getATime' => $file->getATime(),
               'getMTime' => $file->getMTime(),
               'getCTime' => $file->getCTime(),
               'getType' => $file->getType(),
               'isWritable' => $file->isWritable(),
               'isReadable' => $file->isReadable(),
               'isExecutable' => $file->isExecutable(),
               'isFile' => $file->isFile(),
               'isDir' => $file->isDir(),
               'isLink' => $file->isLink(),
               'getLinkTarget' => $file->getLinkTarget(),
               'getRealPath' => $file->getRealPath(),
               'getFileInfo' => $file->getFileInfo(),
               'getPathInfo' => $file->getPathInfo(),
               'get_class_methods' => get_class_methods($file),
           ]);

           "getRelativePath" => ""
   "getRelativePathname" => "laravel-2024-03-01.log"
   "getFilenameWithoutExtension" => "laravel-2024-03-01"
   "getPath" => "C:\var\www\_bases\base_camping_fila3\laravel\storage\logs"
   "getFilename" => "laravel-2024-03-01.log"
   "getExtension" => "log"
   "getBasename" => "laravel-2024-03-01.log"
   "getPathname" => "C:\var\www\_bases\base_camping_fila3\laravel\storage\logs\laravel-2024-03-01.log"
   "getPerms" => 33206
   "getInode" => 32369622322094035
   "getSize" => 12497
   "getOwner" => 0
   "getGroup" => 0
   "getATime" => 1709646780
   "getMTime" => 1709314074
   "getCTime" => 1709313704
   "getType" => "file"
   "isWritable" => true
   "isReadable" => true
   "isExecutable" => false
   "isFile" => true
   "isDir" => false
   "isLink" => false
   "getLinkTarget" => "C:\var\www\_bases\base_camping_fila3\laravel\storage\logs\laravel-2024-03-01.log"
   "getRealPath" => "C:\var\www\_bases\base_camping_fila3\laravel\storage\logs\laravel-2024-03-01.log"
   */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
