<?php

namespace App\Http\Controllers;

use App\Models\PaymentType;
use App\Http\Requests\StorePaymentTypeRequest;
use App\Http\Requests\UpdatePaymentTypeRequest;
use Illuminate\Database\Eloquent\Collection;

class PaymentTypeController extends Controller
{

    public function index(): Collection
    {
        return PaymentType::all();
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePaymentTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PaymentType $paymentType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PaymentType $paymentType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaymentTypeRequest $request, PaymentType $paymentType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PaymentType $paymentType)
    {
        //
    }
}
