<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('reward_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reward_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->timestamp('redeemed_at')->nullable();
            $table->timestamps();
        });
    }
    public function down() {
        Schema::dropIfExists('reward_user');
    }
};
