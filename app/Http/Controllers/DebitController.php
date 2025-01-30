<?php

namespace App\Http\Controllers;

use App\Models\Debit;
use App\Http\Requests\StoreDebitRequest;
use App\Http\Requests\UpdateDebitRequest;

class DebitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Debit::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDebitRequest $request)
    {
        $request->validate([
            "date" => "required",
            "description" => "required | string | max:255",
            "value" => "required",
            "typeCash" => "required",
        ]);

        return $request;
    }

    /**
     * Display the specified resource.
     */
    public function show(Debit $debit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDebitRequest $request, Debit $debit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Debit $debit)
    {
        //
    }
}
