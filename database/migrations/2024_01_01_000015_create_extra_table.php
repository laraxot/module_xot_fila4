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
            // @phpstan-ignore-next-line method.notFound
            $table->schemalessAttributes('extra_attributes');
            $table->unique(['model_id', 'model_type'], 'morph_unique');
        });
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
=======
=======
>>>>>>> 2f3197ab (.)
=======
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
        $this->tableCreate(
            static function (Blueprint $table): void {
                $table->increments('id');
                $table->uuidMorphs('model');
                $table->schemalessAttributes('extra_attributes');
                $table->unique(['model_id', 'model_type'], 'morph_unique');
            }
        );
<<<<<<< HEAD

        // -- UPDATE --
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)

        // -- UPDATE --
>>>>>>> ce6fc085 (.)
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


        // -- UPDATE --
=======
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======

        // -- UPDATE --
>>>>>>> ce6fc085 (.)
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
    // end down
};
