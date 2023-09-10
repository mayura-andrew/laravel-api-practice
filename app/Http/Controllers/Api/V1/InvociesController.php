<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\StoreInvociesRequest;
use App\Http\Requests\UpdateInvociesRequest;
use App\Models\Invocies;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\InvocieResource;
use App\Http\Resources\V1\InvocieCollection;
class InvociesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return new InvocieCollection(Invocies::paginate());

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
     * @param  \App\Http\Requests\StoreInvociesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInvociesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invocies  $invocies
     * @return \Illuminate\Http\Response
     */
    public function show(Invocies $invocies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invocies  $invocies
     * @return \Illuminate\Http\Response
     */
    public function edit(Invocies $invocies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInvociesRequest  $request
     * @param  \App\Models\Invocies  $invocies
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInvociesRequest $request, Invocies $invocies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invocies  $invocies
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invocies $invocies)
    {
        //
    }
}
