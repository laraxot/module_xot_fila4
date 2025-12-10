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
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
        $this->tableCreate(function (Blueprint $table): void {
            $table->string('id')->primary();
            // $table->foreignId('user_id')->nullable()->index();
            $table->string('user_id', 36)->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->text('payload');
            $table->integer('last_activity')->index();
        });

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
=======
=======
>>>>>>> 2f3197ab (.)
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

        // -- UPDATE --
<<<<<<< HEAD
        $this->tableUpdate(function (Blueprint $table): void {
            // if (! $this->hasColumn('email')) {
            //    $table->string('email')->nullable();
            // }
            // $this->updateUser($table);
            if (in_array($this->getColumnType('user_id'), ['bigint'], false)) {
                $table->string('user_id', 36)->nullable()->change();
            }
        );
            $this->updateTimestamps($table, true);
        });

        // -- UPDATE --
=======
>>>>>>> 2f3197ab (.)
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
=======
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
    }
};
