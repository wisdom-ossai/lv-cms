<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
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

     public function profile() {
         return view('users.profile-page')->with('user', auth()->user());
     }

     public function updateProfile(ProfileUpdateRequest $request) {
         $user = auth()->user();

        //  dd($user);
         $user->update([
             'email' => $request->email,
             'name' => $request->name,
             'about' => $request->about
         ]);

        session()->flash('success', 'Profile updated successfully');
        return redirect(route('users.profile'));
     }
}