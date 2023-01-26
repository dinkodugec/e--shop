<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Uloga;
use Illuminate\Http\Request;

class UlogaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      /*  $studenti = Student::with(['predmeti' => function($query){
        $query->where('ocjena', '>=', 8);
       } ])->get();
        dd($studenti);

        ova funkcija vraca sve studente s njihovim predmetima koji imaju ocjenu vecu od 8

        */

        $studenti = Student::with(['predmeti'])->whereHas('predmeti', function($query){
            $query->where('ocjena', '>=', 9);
        })->get();


         /*    ova metoda vraca studente kojima je je bar jedan predmet položen s ocjenom 9 ili više */

         return view('users.studenti', compact('studenti') );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Uloga  $uloga
     * @return \Illuminate\Http\Response
     */
    public function show(Uloga $uloga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Uloga  $uloga
     * @return \Illuminate\Http\Response
     */
    public function edit(Uloga $uloga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Uloga  $uloga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Uloga $uloga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Uloga  $uloga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Uloga $uloga)
    {
        //
    }
}
