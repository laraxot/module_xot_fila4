<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
// ---- models ---
use Modules\Xot\Database\Migrations\XotBaseMigration;

/*
 * Class CreateExtraTable.
 */
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
        // -- CREATE --
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 358ba79a7 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
        $this->tableCreate(static function (Blueprint $table): void {
            $table->increments('id');
            $table->uuidMorphs('model');
            // @phpstan-ignore-next-line method.notFound
            $table->schemalessAttributes('extra_attributes');
            $table->unique(['model_id', 'model_type'], 'morph_unique');
        });
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
        $this->tableCreate(static function (Blueprint $table): void {
            $table->increments('id');
            $table->uuidMorphs('model');
            // @phpstan-ignore-next-line method.notFound
            $table->schemalessAttributes('extra_attributes');
            $table->unique(['model_id', 'model_type'], 'morph_unique');
        });
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

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

            if ($this->hasColumn('model_id') && $this->getColumnType('model_id') === 'bigint') {
            if ($this->hasColumn('model_id') && 'bigint' === $this->getColumnType('model_id')) {
            if ($this->hasColumn('model_id') && 'bigint' === $this->getColumnType('model_id')) {
            if ($this->hasColumn('model_id') && 'bigint' === $this->getColumnType('model_id')) {
            if ($this->hasColumn('model_id') && $this->getColumnType('model_id') === 'bigint') {
            if ($this->hasColumn('model_id') && 'bigint' === $this->getColumnType('model_id')) {
            if ($this->hasColumn('model_id') && $this->getColumnType('model_id') === 'bigint') {
            if ($this->hasColumn('model_id') && $this->getColumnType('model_id') === 'bigint') {
            if ($this->hasColumn('model_id') && 'bigint' === $this->getColumnType('model_id')) {
            if ($this->hasColumn('model_id') && 'bigint' === $this->getColumnType('model_id')) {
            if ($this->hasColumn('model_id') && 'bigint' === $this->getColumnType('model_id')) {
            if ($this->hasColumn('model_id') && $this->getColumnType('model_id') === 'bigint') {
            if ($this->hasColumn('model_id') && 'bigint' === $this->getColumnType('model_id')) {
            if ($this->hasColumn('model_id') && $this->getColumnType('model_id') === 'bigint') {
            if ($this->hasColumn('model_id') && 'bigint' === $this->getColumnType('model_id')) {
                $table->string('model_id', 36)->index()->change();
            }
        });
    }

    // end up
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
>>>>>>> 6be8834c2 (.)
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 358ba79a7 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 7468a7d2 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 5cf46378 (.)
=======
=======
>>>>>>> dbce41cec (.)
=======
>>>>>>> 358ba79a7 (.)
        $this->tableCreate(
            static function (Blueprint $table): void {
                $table->increments('id');
                $table->uuidMorphs('model');
                $table->schemalessAttributes('extra_attributes');
                $table->unique(['model_id', 'model_type'], 'morph_unique');
            }
        );
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        // -- UPDATE --
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 358ba79a7 (.)
=======
>>>>>>> b93ef594b4 (.)

        // -- UPDATE --
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 358ba79a7 (.)
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

<<<<<<< HEAD

        // -- UPDATE --
=======
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD

=======
>>>>>>> 358ba79a7 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======

        // -- UPDATE --
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======

        // -- UPDATE --
>>>>>>> 7468a7d2 (.)
=======

        // -- UPDATE --
>>>>>>> 5cf46378 (.)
=======

        // -- UPDATE --
>>>>>>> dbce41cec (.)
=======
>>>>>>> 358ba79a7 (.)
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

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
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
=======
=======
>>>>>>> 5cf46378 (.)
>>>>>>> f1d4085 (.)
=======
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> f1d4085 (.)
>>>>>>> dbce41cec (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 6be8834c2 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> 358ba79a7 (.)
    // end down
};
