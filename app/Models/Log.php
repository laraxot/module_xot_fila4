<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
use Sushi\Sushi;
use Override;
use Modules\Xot\Database\Factories\FeedFactory;
>>>>>>> d2b0a27 (.)
>>>>>>> a6ef6dc7 (.)
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\File;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Database\Factories\FeedFactory;
use Override;
use Sushi\Sushi;

// --- services
// --- TRAITS ---
/**
 * Modules\Xot\Models\Feed.
 *
 * @method static FeedFactory factory($count = null, $state = [])
 * @method static Builder|Feed newModelQuery()
 * @method static Builder|Feed newQuery()
 * @method static Builder|Feed query()
 * @method static Builder|Feed newModelQuery()
 * @method static Builder|Feed newQuery()
 * @method static Builder|Feed query()
 *
 * @property string|null $id
 * @property string|null $name
 * @property int|null $size
 * @property string|null $file_content
 *
 * @method static Builder|Log whereId($value)
 * @method static Builder|Log whereName($value)
 * @method static Builder|Log whereSize($value)
 *
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 *
<<<<<<< HEAD
 * @mixin IdeHelperLog
=======
 * @mixin \Eloquent
 */
/**
 * @property string|null $id
 * @property string|null $name
 * @property int|null $size
 * @property-read string|null $file_content
 *
 * @method static \Modules\Xot\Database\Factories\LogFactory factory($count = null, $state = [])
 * @method static Builder<static>|Log newModelQuery()
 * @method static Builder<static>|Log newQuery()
 * @method static Builder<static>|Log query()
 * @method static Builder<static>|Log whereId($value)
 * @method static Builder<static>|Log whereName($value)
 * @method static Builder<static>|Log whereSize($value)
 *
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $updater
 *
>>>>>>> a6ef6dc7 (.)
 * @mixin \Eloquent
 */
class Log extends BaseModel
{
    use Sushi;

    protected $fillable = ['id', 'name', 'size'];

    /**
     * @return array<int, array<string, mixed>>
     */
    public function getRows(): array
    {
        $rows = [];
        $files = File::files(storage_path('logs'));

        foreach ($files as $file) {
            if ($file->getExtension() === 'log') {
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
    public function getFileContentAttribute(?string $value): ?string
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
=======
>>>>>>> 300ef70 (.)
    public function getFileContentAttribute(null|string $value): null|string
>>>>>>> a6ef6dc7 (.)
    {
        return File::get(storage_path('logs/'.$this->id.'.log'));
    }

    /** @return array<string, string> */
    #[Override]
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d2b0a27 (.)
    public function getFileContentAttribute(?string $value): ?string
    {
        return File::get(storage_path('logs/'.$this->id.'.log'));
    }

    /** @return array<string, string> */
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
    protected function casts(): array
    {
        return [
            'id' => 'string',
            'name' => 'string',
            'size' => 'integer',
<<<<<<< HEAD
<<<<<<< HEAD
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
=======
<<<<<<< HEAD
<<<<<<< HEAD
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
=======

            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',

>>>>>>> f1d4085 (.)
=======
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
>>>>>>> 300ef70 (.)
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
        ];
    }
}

/*
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
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
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
=======
>>>>>>> 300ef70 (.)
