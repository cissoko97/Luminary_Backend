<?php

namespace App\Http\Controllers;

use App\model\User;
use App\model\Luminar;
use Illuminate\Http\Request;
use App\Http\Resources\LuminarCollection;
use App\Http\Resources\Luminar as LuminarResource;

class LuminarController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new LuminarCollection(Luminar::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $luminar = Luminar::create($request->all());
        return (new LuminarResource($luminar))
                ->response()
                ->setStatusCode(201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\model\Luminar  $luminar
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new LuminarResource(Luminar::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model\Luminar  $luminar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $luminar = Luminar::findOrFail($id);
        $luminar->update($request->all());
        return new LuminarResource($luminar);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\Luminar  $luminar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $luminar = Luminar::findOrFail($id);
        $luminar->delete();

        return response()->json(null, 204);
    }
}
