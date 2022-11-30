<?php

namespace App\Http\Controllers;

use App\Models\Transactionhistory;
use App\Http\Requests\StoreTransactionhistoryRequest;
use App\Http\Requests\UpdateTransactionhistoryRequest;

class TransactionhistoryController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTransactionhistoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTransactionhistoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transactionhistory  $transactionhistory
     * @return \Illuminate\Http\Response
     */
    public function show(Transactionhistory $transactionhistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transactionhistory  $transactionhistory
     * @return \Illuminate\Http\Response
     */
    public function edit(Transactionhistory $transactionhistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTransactionhistoryRequest  $request
     * @param  \App\Models\Transactionhistory  $transactionhistory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTransactionhistoryRequest $request, Transactionhistory $transactionhistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transactionhistory  $transactionhistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transactionhistory $transactionhistory)
    {
        //
    }
}
