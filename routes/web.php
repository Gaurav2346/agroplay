<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuestController;
use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\RewardController;

Route::get('/', [HomeController::class,'index'])->name('home');

Route::post('/select-user', [UserController::class,'select'])->name('select.user');

Route::get('/quests', [QuestController::class,'index'])->name('quests.index');
Route::post('/quests/{id}/complete', [QuestController::class,'complete'])->name('quests.complete');

Route::get('/leaderboard', [LeaderboardController::class,'index'])->name('leaderboard');

Route::get('/rewards', [RewardController::class,'index'])->name('rewards.index');
Route::post('/rewards/{id}/redeem', [RewardController::class,'redeem'])->name('rewards.redeem');
