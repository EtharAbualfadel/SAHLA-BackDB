<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
{

$order = Order::create([

'first_name'=>$request->firstName,
'last_name'=>$request->lastName,
'phone'=>$request->phone,
'email'=>$request->email,
'address'=>$request->address,
'postal_code'=>$request->postalCode,

]);

return response()->json($order);

}

    public function index()
    {
        return Order::latest()->get();
    }


    public function update(Request $request,$id)
    {

        $order = Order::findOrFail($id);

        $order->status = $request->status;

        $order->save();

        return response()->json($order);

    }



    public function destroy($id)
    {

        Order::destroy($id);

        return response()->json([
            'message'=>'Deleted'
        ]);

    }

}