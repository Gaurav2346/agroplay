<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LeaderboardController extends Controller {
    public function index() {
        $top = User::orderByDesc('points')->take(50)->get();
        return view('leaderboard', compact('top'));
    }
}
