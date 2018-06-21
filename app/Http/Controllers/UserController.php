<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Mail\SendEmail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

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

    public function create()
    {
        $province = DB::table('provice_of_mozambique')
            ->orderByRaw('province')
            ->get();

        return view('admin.user', compact('province'));
    }

    public function store(UserRequest $request)
    {
        $posts =$request->all();

        Mail::to($posts['email'])->send(new SendEmail($posts));

        User::create([
            'name' => $posts['name'],
            'email' => $posts['email'],
            'grupo' => $posts['grupo'],
            'provincia_id' => $posts['provincia_id'],
            'distrito_id' => $posts['distrito_id'],
            'password' => Hash::make($posts['password']),
        ]);
        //User::create($posts);
        return redirect()->route('users.create')->with('message', 'Usuário salvo com sucesso!');
    }

    public function login_from_apk(Request $request){
        $data = $request->all();
        $email = $data['emal'];
        $senaha = $data['password'];

        $user = DB::table('users')->where([
            ['email', '=', $email],
            ['password', '=', $senaha],
        ])->get();
        echo json_encode(array("usuario" => $user));
    }
}
