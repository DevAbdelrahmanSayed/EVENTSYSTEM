<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('club_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('represented_id');
            $table->unsignedBigInteger('event_category_id');
            $table->unsignedBigInteger('tag_id');
            $table->unsignedBigInteger('child_id');
            $table->foreign('club_id')->references('id')->on('clubs')->onDelete('CASCADE');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
            $table->foreign('represented_id')->references('id')->on('users')->onDelete('CASCADE');
            $table->foreign('event_category_id')->references('id')->on('event_categories')->onDelete('CASCADE');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('CASCADE');
            $table->foreign('child_id')->references('id')->on('event_categories')->onDelete('CASCADE');
            $table->string('name');
            $table->string('description');
            $table->timestamp('date_event');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('image')->nullable();
            $table->string('gender')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
