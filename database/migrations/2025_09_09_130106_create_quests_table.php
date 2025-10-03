<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('quests', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->unsignedInteger('reward_points')->default(100);
            $table->enum('status', ['active','archived'])->default('active');
            $table->timestamps();
        });
    }
    public function down() {
        Schema::dropIfExists('quests');
    }
};
