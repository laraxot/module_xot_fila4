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
<<<<<<< HEAD
<<<<<<< HEAD
    protected null|string $model_class = HealthCheckResultHistoryItem::class;
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

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        // -- CREATE --
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 73eab74 (.)
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

            $table->string('check_name');
            $table->string('check_label');
            $table->string('status');
            $table->text('notification_message')->nullable();
            $table->string('short_summary')->nullable();
            $table->json('meta');
            $table->timestamp('ended_at');
            $table->uuid('batch')->index();
        });
=======
=======
>>>>>>> 218dfed3 (.)
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
>>>>>>> 2f3197ab (.)

        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {
                $this->updateTimestamps($table, false);
            }
        );
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
    }
};
