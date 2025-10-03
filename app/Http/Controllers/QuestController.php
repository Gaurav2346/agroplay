<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quest;
use App\Models\User;
use Carbon\Carbon;

class QuestController extends Controller {
    public function index(Request $request) {
        $quests = Quest::where('status','active')->get();
        $currentUser = null;
        if ($request->session()->has('current_user')) {
            $currentUser = User::find($request->session()->get('current_user'));
        }
        return view('quests.index', compact('quests','currentUser'));
    }

    public function complete(Request $request, $id) {
        $request->validate(['user_id'=>'nullable|exists:users,id']);
        $user = User::find($request->user_id ?? $request->session()->get('current_user'));
        if (!$user) return redirect()->back()->with('error','Select a farmer first.');

        $quest = Quest::findOrFail($id);
        // check already completed
        if ($user->quests()->where('quest_id',$quest->id)->exists()) {
            return redirect()->back()->with('error','Quest already completed.');
        }
        // attach and add points
        $user->quests()->attach($quest->id, ['completed_at'=>now()]);
        $user->points = $user->points + $quest->reward_points;
        $user->save();

        return redirect()->back()->with('success','Quest completed! +'.$quest->reward_points.' pts');
    }
}
