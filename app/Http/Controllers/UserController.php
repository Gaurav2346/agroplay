<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller {
    public function select(Request $request) {
        $request->validate(['user_id'=>'required|exists:users,id']);
        $request->session()->put('current_user', $request->user_id);
        return redirect()->back();
    }
}
