<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Repositories\CMS\UserRepository;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Services\CMS\UserService;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\error;

class UserController extends Controller
{
    //
    protected $userService;

    public function __construct(UserService $userService)
    {
        //
        $this->userService = $userService;
    }

    public function index()
    {
        //
    }

    public function loginForm()
    {
        //
        if (Auth::check()) {
            return redirect()->route('dashboard')->withSuccess(__('messages.success.auth.login'));
        }

        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $validated = $request->validated();
        try {
            if (Auth::attempt($validated)) {
                $userLogin = $this->userService->authLogin($validated);
                if (!empty($userLogin)) {
                    $request->session()->regenerate();
                    session([
                        'user' => $userLogin['name'],
                        'is_active' => $userLogin['is_active'],
                        'role' => $userLogin['role']
                    ]);
                    return redirect()->route('dashboard')->withSuccess(__('messages.success.auth.login'));
                }
            } else {
                return back()->withErrors([
                    "email" => "Email or password is wrong"
                ])->withInput();
            }
        } catch (AuthenticationException $e) {
            return back()->withErrors(['email' => $e->getMessage()]);
        }
    }

    //  register
    public function register(RegisterRequest $request)
    {
        //
        $validated = $request->validated();
        $userRegister = $this->userService->create($validated);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()
            ->route('login');
    }

    public function profileUser()
    {
        //
        $userProfile = [];
        if (Auth::user()) {
            $userProfile = Auth::user();
        } else {
            echo 'wrong';
        }
        return view('users.profileUser', compact('userProfile'));
    }
}
