<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;
use Modules\Xot\Models\HealthCheckResultHistoryItem;

return new class extends XotBaseMigration
{
    protected ?string $model_class = HealthCheckResultHistoryItem::class;

    /**
     * Run the migrations.
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
     */
    public function up(): void
    {
        // -- CREATE --
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
>>>>>>> 2f3197ab (.)

        // -- UPDATE --
=======

        // -- UPDATE --
>>>>>>> origin/develop
>>>>>>> ce6fc085 (.)
        $this->tableUpdate(
            function (Blueprint $table): void {
                $this->updateTimestamps($table, false);
            }
        );
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
    }
};
