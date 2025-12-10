<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

<<<<<<< HEAD
use Sushi\Sushi;
use Override;
use Modules\Xot\Database\Factories\FeedFactory;
use Sushi\Sushi;
use Override;
use Modules\Xot\Database\Factories\FeedFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\File;
use Override;
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
use Modules\Xot\Database\Factories\LogFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\File;
use Override;
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
use Sushi\Sushi;
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
=======
>>>>>>> 2f3197ab (.)
use Sushi\Sushi;
use Sushi\Sushi;
use Sushi\Sushi;
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> ed734516 (.)
=======
>>>>>>> 21348520 (.)
=======
>>>>>>> 3fbbf1f5 (.)
=======
>>>>>>> 7131bd09 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 88ea7103 (.)
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
use Override;
=======
>>>>>>> f1d4085 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> 3310e9c6 (.)
use Override;
use Modules\Xot\Database\Factories\FeedFactory;
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;
use Illuminate\Support\Facades\File;
use Sushi\Sushi;
use Override;
use Modules\Xot\Database\Factories\FeedFactory;
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;
use Override;
use Modules\Xot\Database\Factories\FeedFactory;
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;
use Illuminate\Support\Facades\File;

// --- services
// --- TRAITS ---
/**
 * Modules\Xot\Models\Feed.
 *
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
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
 * @property string|null $id
 * @property string|null $name
 * @property int|null $size
 *
 * @method static LogFactory factory($count = null, $state = [])
 * @method static Builder<static>|Log newModelQuery()
 * @method static Builder<static>|Log newQuery()
 * @method static Builder<static>|Log query()
 * @method static Builder<static>|Log whereId($value)
 * @method static Builder<static>|Log whereName($value)
 * @method static Builder<static>|Log whereSize($value)
 *
<<<<<<< HEAD
=======
=======
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
 * @method static FeedFactory factory($count = null, $state = [])
 * @method static Builder|Feed newModelQuery()
 * @method static Builder|Feed newQuery()
 * @method static Builder|Feed query()
 * @method static Builder|Feed newModelQuery()
 * @method static Builder|Feed newQuery()
 * @method static Builder|Feed query()
 * @property string|null $id
 * @property string|null $name
 * @property int|null    $size
 * @property string|null $file_content
 * @method static Builder|Log whereId($value)
 * @method static Builder|Log whereName($value)
 * @method static Builder|Log whereSize($value)
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> ce6fc085 (.)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereSize($value)
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
<<<<<<< HEAD
 * @mixin IdeHelperLog
 *
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
 * @mixin IdeHelperLog
 * @mixin IdeHelperLog
 * @mixin IdeHelperLog
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
 * @mixin IdeHelperLog
 * @mixin \Eloquent
 */
class Log extends BaseModel
{
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
    use Sushi;
=======
<<<<<<< HEAD
    use Sushi;
=======
    use \Sushi\Sushi;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
    use Sushi;
>>>>>>> 091f883c (.)

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
            if ('log' === $file->getExtension()) {
            if ('log' === $file->getExtension()) {
            if ('log' === $file->getExtension()) {
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
    public function getFileContentAttribute(?string $value): ?string
    {
        return File::get(storage_path('logs/'.$this->id.'.log'));
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
    public function getFileContentAttribute(null|string $value): null|string
    {
        return File::get(storage_path('logs/' . $this->id . '.log'));
    }

    /** @return array<string, string> */
    #[Override]
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getFileContentAttribute(?string $value): ?string
    public function getFileContentAttribute(null|string $value): null|string
    {
        return File::get(storage_path('logs/'.$this->id.'.log'));
    public function getFileContentAttribute(null|string $value): null|string
    {
        return File::get(storage_path('logs/' . $this->id . '.log'));
    public function getFileContentAttribute(null|string $value): null|string
    {
        return File::get(storage_path('logs/' . $this->id . '.log'));
    public function getFileContentAttribute(null|string $value): null|string
    {
        return File::get(storage_path('logs/' . $this->id . '.log'));
    public function getFileContentAttribute(null|string $value): null|string
    {
        return File::get(storage_path('logs/' . $this->id . '.log'));
    }

    /** @return array<string, string> */
    #[Override]
    public function getFileContentAttribute(?string $value): ?string
    public function getFileContentAttribute(null|string $value): null|string
    {
        return File::get(storage_path('logs/'.$this->id.'.log'));
    }

    /** @return array<string, string> */
    public function getFileContentAttribute(?string $value): ?string
    public function getFileContentAttribute(null|string $value): null|string
    {
        return File::get(storage_path('logs/' . $this->id . '.log'));
    }

    /** @return array<string, string> */
    #[Override]
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
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
>>>>>>> ce6fc085 (.)
    public function getFileContentAttribute(?string $value): ?string
    {
        return File::get(storage_path('logs/'.$this->id.'.log'));
    }

    /** @return array<string, string> */
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
    #[Override]
    #[Override]
=======
>>>>>>> f1d4085 (.)
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
    protected function casts(): array
    {
        return [
            'id' => 'string',
            'name' => 'string',
            'size' => 'integer',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',

=======
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
        ];
    }
}

/*
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
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
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
