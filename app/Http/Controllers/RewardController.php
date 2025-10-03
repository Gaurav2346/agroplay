<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reward;
use App\Models\User;

class RewardController extends Controller {
    public function index(Request $request) {
        $rewards = Reward::all();
        $currentUser = null;
        if ($request->session()->has('current_user')) {
            $currentUser = User::find($request->session()->get('current_user'));
        }
        return view('rewards.index', compact('rewards','currentUser'));
    }

    public function redeem(Request $request, $id) {
        $user = User::find($request->session()->get('current_user'));
        if (!$user) return redirect()->back()->with('error','Select a farmer first.');

        $reward = Reward::findOrFail($id);
        if ($user->points < $reward->cost_points) {
            return redirect()->back()->with('error','Not enough points to redeem.');
        }
        // deduct and attach
        $user->points -= $reward->cost_points;
        $user->save();
        $user->rewards()->attach($reward->id, ['redeemed_at'=>now()]);

        return redirect()->back()->with('success','Reward redeemed: '.$reward->title);
    }
}
