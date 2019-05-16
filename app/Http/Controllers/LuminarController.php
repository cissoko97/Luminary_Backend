<?php

namespace App\Http\Controllers;

use App\model\User;
use App\model\Luminar;
use Illuminate\Http\Request;

class LuminarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User();
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
     * @param  \App\model\Luminar  $luminar
     * @return \Illuminate\Http\Response
     */
    public function show(Luminar $luminar)
    {
        dd($luminar);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\model\Luminar  $luminar
     * @return \Illuminate\Http\Response
     */
    public function edit(Luminar $luminar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model\Luminar  $luminar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Luminar $luminar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\Luminar  $luminar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Luminar $luminar)
    {
        //
    }
}
