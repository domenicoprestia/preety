<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Preet;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profile.show', compact('user'));
    }

    public function edit(User $user)
    {
        if ($user->isNot(auth()->user())) {
            abort(404);
        }
        return view('profile.edit', compact('user'));
    }

    public function update(User $user)
    {
        if(request('avatar')){
        $attributes = request()->validate([
            'username' => ['string', 'required', 'max:255', 'alpha_dash', Rule::unique('users')->ignore($user)],
            'name' => ['string', 'required', 'max:255'],
            'avatar' => ['required', 'file'],
            'email' => ['string', 'required', 'email', 'max:255', Rule::unique('users')->ignore($user)]]);
         $attributes['avatar'] = request('avatar')->store('avatars');
        }else{
            $attributes = request()->validate([
                'username' => ['string', 'required', 'max:255', 'alpha_dash', Rule::unique('users')->ignore($user)],
                'name' => ['string', 'required', 'max:255'],
                'email' => ['string', 'required', 'email', 'max:255', Rule::unique('users')->ignore($user)]
            ]);
        }
        $user->update($attributes);
        return redirect(route('profile', $attributes['username']));
    }

    public function showall()
    {
        $profiles = User::all()->whereNotIn('id', auth()->user()->id);
        return view('profile.view', compact('profiles'));
    }

    public function showname()
    {
        $username = request('username');
        if ($username != "") {
            $profiles = User::where('username', $username)->get();
            return view('profile.view', compact('profiles'));
        } else {
            $profiles = User::all();
            return view('profile.view', compact('profiles'));
        }
    }
}
