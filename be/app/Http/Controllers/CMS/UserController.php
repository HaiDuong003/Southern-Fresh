<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Repositories\CMS\UserRepository;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        //
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        //
    }

    public function loginForm()
    {
        //
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        //
        $validated = $request->validated();
        // $user = 
        try {
            if (Auth::attempt($validated)) {
                $userLogin = $this->userRepository->findByEmail($validated['email']);
                if (!empty($userLogin) && Hash::check($validated['password'], $userLogin['password'])) {
                    // $userInfor = Auth::user();
                    // print_r($a->password);
                    $request->session()->regenerate();
                    session(['user' => $userLogin['name'],]);
                    return redirect()->route('dashboard')->withSuccess(__('messages.success.auth.login'));;
                    // echo session('user');
                }
            } else {
                redirect()->route('login')->with('email', 'Wrong');
            }
        } catch (AuthenticationException $e) {
            return back()->withErrors(['email' => $e->getMessage()]);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()
            ->route('login');
    }
}
