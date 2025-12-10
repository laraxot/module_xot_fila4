<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

return new class extends XotBaseMigration
{
return new class extends XotBaseMigration {
return new class extends XotBaseMigration {
return new class extends XotBaseMigration {
return new class extends XotBaseMigration
{
return new class extends XotBaseMigration {
return new class extends XotBaseMigration
{
return new class extends XotBaseMigration
{
return new class extends XotBaseMigration {
return new class extends XotBaseMigration {
return new class extends XotBaseMigration {
return new class extends XotBaseMigration
{
return new class extends XotBaseMigration {
return new class extends XotBaseMigration
{
return new class extends XotBaseMigration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
<<<<<<< HEAD
        if (! $this->shouldRun()) {
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
        if (! $this->shouldRun()) {
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
>>>>>>> 2f3197ab (.)
        if (!$this->shouldRun()) {
        if (!$this->shouldRun()) {
        if (!$this->shouldRun()) {
        if (!$this->shouldRun()) {
        if (! $this->shouldRun()) {
        if (! $this->shouldRun()) {
        if (! $this->shouldRun()) {
        if (! $this->shouldRun()) {
        if (!$this->shouldRun()) {
        if (! $this->shouldRun()) {
        if (! $this->shouldRun()) {
        if (!$this->shouldRun()) {
        if (!$this->shouldRun()) {
        if (! $this->shouldRun()) {
        if (! $this->shouldRun()) {
        if (! $this->shouldRun()) {
        if (!$this->shouldRun()) {
        if (!$this->shouldRun()) {
        if (!$this->shouldRun()) {
        if (!$this->shouldRun()) {
        if (! $this->shouldRun()) {
        if (! $this->shouldRun()) {
        if (! $this->shouldRun()) {
        if (! $this->shouldRun()) {
        if (!$this->shouldRun()) {
        if (! $this->shouldRun()) {
        if (! $this->shouldRun()) {
        if (!$this->shouldRun()) {
        if (!$this->shouldRun()) {
        if (! $this->shouldRun()) {
        if (! $this->shouldRun()) {
        if (!$this->shouldRun()) {
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
                default => throw new InvalidArgumentException('Unsupported driver: '.$this->driver()),
                default => throw new InvalidArgumentException('Unsupported driver: ' . $this->driver()),
                default => throw new InvalidArgumentException('Unsupported driver: ' . $this->driver()),
                default => throw new InvalidArgumentException('Unsupported driver: ' . $this->driver()),
                default => throw new InvalidArgumentException('Unsupported driver: ' . $this->driver()),
                default => throw new InvalidArgumentException('Unsupported driver: '.$this->driver()),
                default => throw new InvalidArgumentException('Unsupported driver: ' . $this->driver()),
                default => throw new InvalidArgumentException('Unsupported driver: ' . $this->driver()),
                default => throw new InvalidArgumentException('Unsupported driver: ' . $this->driver()),
                default => throw new InvalidArgumentException('Unsupported driver: ' . $this->driver()),
                default => throw new InvalidArgumentException('Unsupported driver: ' . $this->driver()),
            };
            $table->bigInteger('value')->nullable();

            $table->index('timestamp'); // For trimming...
            $table->index('type'); // For purging...
            $table->index('key_hash'); // For mapping...
            $table->index(['timestamp', 'type', 'key_hash', 'value']); // For aggregate queries...
        });
<<<<<<< HEAD
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
=======
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
>>>>>>> 2f3197ab (.)

                $table->index('timestamp'); // For trimming...
                $table->index('type'); // For purging...
                $table->index('key_hash'); // For mapping...
                $table->index(['timestamp', 'type', 'key_hash', 'value']); // For aggregate queries...
            }
        );
<<<<<<< HEAD
            $table->index('timestamp'); // For trimming...
            $table->index('type'); // For purging...
            $table->index('key_hash'); // For mapping...
            $table->index(['timestamp', 'type', 'key_hash', 'value']); // For aggregate queries...
        });
=======
>>>>>>> f1d4085 (.)
>>>>>>> 2f3197ab (.)
    }
};
