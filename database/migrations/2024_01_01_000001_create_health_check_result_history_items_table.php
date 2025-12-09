<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;
use Modules\Xot\Models\HealthCheckResultHistoryItem;

<<<<<<< HEAD
<<<<<<< HEAD
return new class extends XotBaseMigration
{
    protected ?string $model_class = HealthCheckResultHistoryItem::class;

    /**
     * Run the migrations.
=======
=======
>>>>>>> 5a14301c (.)
return new class extends XotBaseMigration {
<<<<<<< HEAD
    protected null|string $model_class = HealthCheckResultHistoryItem::class;
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

    /**
     * Run the migrations.
     *
     * @return void
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
     */
    public function up(): void
    {
        // -- CREATE --
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6cba4fe (.)
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
=======
=======
        $this->tableCreate(
            function (Blueprint $table): void {
                $table->id();
=======
        $this->tableCreate(function (Blueprint $table): void {
            $table->id();
>>>>>>> b93ef594b4 (.)

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
<<<<<<< HEAD
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

        // -- UPDATE --
>>>>>>> origin/develop
        $this->tableUpdate(
            function (Blueprint $table): void {
                $this->updateTimestamps($table, false);
            }
        );
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        $this->tableUpdate(function (Blueprint $table): void {
            $this->updateTimestamps($table, false);
        });
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
    }
};
