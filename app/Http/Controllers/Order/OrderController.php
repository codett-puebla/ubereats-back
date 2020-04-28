<?php

namespace App\Http\Controllers\Order;

use App\order;
use App\order_detail;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class OrderController extends ApiController
{
    public function index()
    {
        $orders = order::all();

        foreach ($orders as $order){
            $order->order_details;
            $order->restaurant;
        }

        return $this->showAll($orders);
    }

    public function store(Request $request)
    {
        $rules = [
            'id' => 'required',
            'date'  => 'required',
            'total'  => 'required',
            'status'  => 'required',
            'hour'  => 'required',
            'restaurant_id'  => 'required',
            'user_id'  => 'required'
        ];

        $this->validate($request,$rules);

        $order = new order($request->all());
        $order->user_id = Auth::id();
        $order->save();

        if($request->has("order_details")){
            $order_details = $request->all()["order_details"];
            foreach ($order_details as $order_detail){
                $newOrderDetail = new order_detail($order_detail);
                $order->order_details()->save($newOrderDetail);
            }
        }
        return $this->showOne($order);
    }

    public function show(order $order)
    {
        $order->user;
        return $this->showOne($order);
    }

    public function update(Request $request, order $order)
    {
        $rules = [
            'order_name' => 'unique:orders,order_name,'.$order->id
        ];

        $this->validate($request,$rules);

        $order->fill($request->only([
            'order_name',
            'quantity',
            'confirmed'
        ]));

        if($order->isClean()){
            return $this->errorResponse('A different value must be specified to update',422);
        }


        $order->save();

        return $this->showOne($order);
    }

    public function destroy(order $order)
    {
        $order->delete();
        return $this->showOne($order);
    }
}
