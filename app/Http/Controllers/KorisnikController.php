<?php

namespace App\Http\Controllers;

use App\Models\Korisnik;
use App\Models\Uloga;
use Illuminate\Http\Request;

class KorisnikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $korisnici = Korisnik::all();
        return view('users.index', compact('korisnici'));  //compact - vrijednost varijable prosljeđuje na view pod tim imenom
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $uloge = Uloga::all();

        $korisnik = new Korisnik();

       return view('users.novi', compact('uloge', 'korisnik'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'ime' => 'required',
            'prezime' => 'required',
            'email' => 'required|email',



       ]);

        $korisnik = new Korisnik();

       $korisnik->ime = $request->ime;
       $korisnik->prezime = $request->prezime;
       $korisnik->email = $request->email;
       $korisnik->id_uloga = $request->uloga;
       $korisnik->save();

       return redirect()->route('korisnik.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Korisnik  $korisnik
     * @return \Illuminate\Http\Response
     */
    public function show(Korisnik $korisnik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Korisnik  $korisnik
     * @return \Illuminate\Http\Response
     */
    public function edit(Korisnik $korisnik)
    {
          $uloge = Uloga::all();

        return view('users.edit', compact('korisnik', 'uloge'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Korisnik  $korisnik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Korisnik $korisnik)
    {
       /* dd($request->all(), $korisnik); */ // request all vraca sve iz forme

       $request->validate([

            'ime' => 'required',
            'prezime' => 'required',
            'email' => 'required|email',



       ]);

       $korisnik->ime = $request->ime;
       $korisnik->prezime = $request->prezime;
       $korisnik->email = $request->email;
       $korisnik->id_uloga = $request->uloga;
       $korisnik->save();

       return redirect()->route('korisnik.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Korisnik  $korisnik
     * @return \Illuminate\Http\Response
     */
    public function destroy(Korisnik $korisnik)
    {
          $korisnik->delete();
          return redirect()->route('korisnik.index');
    }

    public function obrisi(Korisnik $korisnik)
    {
          $korisnik->delete();
          return redirect()->route('korisnik.index');
    }
}
