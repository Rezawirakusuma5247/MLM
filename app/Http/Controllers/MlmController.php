<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Asset;
use App\Models\Provals;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class MlmController extends Controller
{
    public function rank(){


        return view('mlm.rank');
    }

    public function information(){


        return view('mlm.information');
    }

    public function validation(Request $request) {

        $data = User::orderByRaw("FIELD(rank, 'Owner', 'Sponsorship', 'Upperline', 'Downline')")
        ->get();

        $data = Asset::all();
        return view('mlm.form-validation', compact('data', 'request'));
    }

    public function create() {

        return view('mlm.form-create');
    }

    public function thanks() {
        return view('mlm.thanks');
    }

    public function uh() {
        return view('mlm.uh-ohh');
    }
    public function store(Request $request) {

        $validator = $request->validate ([
            'user_id' => 'required',
            'number'=> 'required',
            'Rank' => 'required',
            'choice' => 'required',
            'code' => 'required',
        ]);
        $asset = Asset::create($validator);
        $user = Auth::user();
    if ($user && $user->hasRole('admin')) {
        return redirect()->route('vals.validation', ['asset' => $asset->id]);
    } else {
        return redirect()->route('vals.thanks');
    }
    }

    public function delete(Request $request, $id)
{
    $data = Asset::find($id);

        if($data) {
            $data->delete();
        }

    return redirect()->route('vals.validation');
}

    public function product() {

        return view('mlm.product');
    }

    public function proses() {

        return view('mlm.form-product');
    }

    public function form(Request $request) {

        $validator = $request->validate ([
            'user_id' => 'required',
            'number'=> 'required',
            'product' => 'required',
            'box' => 'required',
        ]);
       $product = Product::create($validator);
        $user = Auth::user();
        if ($user && $user->hasRole('admin')) {

            return redirect()->route('vals.request', ['asset' => $product->id]);
        } else {
            return redirect()->route('vals.thanks');
        }
    }

    public function request(Request $request) {

        $data = User::orderByRaw("FIELD(rank, 'Owner', 'Sponsorship', 'Upperline', 'Downline')")
        ->get();

        $data = Product::all();
        return view('mlm.request', compact('data', 'request'));
    }
    public function delete_product(Request $request, $id)
{
    $data = Product::find($id);

        if($data) {
            $data->delete();
        }

    return redirect()->route('vals.request');
}

    public function provals(Request $request) {

        $data = User::orderByRaw("FIELD(rank, 'Owner', 'Sponsorship', 'Upperline', 'Downline')")
        ->get();

        $data = Provals::all();
        return view('mlm.provals', compact('data', 'request'));

    }
    public function create_p() {
            return view('mlm.form-provals');
    }

    public function store_p(Request $request) {
        $validator = $request->validate ([
            'user_id' => 'required',
            'nomor'=> 'required',
            'rekening' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png|max:2048',
            'deskripsi' => 'required',
        ]);

        $photo = $request->file('image');
        $filename = date('y-a-d') . '_' . $photo->getClientOriginalName();
        $photo->move(public_path('provals'), $filename);

        $data = Provals::create([
            'user_id' => $request->user_id,
            'nomor' => $request->nomor,
            'rekening' => $request->rekening,
            'image' => $filename,
            'deskripsi' => $request->deskripsi,
        ]);

        $user = Auth::user();
        if ($user && $user->hasRole('admin')) {
            return redirect()->route('vals.provals', ['asset' => $data->id]);
        } else {
            return redirect()->route('vals.thanks');
        };
    }
    public function delete_provals(Request $request, $id)
{
    $data = Provals::find($id);

        if($data) {
            $data->delete();
        }
    return redirect()->route('vals.provals');
}
}
