<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnnoncesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $annonces = DB::table('annonces')->get();
        return view('annonce.index',compact('annonces'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('annonce.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'type' => 'required',
            'ville' => 'required',
            'superficie' => 'required|numeric',
            'prix' => 'required|numeric',
        ]);

        DB::table('annonces')->insert([
            'title' => $validatedData['titre'],
            'description' => $validatedData['description'],
            'type' => $validatedData['type'],
            'ville' => $validatedData['ville'],
            'superficie' => $validatedData['superficie'],
            'neuf' => $request->neuf === 'on'?true:false,
            'prix' => $validatedData['prix'],
            'created_at'=>now()
        ]);

        return redirect()->route('annonces.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $annonce = DB::table('annonces')->where('id',$id)->first();
        return view('annonce.show',compact('annonce'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $annonce = DB::table('annonces')->where('id',$id)->first();
        return view('annonce.edit',compact('annonce','id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $validatedData = $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'type' => 'required',
            'ville' => 'required',
            'superficie' => 'required|numeric',
            'prix' => 'required|numeric',
        ]);

        DB::table('annonces')->where('id', $id)->update([
            'title' => $validatedData['titre'],
            'description' => $validatedData['description'],
            'type' => $validatedData['type'],
            'ville' => $validatedData['ville'],
            'superficie' => $validatedData['superficie'],
            'neuf' =>  $request->neuf  === 'on' ?true:false,
            'prix' => $validatedData['prix'],
            'created_at'=>now()
        ]);
        return redirect()->route('annonces.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::table('annonces')->where('id', $id)->delete();
        return redirect()->route('annonces.index');
    }

}
