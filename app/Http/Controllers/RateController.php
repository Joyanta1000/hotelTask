<?php

namespace App\Http\Controllers;

use App\Models\Rate;
use App\Http\Requests\StoreRateRequest;
use App\Http\Requests\UpdateRateRequest;
use App\Models\Package;
use App\Models\Room;
use Illuminate\Support\Facades\DB;

class RateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        // $j = Rate::where('package_id', '=', $id)
        // ->orderBy('rates', 'asc')
        // ->get();
        // return $j->first();

        $result = Package::with('rate', 'room')
        ->when($id, function ($query, $id) {
            return $query->where('room_id', $id);
        })
       ->first();

       return $result;
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
     * @param  \App\Http\Requests\StoreRateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRateRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rate  $rate
     * @return \Illuminate\Http\Response
     */
    public function show(Rate $rate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rate  $rate
     * @return \Illuminate\Http\Response
     */
    public function edit(Rate $rate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRateRequest  $request
     * @param  \App\Models\Rate  $rate
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRateRequest $request, Rate $rate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rate  $rate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rate $rate)
    {
        //
    }
}
