<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Support\Facades\DB;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders=Order::select('customers.name', 'customers.identification_document','orders.date','orders.price','orders.status')
        ->join('customers','customer_id','=','orders.customer_id')->get();
        return view('orders.index', compact('orders'));

    }

    public function create()
    {
        $customers = Customer::where('status', '=', '1')->orderBy('name')->get();
        $products = Product::where('status', '=', '1')->orderBy('name')->get();
        $date = Carbon::now();
        $date = $fecha-> format('Y-m-d');

        return view('orders.create', compact('products', 'customers', 'date'));
    }

    public function store(OrderRequest $request)
    {
        DB::beginTransaction();

        try{

        }catch(Exception $e){
            
        }

        $order = new Order();
        $order->product_id = $request->product_id;
        $order->customer_id = $request->customer_id; 
        $order->date = now(); 
        $order->total_amount = $request->total; 
        $order->route = $request -> route;
        $order->status = 1;
        $order->registerby = $request->user()->id;
        $order->save();

        $idorder = $order -> id;

        $detailorder = new Detailorder();

        $detailorder -> order_id = $idorder;
    }

    public function show(string $id)
    {
       
    }
    public function edit(string $id)
    {
        
    }
    public function update(Request $request, string $id)
    {
     
    }
    public function destroy(string $id)
    {
       
    }
}
