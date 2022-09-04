<?php

namespace App\Http\Controllers\AUTH;

use App\Http\Controllers\Controller;
use App\Http\Requests\BaseLoginFormRequest;
use App\Http\Requests\BaseRegisterFormRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class Auth_controller extends Controller
{
    public function loginForm(){
        return view('auth.login');
    }

    public function registerForm(){
        return view('auth.register');
    }

    public function login(BaseLoginFormRequest $request){
        $data = $request->validated();

        if(Auth::attempt($data, true)){
            $request->session()->regenerate();

            return redirect(route('profile'));
        }
        return back()->with([
            'email'=>'invalid'
        ]);
    }

    public function profile(Request $request){
        return view('auth.profile',['user' => (new UserResource(Auth::user()))->toArray($request)]);
    }

    public function logout(Request $request): Redirector|Application|RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function register(BaseRegisterFormRequest $request){
        $data = $request->validated();

        $user = User::query()
            ->where('login', $data['login'])
            ->first();

        if ($user !== null) {
            $user->updateFromRequest($data);
        } else {
            $user = User::createFromRequest($data);

        }

        Auth::login($user);
        $request->session()->regenerate();

        return redirect(route('profile'));
    }


}
