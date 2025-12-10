<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

/*
 * Undocumented class.
 */
return new class extends XotBaseMigration
{
return new class extends XotBaseMigration {
return new class extends XotBaseMigration {
return new class extends XotBaseMigration {
return new class extends XotBaseMigration {
return new class extends XotBaseMigration
{
return new class extends XotBaseMigration {
return new class extends XotBaseMigration {
return new class extends XotBaseMigration {
return new class extends XotBaseMigration {
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
        $this->tableCreate(function (Blueprint $table): void {
            $table->string('id')->primary();
            // $table->foreignId('user_id')->nullable()->index();
            $table->string('user_id', 36)->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->text('payload');
            $table->integer('last_activity')->index();
        });
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)

        // -- UPDATE --
        $this->tableUpdate(function (Blueprint $table): void {
            // if (! $this->hasColumn('email')) {
            //    $table->string('email')->nullable();
            // }
            // $this->updateUser($table);
            if (in_array($this->getColumnType('user_id'), ['bigint'], false)) {
                $table->string('user_id', 36)->nullable()->change();
            }
            $this->updateTimestamps($table, true);
        });
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
            function (Blueprint $table): void {
                $table->string('id')->primary();
                // $table->foreignId('user_id')->nullable()->index();
                $table->string('user_id', 36)->nullable()->index();
                $table->string('ip_address', 45)->nullable();
                $table->text('user_agent')->nullable();
                $table->text('payload');
                $table->integer('last_activity')->index();
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
            // if (! $this->hasColumn('email')) {
            //    $table->string('email')->nullable();
            // }
            // $this->updateUser($table);
            if (in_array($this->getColumnType('user_id'), ['bigint'], false)) {
                $table->string('user_id', 36)->nullable()->change();
            }
<<<<<<< HEAD
        );
            $this->updateTimestamps($table, true);
        });

        // -- UPDATE --
=======
>>>>>>> 2f3197ab (.)
=======
<<<<<<< HEAD
        );
>>>>>>> a12f125f4a (.)
=======
            $this->updateTimestamps($table, true);
        });
>>>>>>> b93ef594b4 (.)
=======

        // -- UPDATE --
>>>>>>> ce6fc085 (.)
        $this->tableUpdate(
            function (Blueprint $table): void {
                // if (! $this->hasColumn('email')) {
                //    $table->string('email')->nullable();
                // }
                // $this->updateUser($table);
                if (in_array($this->getColumnType('user_id'), ['bigint'], false)) {
                    $table->string('user_id', 36)->nullable()->change();
                }
                $this->updateTimestamps($table, true);
            }
        );
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
    }
};
