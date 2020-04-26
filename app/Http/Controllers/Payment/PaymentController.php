<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\ApiController;
use App\Payment;
use Illuminate\Http\Request;

class PaymentController extends ApiController
{
    public function index()
    {
        $payments = Payment::all();
        foreach ($payments as $payment){
            $payment->travel;
        }
        return $this->showAll($payments);
    }

    public function store(Request $request)
    {
        $payment = Payment::create($request->all());
        return $this->showOne($payment);
    }

    public function show(Payment $payment)
    {
        $payment->travel;
        return $this->showOne($payment);
    }

    public function update(Request $request, Payment $payment)
    {
        $payment->fill($request->all());

        if ($payment->isClean()) {
            return $this->errorResponse('A different value must be specified to update', 422);
        }

        $payment->save();
        return $this->showOne($payment);
    }

    public function destroy(Payment $payment)
    {
        $payment->delete();
        return $this->showMessage('Record deleted successfully');
    }
}
