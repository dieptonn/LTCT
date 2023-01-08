<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use GuzzleHttp\Client as Client;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Exception;
use Log;
use Illuminate\Http\Request;


class OrderManagermentRestController extends Controller
{
    public function listOrderByUser($userId)
    {

        // try {

        //     $client =  new Client();
        //     $response = $client->request('GET', 'https://dev.shepherd.appoly.io/fruit.json');
        //     $dataProduct = json_decode($response->getBody()->getContents(), true);

        //     $orders = DB::table('orders')
        //         ->select('*')
        //         ->where('userId', '=', $userId)
        //         ->get();

        //     $orderOutput = [];


        //     return  $orders;
        // } catch (Exception $e) {
        //     print('error');
        // }

        $orders = DB::table('orders')
            ->select('*')
            ->where('userId', '=', $userId)
            ->get();

        // foreach($orders as $order){
        //     return $order->orderId;

        // }
        $output=array();
        $tmparray = array();
        for($i=0;$i<count($orders);){

            for($j=$i;$j<count($orders);$j++){

                if($orders[$j]->orderId == $orders[$i]->orderId){
                    array_push($tmparray, $orders[$j]);
                } else {break;}



            }
            $i = $j;

        }
    }
    public function rateComment(Request $request, $orderId){
        // $request->validate([
        //     // 'orderId' => 'required',
        //     'rate' => 'required|min:1|max:5|',
        //     'comment' => 'min:0|max:255|',
        // ]);
        // $orders = Order::all();
        // $orders = Order::where('orderId',$orderId)->update([
        //     'rate' => $request,
        //     'comment' => $request
        // ]);
        // $orders->save();
        
        $rate = $request['rate'];
        DB::table('orders')->where('orderId', $orderId)
        ->update(['rate'=> $rate]);
        // return "diep";
        // dd($orders->rate);
        $cmt = $request['comment'];
        DB::table('orders')->where('orderId', $orderId)
        ->update(['comment'=> $cmt]);
        return "successfull";
    }
    
}
