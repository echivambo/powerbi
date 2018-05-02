<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $user;
    public function __construct(User $user)
    {
        $this->user=$user;
    }

    public function index()
    {

        $users = $this->user->all();
        return view('admin.user', compact('users'));
    }

    public function store(UserRequest $request)
    {
        User::create($request->all());
        return redirect()->route('users.index')->with('message', 'Usuário salvo com sucesso!');
    }
}
