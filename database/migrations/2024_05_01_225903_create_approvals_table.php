<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('approvals', function (Blueprint $table) {
            $table->id();
            $table->morphs('content'); // This creates content_id and content_type
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('action_type'); // 'create', 'update', 'delete'
            $table->boolean('is_approved')->default(false);
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('admin_id')->references('id')->on('users');
            $table->index(['content_id', 'content_type', 'action_type'], 'content_action_index');
            $table->index('is_approved', 'approval_status_index');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('approvals');
    }
};
