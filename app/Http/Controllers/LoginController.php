<?php

namespace App\Http\Controllers;
use App\models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class LoginController extends Controller
{
    public function index() {
        return view ('auth.login');

    }

    public function login_proses(Request $request) {
        $request->validate ([
            'email' => 'required',
            'password' => 'required',
        ]);

        $data = [
            'email' =>$request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($data)){
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->route('login')->with('failed','Email atau Password salah');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login')->with('sucses','Kamu berhasil logout');
    }

    public function register()
{
    $users = User::all();
    return view('auth.register', compact('users'));
}

public function register_proses(Request $request) {
    $request->validate([
        'nama' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6',
        'parent_id' => 'required',
        'number' => 'required',
    ]);

    $parentUser = User::where('codes', $request->parent_id)->first();

    if (!$parentUser) {
        return redirect()->back()->with('failed', 'Invalid parent user.');
    }

    $lastUser = User::orderBy('id', 'desc')->first();
    $lastUserCode = $lastUser ? $lastUser->codes : 'C-002000';
    $lastCodeNumber = intval(substr($lastUserCode, -3));
    $nextCodeNumber = $lastCodeNumber + 1;
    $nextCodeNumberPadded = str_pad($nextCodeNumber, 3, '0', STR_PAD_LEFT);
    $code = 'C-002' . $nextCodeNumberPadded;

    $defaultImageUrl = asset('lte/dist/img/Logo PNG.png');

    $data = [
        'name' => $request->nama,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'codes' => $code,
        'parent_id' => $parentUser->id,
        'number' => $request->number,
        'rank' => 'DownLine',
        'image' => $defaultImageUrl,
    ];

    User::create($data);

    $login = [
        'email' => $request->email,
        'password' => $request->password
    ];

    if (Auth::attempt($login)) {
        return redirect()->route('login');
    } else {
        return redirect()->route('login')->with('failed', 'Email atau Password salah');
    }
}

}
