<?php

namespace App\Http\Controllers;

use App\Models\Clubs;
use App\Models\Managers;
use App\Models\Matches;
use App\Models\Players;
use Illuminate\Http\Request;
use App\Models\Stadiums;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.landing-page.index');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    // custom
    public function clubs()
    {
        $clubs = Clubs::all();
        $no_urut =  1;

        return view('pages.landing-page.clubs', [
            'clubs' => $clubs,
            'nomer' => $no_urut
        ]);
    }

    public function players()
    {
        $players = Players::all();
        $no_urut = 1;

        return view('pages.landing-page.players', [
           'players' => $players,
           'nomer' => $no_urut
        ]);
    }

    public function managers()
    {
        $managers = Managers::all();
        $no_urut = 1;

        return view('pages.landing-page.managers', [
            'managers' => $managers,
            'nomer' => $no_urut
        ]);
    }

    public function stadiums()
    {
        $stadiums = Stadiums::all();
        $no_urut = 1;

        return view('pages.landing-page.stadiums', [

            'stadiums' => $stadiums,
            'nomer' => $no_urut
        ]);
    }

}
