<?php

namespace App\Http\Controllers;
use App\models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    // public function __construct(){
    //     $this->middleware(['permission:view_chart_ondashboard']);
    // }
    public function dashboard() {
        return view('dashboard');
    }
// Controller Method
public function index(Request $request) {
    $rootUser = User::whereNull('parent_id')->first();
    $data = $this->organizeUsersIntoRoot($rootUser);
    return view('index', compact('data', 'request', 'rootUser'));
}
private function organizeUsersIntoRoot($user) {
    $root = [];
    $this->buildRootLevel($user, $root, 0);
    // Sort root levels based on the level number
    ksort($root);
    return $root;
}
private function buildRootLevel($user, &$root, $level) {
    if (!isset($root[$level])) {
        $root[$level] = [];
    }

    // If the user has children, process them first
    $children = User::where('parent_id', $user->id)->get();
    foreach ($children as $child) {
        $this->buildRootLevel($child, $root, $level + 1);
    }

    // Add the user after its children (if any)
    $user->level = $level;
    $root[$level][] = $user;
}
    public function user(Request $request) {
        $data = User::orderByRaw("FIELD(rank, 'Owner', 'Sponsorship', 'Upperline', 'Downline')")->get();

        return view('user', compact('data', 'request'));
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'rank' => 'required',
            'photo' => 'required|mimes:png,jpg,jpeg|max:2048',
            'email' => 'required|email',
            'nama' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $photo = $request->file('photo');
        $filename = date('y-a-d').$photo->getClientOriginalName();
        $path ='photo-user/'.$filename;
        Storage::disk('public')->put($path, file_get_contents($photo));
        $data = new User();
        $data->rank = $request->rank;
        $data->email = $request->email;
        $data->name = $request->nama;
        $data->password = Hash::make($request->password);
        $data->image = $filename;
        $randomNumber = str_pad(random_int(0, 999), 3, '0', STR_PAD_LEFT);
        $codes = 'C-002' . $randomNumber;
        $data->codes = $codes;
        $data->save();

        return redirect()->route('admin.index');
    }

    public function edit(Request $request, $id) {
        $data = User::find($id);
        if (!$data) {
            return redirect()->route('admin.user')->with('error', 'User not found.');
        }
        return view('edit', compact('data'));
    }

    public function update(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'rank' => 'nullable',
            'codes' => 'nullable',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        $find = User::find($id);
        $data = [
            'rank' => $request->rank,
            'codes' => $request->codes,
        ];
        $find->update($data);
        return redirect()->route('admin.index');
    }

    public function delete(Request $request,$id) {
        $data = User::find($id);
        if($data) {
            $data->delete();
        }
        return redirect()->route('admin.index');

    }
}
