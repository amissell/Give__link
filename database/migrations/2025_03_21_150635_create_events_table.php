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
      $table->foreignId('organization_id')->constrained()->onDelete('cascade');
      $table->string('title');
      $table->text('description');
      $table->string('image')->nullable();
      $table->enum('situation', ['completed', 'cancelled', 'in progress'])->default('in progress');
      $table->integer('capacity')->default(0);
      $table->dateTime('startEventAt')->nullable(false);
      $table->dateTime('endEventAt')->nullable(false);
      $table->foreignId('ville_id')->nullable()->constrained('villes')->onDelete('set null');
      $table->timestamps();
    });

    Schema::create('event_volunteer', function (Blueprint $table) {
      $table->id();
      $table->foreignId('event_id')->constrained()->onDelete('cascade');
      $table->foreignId('user_id')->constrained()->onDelete('cascade');
      $table->timestamps();
    
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('event_volunteer');
    Schema::dropIfExists('events');
  }
};
