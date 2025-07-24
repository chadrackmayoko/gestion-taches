<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */

    public function index (){
       return view('profile.index', ['user' => auth()->user()]);
    }
    public function edit(Request $request): View
    {
        
        $projets = Auth::user()->projects()->latest()->get();
        return view('profile.edit', [
            'user' => $request->user(),
            'projets' => $projets
        ]);
    }

    /**
     * Update the user's profile information.
     */      
    /* public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    } */

        public function update (Request $request){
            $user = Auth::user();
            

            $validate = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email,' .$user->id,
                'password' => 'nullable|confirmed|min:8',
            ]);

            if($validate['password']){
                $validate['password'] = bcrypt($validate['password']);
            }
            else {
                unset($validate['password']);
            }
            $user->update($validate);
            return redirect()->route('profile.index')->with('success', 'Utilisateur mis à jour avec succès.');
        }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
