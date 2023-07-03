<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Menyus;
use Illuminate\Http\Request;

class MenyuController extends Controller
{

    public function index()
    {
        $menyus = Menyus::orderBy('id', 'DESC')->get();
        return view('admin.menyu.index');
    }


    public function create()
    {
     return view('admin.menyu.index');
    }


    public function store(Request $request)
    {
        Menyus::create($request->all());


        return redirect()->route('admin.menyu.index');


    }


    public function show(Menyus $menyu)
    {
        return view('admin.menyu.index');

    }


    public function edit(Menyus $menyu)
    {
     return view('admin.menyu.index');

    }


    public function update(Request $request, Menyus $menyu)
    {
        Menyus::find($id)->update($request->all());

        return redirect()->route('admin.menyu.index')->with('success', 'Malumot mavaffaqiyatli ozgartirildi');

    }


    public function destroy(Menyus $menyu)
    {
        Menyus::find($id)->delete();

        return redirect()->route('admin.menyu.index')->with('success', 'Malumot mavaffaqiyatli ochirildi');

    }
}
