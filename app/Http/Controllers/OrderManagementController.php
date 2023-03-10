<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderManagementController extends Controller
{
    public function listOrder(){
        $orders = Order::all();

        // $maneger_order = view('orders.order')->with('order',$order);
        return view('orders.order',[
            'orders'=> $orders
        ]);
    }
    public function deleteOrder($orderId)
    {
        $orders = Order::find($orderId);
        $orders->delete();
        return redirect('/order');
    }

    // public function rate_comment(Request $request,$orderId){
    //     $request->validate([
    //         // 'orderId' => 'required',
    //         'rate' => 'required|min:1|max:5|',
    //         'comment' => 'min:0|max:255|',
    //     ]);
    //     $orders = Order::all();
    //     $orders = Order::where('orderId',$orderId)->update([
    //         'rate' => $request->input('rate'),
    //         'comment' => $request->input('comment'),
    //     ]);
    //     $orders->save();
        
    //     dd($orders->rate);
    // }






    public function listOrderById($id)
    {

        return "van duc";

    }


    public function create()
    {
        return view('orders.create');
    }


    public function store(Request $request)
    {

        $this->validate(request(),[
            'id', 'order_id' => 'required', 'product_id', 'qty', 'amount', 'data', 'status'
        ]);

        $data = request()->all();

        $order = new Order();
        $order->order_id = $data['order_id'];
        $order->product_id = $data['product_id'];
        $order->qty = $data['qty'];
        $order->amount = $data['amount'];
        $order->data = $data['data'];
        $order->status = $data['status'];


        $order->save();

        // session()->flash('success', 'order created successfully.');

        return redirect('/listOrder');
    }


    // public function deleteOrder($id){
    //     $orders = Order::all();
    //     foreach($orders as $order){
    //         if($order->order_id == $id){
    //             $data[] = $order;

    //         }
    //     }
    //     return $data;

    //     // session()->flash('success', 'Todo deleted successfully.');

    //     return redirect('/listOrder');
    // }

    public function cholayhang(){
        $data = array();
        $orders = Order::join('product', 'orders.product_id', '=', 'product.product_id')
        ->get(['orders.*', "product.*"]);
        foreach($orders as $order){
            if($order->status == 0){
                $data[] = $order;
            }
        }
        $orders = $data;
        return view('front-end.order')->with('orders', $orders);
    }

    public function danggiao(){
        $data = array();
        $orders = Order::join('product', 'orders.product_id', '=', 'product.product_id')
        ->get(['orders.*', "product.*"]);
        foreach($orders as $order){
            if($order->status == 1){
                $data[] = $order;
            }
        }
        $orders = $data;
        return view('front-end.order')->with('orders', $orders);
    }

    public function dahuy(){
        $data = array();
        $orders = Order::join('product', 'orders.product_id', '=', 'product.product_id')
        ->get(['orders.*', "product.*"]);
        foreach($orders as $order){
            if($order->status == 2){
                $data[] = $order;
            }
        }
        $orders = $data;
        return view('front-end.order')->with('orders', $orders);
    }

    public function dagiao(){
        $data = array();
        $orders = Order::join('product', 'orders.product_id', '=', 'product.product_id')
        ->get(['orders.*', "product.*"]);
        foreach($orders as $order){
            if($order->status == 3){
                $data[] = $order;
            }
        }
        $orders = $data;
        return view('front-end.order')->with('orders', $orders);
    }

    public function trahang(){
        $data = array();
        $orders = Order::join('product', 'orders.product_id', '=', 'product.product_id')
        ->get(['orders.*', "product.*"]);
        foreach($orders as $order){
            if($order->status == 4){
                $data[] = $order;
            }
        }
        $orders = $data;
        return view('front-end.order')->with('orders', $orders);
    }

/*
    c??c API c???n : T??nh ti???n t??? SP08
                Th??ng tin Qu???ng c??o, khuy???n m???i SP19, SP12
                Th??ng tin b???o h??nh, ?????i tr??? s???n ph???m SP06, SP18
                Th??ng tin c??c s???n ph???m trong gi??? h??ng t??? Qu???n l?? gi??? h??ng
                T??nh ph?? ship t??? SP09, SP10 qu???n l?? giao h??ng
                Module danh s??ch s???n ph???m t??? SP06, SP08 Qu???n l?? s???n ph???m
*/
}

