<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Quest;
use App\Models\Reward;

class HomeController extends Controller {
    public function index(Request $request) {
        $users = User::orderBy('name')->get();
        $currentUser = null;
        if ($request->session()->has('current_user')) {
            $currentUser = User::find($request->session()->get('current_user'));
        }
        return view('home', compact('users','currentUser'));
    }
}
