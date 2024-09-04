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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->date('event_date');
            $table->string('event_title',40);
            $table->string('objectives',200);
            $table->string('resource_person',50);
            $table->string('beneficiaries',40);
            $table->string('event_outcome',150);
            $table->string('committee',80);
            $table->string('cordinator',30);
            $table->string('event_img',250);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
