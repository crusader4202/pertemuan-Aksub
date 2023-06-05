<?php

namespace App\Http\Controllers;

use App\Models\Orang;
use App\Http\Requests\StoreOrangRequest;
use App\Http\Requests\UpdateOrangRequest;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;

class OrangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // echo ($request->fullUrl());
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $req)
    {
        $picture_name = $req->file('Picture')->getClientOriginalName();
        $req->file('Picture')->storeAs('public/images', $picture_name);
        Orang::create([
            'name' => $req->Name,
            'age' => $req->Age,
            'picture' => $picture_name,
        ]);
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrangRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Orang $orang)
    {
        $orangs = Orang::all();
        return view('list', compact('orangs'));
    }

    public function download($id)
    {
        $orang = Orang::findorFail($id);
        $image = '/storage/images/' . $orang->picture;
        $path = str_replace('\\', '/', public_path());
        return response()->download($path . $image);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $orang = Orang::find($id);
        return view("edit", compact('orang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $req)
    {
        $picture_name = $req->file('Picture')->getClientOriginalName();
        $req->file('Picture')->storeAs('public/images', $picture_name);
        Orang::find($id)->update([
            'name' => $req->Name,
            'age' => $req->Age,
            'picture' => $picture_name,
        ]);
        return view('welcome');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $orang = Orang::findOrFail($id);
        $picture = "/storage/images/" . $orang->picture;
        $path = str_replace('\\', '/', public_path());
        unlink($path . $picture);
        Orang::destroy($id);
        return view("welcome");
    }
}
