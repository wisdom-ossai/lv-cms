<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Show page for all users
     */

     public function index() {
         return view('users.index')->withUsers(User::all());
     }

     public function makeAdmin(User $user) {
        if(!$user->isAdmin()) {
            $user->role = 'admin';
            $user->save();
            session()->flash('success', 'Operation Successful. User is now successfully an admin');
            return redirect(route('users.index'));
        } else {
            $user->role = 'writer';
            $user->save();
            session()->flash('success', 'Operation Successful. User is no longer an admin');
            return redirect(route('users.index'));
        }
     }
}
