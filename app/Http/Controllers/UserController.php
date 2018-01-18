<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Services\UserRegisterService;

class UserController extends Controller
{
    /** @var   */
    protected $userRegisterService;

    public function __construct(UserRegisterService $userRegisterService)
    {
        $this->userRegisterService = $userRegisterService;
    }

    public function login()
    {
        return view('login.login');
    }

    public function postLogin(Request $request)
    {
        if (Auth::attempt(['name' => $request->name, 'passwd' => $request->passwd])) {
            return redirect()->route('welcome');
        }

        flash('Login ou senha incorretos ou inexistentes.')->error();
        return redirect()->route('login');
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {

        flash('Usuário cadastrado com sucesso.')->success();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
