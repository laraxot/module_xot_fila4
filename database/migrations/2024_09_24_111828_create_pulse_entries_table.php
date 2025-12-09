<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

<<<<<<< HEAD
return new class extends XotBaseMigration
{
=======
return new class extends XotBaseMigration {
>>>>>>> 5a14301c (.)
    /**
     * Run the migrations.
     */
    public function up(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! $this->shouldRun()) {
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
        if (!$this->shouldRun()) {
>>>>>>> 5a14301c (.)
            return;
        }
        // -- CREATE --
        $this->tableCreate(function (Blueprint $table): void {
            $table->id();
            $table->unsignedInteger('timestamp');
            $table->string('type');
            $table->mediumText('key');
            match ($this->driver()) {
                'mariadb', 'mysql' => $table->char('key_hash', 16)->charset('binary')->virtualAs('unhex(md5(`key`))'),
                'pgsql' => $table->uuid('key_hash')->storedAs('md5("key")::uuid'),
                'sqlite' => $table->string('key_hash'),
<<<<<<< HEAD
                default => throw new InvalidArgumentException('Unsupported driver: '.$this->driver()),
=======
                default => throw new InvalidArgumentException('Unsupported driver: ' . $this->driver()),
>>>>>>> 5a14301c (.)
            };
            $table->bigInteger('value')->nullable();

            $table->index('timestamp'); // For trimming...
            $table->index('type'); // For purging...
            $table->index('key_hash'); // For mapping...
            $table->index(['timestamp', 'type', 'key_hash', 'value']); // For aggregate queries...
        });
<<<<<<< HEAD
=======
=======
        if (! $this->shouldRun()) {
=======
        if (!$this->shouldRun()) {
>>>>>>> b93ef594b4 (.)
            return;
        }
        // -- CREATE --
        $this->tableCreate(function (Blueprint $table): void {
            $table->id();
            $table->unsignedInteger('timestamp');
            $table->string('type');
            $table->mediumText('key');
            match ($this->driver()) {
                'mariadb', 'mysql' => $table->char('key_hash', 16)->charset('binary')->virtualAs('unhex(md5(`key`))'),
                'pgsql' => $table->uuid('key_hash')->storedAs('md5("key")::uuid'),
                'sqlite' => $table->string('key_hash'),
                default => throw new InvalidArgumentException('Unsupported driver: ' . $this->driver()),
            };
            $table->bigInteger('value')->nullable();

<<<<<<< HEAD
=======
        if (! $this->shouldRun()) {
            return;
        }
        // -- CREATE --
        $this->tableCreate(
            function (Blueprint $table): void {
                $table->id();
                $table->unsignedInteger('timestamp');
                $table->string('type');
                $table->mediumText('key');
                match ($this->driver()) {
                    'mariadb', 'mysql' => $table->char('key_hash', 16)->charset('binary')->virtualAs('unhex(md5(`key`))'),
                    'pgsql' => $table->uuid('key_hash')->storedAs('md5("key")::uuid'),
                    'sqlite' => $table->string('key_hash'),
                    default => throw new InvalidArgumentException('Unsupported driver: '.$this->driver()),
                };
                $table->bigInteger('value')->nullable();

>>>>>>> origin/develop
                $table->index('timestamp'); // For trimming...
                $table->index('type'); // For purging...
                $table->index('key_hash'); // For mapping...
                $table->index(['timestamp', 'type', 'key_hash', 'value']); // For aggregate queries...
            }
        );
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            $table->index('timestamp'); // For trimming...
            $table->index('type'); // For purging...
            $table->index('key_hash'); // For mapping...
            $table->index(['timestamp', 'type', 'key_hash', 'value']); // For aggregate queries...
        });
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }
};
