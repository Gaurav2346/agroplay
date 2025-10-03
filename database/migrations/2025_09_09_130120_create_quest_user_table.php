<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('quest_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('quest_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->timestamp('completed_at')->nullable();
            $table->unique(['quest_id','user_id']);
            $table->timestamps();
        });
    }
    public function down() {
        Schema::dropIfExists('quest_user');
    }
};
