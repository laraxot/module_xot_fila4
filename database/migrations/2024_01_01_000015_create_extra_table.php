<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
// ---- models ---
use Modules\Xot\Database\Migrations\XotBaseMigration;

/*
 * Class CreateExtraTable.
 */
<<<<<<< HEAD
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
return new class extends XotBaseMigration {
>>>>>>> 5a14301c (.)
=======
return new class extends XotBaseMigration {
>>>>>>> 5a14301c (.)
=======
return new class extends XotBaseMigration
{
>>>>>>> 249a0067 (.)
=======
return new class extends XotBaseMigration {
>>>>>>> 5a14301c (.)
=======
return new class extends XotBaseMigration
{
>>>>>>> 249a0067 (.)
=======
return new class extends XotBaseMigration {
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // -- CREATE --
<<<<<<< HEAD
        $this->tableCreate(static function (Blueprint $table): void {
            $table->increments('id');
            $table->uuidMorphs('model');
            // @phpstan-ignore-next-line method.notFound
            $table->schemalessAttributes('extra_attributes');
            $table->unique(['model_id', 'model_type'], 'morph_unique');
        });
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
        $this->tableCreate(static function (Blueprint $table): void {
            $table->increments('id');
            $table->uuidMorphs('model');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            // @phpstan-ignore-next-line method.notFound
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
            $table->schemalessAttributes('extra_attributes');
            $table->unique(['model_id', 'model_type'], 'morph_unique');
        });
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop

        // -- UPDATE --
        $this->tableUpdate(function (Blueprint $table): void {
            // if (! $this->hasColumn('name')) {
            //    $table->string('name')->nullable();
            // }
            $this->updateTimestamps(
                table: $table,
                hasSoftDeletes: true,
            );
            // if (! $this->hasIndex('morph_unique')) {
            //    $table->unique(['model_id', 'model_type'], 'morph_unique');
            // }

<<<<<<< HEAD
            if ($this->hasColumn('model_id') && $this->getColumnType('model_id') === 'bigint') {
            if ($this->hasColumn('model_id') && 'bigint' === $this->getColumnType('model_id')) {
            if ($this->hasColumn('model_id') && 'bigint' === $this->getColumnType('model_id')) {
            if ($this->hasColumn('model_id') && 'bigint' === $this->getColumnType('model_id')) {
            if ($this->hasColumn('model_id') && $this->getColumnType('model_id') === 'bigint') {
            if ($this->hasColumn('model_id') && 'bigint' === $this->getColumnType('model_id')) {
            if ($this->hasColumn('model_id') && $this->getColumnType('model_id') === 'bigint') {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if ($this->hasColumn('model_id') && $this->getColumnType('model_id') === 'bigint') {
=======
            if ($this->hasColumn('model_id') && 'bigint' === $this->getColumnType('model_id')) {
>>>>>>> 5a14301c (.)
=======
            if ($this->hasColumn('model_id') && 'bigint' === $this->getColumnType('model_id')) {
>>>>>>> 5a14301c (.)
=======
            if ($this->hasColumn('model_id') && 'bigint' === $this->getColumnType('model_id')) {
>>>>>>> 5a14301c (.)
=======
            if ($this->hasColumn('model_id') && 'bigint' === $this->getColumnType('model_id')) {
>>>>>>> 5a14301c (.)
=======
            if ($this->hasColumn('model_id') && $this->getColumnType('model_id') === 'bigint') {
>>>>>>> 249a0067 (.)
=======
            if ($this->hasColumn('model_id') && 'bigint' === $this->getColumnType('model_id')) {
>>>>>>> 5a14301c (.)
=======
            if ($this->hasColumn('model_id') && $this->getColumnType('model_id') === 'bigint') {
>>>>>>> 249a0067 (.)
=======
            if ($this->hasColumn('model_id') && 'bigint' === $this->getColumnType('model_id')) {
>>>>>>> 5a14301c (.)
>>>>>>> laraxot/develop
                $table->string('model_id', 36)->index()->change();
            }
        });
    }

    // end up
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        $this->tableCreate(
            static function (Blueprint $table): void {
                $table->increments('id');
                $table->uuidMorphs('model');
                $table->schemalessAttributes('extra_attributes');
                $table->unique(['model_id', 'model_type'], 'morph_unique');
            }
        );
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)

        // -- UPDATE --
        $this->tableUpdate(function (Blueprint $table): void {
            // if (! $this->hasColumn('name')) {
            //    $table->string('name')->nullable();
            // }
            $this->updateTimestamps(
                table: $table,
                hasSoftDeletes: true,
            );
            // if (! $this->hasIndex('morph_unique')) {
            //    $table->unique(['model_id', 'model_type'], 'morph_unique');
            // }

            if ($this->hasColumn('model_id') && 'bigint' === $this->getColumnType('model_id')) {
                $table->string('model_id', 36)->index()->change();
            }
        });
    }

    // end up
<<<<<<< HEAD

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======

        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {
                // if (! $this->hasColumn('name')) {
                //    $table->string('name')->nullable();
                // }
                $this->updateTimestamps(table: $table, hasSoftDeletes: true);
                // if (! $this->hasIndex('morph_unique')) {
                //    $table->unique(['model_id', 'model_type'], 'morph_unique');
                // }

                if ($this->hasColumn('model_id') && 'bigint' === $this->getColumnType('model_id')) {
                    $table->string('model_id', 36)->index()->change();
                }
            }
        );
    }

    // end up

>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> laraxot/develop
    // end down
};
