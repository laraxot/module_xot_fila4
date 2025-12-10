<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;
use Modules\Xot\Models\HealthCheckResultHistoryItem;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
>>>>>>> 53d6a6ba (.)
=======
>>>>>>> b7afadf9 (.)
>>>>>>> 5cf46378 (.)
=======
>>>>>>> 551c768c4 (.)
return new class extends XotBaseMigration
{
    protected ?string $model_class = HealthCheckResultHistoryItem::class;
=======
<<<<<<< HEAD
return new class extends XotBaseMigration {
<<<<<<< HEAD
<<<<<<< HEAD
    protected null|string $model_class = HealthCheckResultHistoryItem::class;
=======
<<<<<<< HEAD
return new class extends XotBaseMigration
{
    protected ?string $model_class = HealthCheckResultHistoryItem::class;
=======
return new class extends XotBaseMigration {
    protected null|string $model_class = HealthCheckResultHistoryItem::class;
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
=======
    protected ?string $model_class = HealthCheckResultHistoryItem::class;
>>>>>>> f1d4085 (.)
=======
    protected null|string $model_class = HealthCheckResultHistoryItem::class;
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> 5cf46378 (.)

    /**
     * Run the migrations.
<<<<<<< HEAD
return new class extends XotBaseMigration {
    protected null|string $model_class = HealthCheckResultHistoryItem::class;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
return new class extends XotBaseMigration {
    protected null|string $model_class = HealthCheckResultHistoryItem::class;
    protected null|string $model_class = HealthCheckResultHistoryItem::class;
    protected null|string $model_class = HealthCheckResultHistoryItem::class;
    protected ?string $model_class = HealthCheckResultHistoryItem::class;
=======
=======
    protected ?string $model_class = HealthCheckResultHistoryItem::class;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
    protected null|string $model_class = HealthCheckResultHistoryItem::class;
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected null|string $model_class = HealthCheckResultHistoryItem::class;
=======
    protected ?string $model_class = HealthCheckResultHistoryItem::class;
>>>>>>> a12f125f4a (.)
=======
    protected null|string $model_class = HealthCheckResultHistoryItem::class;
>>>>>>> b93ef594b4 (.)
=======
    protected ?string $model_class = HealthCheckResultHistoryItem::class;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)

    /**
     * Run the migrations.
     *
     * @return void
=======
>>>>>>> 551c768c4 (.)
     */
    public function up(): void
    {
        // -- CREATE --
<<<<<<< HEAD
<<<<<<< HEAD
=======
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
=======
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
        $this->tableCreate(function (Blueprint $table): void {
            $table->id();

            $table->string('check_name');
            $table->string('check_label');
            $table->string('status');
            $table->text('notification_message')->nullable();
            $table->string('short_summary')->nullable();
            $table->json('meta');
            $table->timestamp('ended_at');
            $table->uuid('batch')->index();
        });

        // -- UPDATE --
        $this->tableUpdate(function (Blueprint $table): void {
            $this->updateTimestamps($table, false);
        });
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
        $this->tableCreate(
            function (Blueprint $table): void {
                $table->id();
=======
        $this->tableCreate(function (Blueprint $table): void {
            $table->id();
>>>>>>> b93ef594b4 (.)
>>>>>>> ce6fc085 (.)

            $table->string('check_name');
            $table->string('check_label');
            $table->string('status');
            $table->text('notification_message')->nullable();
            $table->string('short_summary')->nullable();
            $table->json('meta');
            $table->timestamp('ended_at');
            $table->uuid('batch')->index();
        });
<<<<<<< HEAD
=======
=======
>>>>>>> 218dfed3 (.)
=======

        // -- UPDATE --
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
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
        $this->tableCreate(
            function (Blueprint $table): void {
                $table->id();

                $table->string('check_name');
                $table->string('check_label');
                $table->string('status');
                $table->text('notification_message')->nullable();
                $table->string('short_summary')->nullable();
                $table->json('meta');
                $table->timestamp('ended_at');
                $table->uuid('batch')->index();
            }
        );
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)

        // -- UPDATE --
=======

        // -- UPDATE --
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
=======

        // -- UPDATE --
>>>>>>> 7468a7d2 (.)
=======

        // -- UPDATE --
>>>>>>> 5cf46378 (.)
        $this->tableUpdate(
            function (Blueprint $table): void {
                $this->updateTimestamps($table, false);
            }
        );
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->tableUpdate(function (Blueprint $table): void {
            $this->updateTimestamps($table, false);
        });
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
        $this->tableUpdate(function (Blueprint $table): void {
            $this->updateTimestamps($table, false);
        });
>>>>>>> b93ef594b4 (.)
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
    }
};
