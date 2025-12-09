<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

<<<<<<< HEAD
<<<<<<< HEAD
return new class extends XotBaseMigration
{
=======
return new class extends XotBaseMigration {
>>>>>>> 5a14301c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
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
        if (!$this->shouldRun()) {
>>>>>>> 5a14301c (.)
=======
        if (!$this->shouldRun()) {
>>>>>>> 5a14301c (.)
            return;
        }
        // -- CREATE --
        $this->tableCreate(function (Blueprint $table): void {
            $table->id();
            $table->unsignedInteger('bucket');
            $table->unsignedMediumInteger('period');
            $table->string('type');
            $table->mediumText('key');
            match ($this->driver()) {
                'mariadb', 'mysql' => $table->char('key_hash', 16)->charset('binary')->virtualAs('unhex(md5(`key`))'),
                'pgsql' => $table->uuid('key_hash')->storedAs('md5("key")::uuid'),
                'sqlite' => $table->string('key_hash'),
<<<<<<< HEAD
<<<<<<< HEAD
                default => throw new InvalidArgumentException('Unsupported driver: '.$this->driver()),
=======
                default => throw new InvalidArgumentException('Unsupported driver: ' . $this->driver()),
>>>>>>> 5a14301c (.)
=======
                default => throw new InvalidArgumentException('Unsupported driver: ' . $this->driver()),
>>>>>>> 5a14301c (.)
            };
            $table->string('aggregate');
            $table->decimal('value', 20, 2);
            $table->unsignedInteger('count')->nullable();

            $table->unique(['bucket', 'period', 'type', 'aggregate', 'key_hash']); // Force "on duplicate update"...
            $table->index(['period', 'bucket']); // For trimming...
            $table->index('type'); // For purging...
            $table->index(['period', 'type', 'aggregate', 'bucket']); // For aggregate queries...
        });
=======
        if (! $this->shouldRun()) {
            return;
        }
        // -- CREATE --
        $this->tableCreate(
            function (Blueprint $table): void {
                $table->id();
                $table->unsignedInteger('bucket');
                $table->unsignedMediumInteger('period');
                $table->string('type');
                $table->mediumText('key');
                match ($this->driver()) {
                    'mariadb', 'mysql' => $table->char('key_hash', 16)->charset('binary')->virtualAs('unhex(md5(`key`))'),
                    'pgsql' => $table->uuid('key_hash')->storedAs('md5("key")::uuid'),
                    'sqlite' => $table->string('key_hash'),
                    default => throw new InvalidArgumentException('Unsupported driver: '.$this->driver()),
                };
                $table->string('aggregate');
                $table->decimal('value', 20, 2);
                $table->unsignedInteger('count')->nullable();

                $table->unique(['bucket', 'period', 'type', 'aggregate', 'key_hash']); // Force "on duplicate update"...
                $table->index(['period', 'bucket']); // For trimming...
                $table->index('type'); // For purging...
                $table->index(['period', 'type', 'aggregate', 'bucket']); // For aggregate queries...
            }
        );
>>>>>>> f1d4085 (.)
    }
};
