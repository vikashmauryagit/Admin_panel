<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('upcoming_events', function (Blueprint $table) {
            $table->id();
            $table->date('event_date');
            $table->string('event_title');
            $table->text('objectives');
            $table->string('resource_person');
            $table->string('beneficiaries');
            $table->text('event_outcome');
            $table->string('committee');
            $table->string('cordinator');
            $table->string('event_img')->nullable(); // Nullable image path
            $table->timestamps(); // Created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('upcoming_events');
    }
};
