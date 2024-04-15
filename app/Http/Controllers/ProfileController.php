<?php

namespace App\Http\Controllers;
use App\models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function profile(request $request) {

        $data = Auth::user();


        return view('profile.profile',compact('data'));
    }

    public function edit(Request $request,$id) {
        $data =User::find($id);

        return view('profile.edit-profile',compact('data'),[
            'user' => $request->user(),
        ]);
    }


    public function update(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', 
            'email' => 'required|email',
            'nama' => 'required',
            'password' => 'nullable',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $find = User::find($id);

        if (!$find) {
            return redirect()->back()->with('error', 'User not found.');
        }

        $filename = null;

        $photo = $request->file('photo');
        if ($photo) {
            if (!$photo->isValid()) {
                return redirect()->back()->with('error', 'Invalid file uploaded.');
            }

            $filename = date('y-a-d') . $photo->getClientOriginalName();
            $path = 'photo-user/' . $filename;

            if ($find->image && Storage::disk('public')->exists('photo-user/' . $find->image)) {
                Storage::disk('public')->delete('photo-user/' . $find->image);
            }

            Storage::disk('public')->put($path, file_get_contents($photo));
        }

        $data = [
            'email' => $request->email,
            'name' => $request->nama,
        ];

        if ($request->password) {
            $data['password'] = Hash::make($request->password);
        }

        if ($filename) {
            $data['image'] = $filename;
        }

        $find->update($data);

        return redirect()->route('writer.profile')->with('success', 'User updated successfully.');
    }
}
