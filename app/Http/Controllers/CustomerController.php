<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $email = $request->email; // Agregar esta línea para definir la variable $email

        if (!file_exists('uploads/customers')) {
            mkdir('uploads/customers', 0777, true);
        }
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move('uploads/customers', $imagename);
        } else {
            $imagename = "";
        }
        
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->identification_document = $request->identification_document;
        $customer->address = $request->address;
        $customer->phone = $request->phone;
        $customer->image = $imagename;
        $customer->email = $email; // Asignar el valor de $email correctamente
        $customer->status = 1;
        $customer->registerby = $request->user()->id;
        $customer->save();
        
        return redirect()->route('customers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        return view ('customers.edit', compact('customer'));
    }


    
    public function update(Request $request, $id)
    {

			$customer = Customer::find($id);
			
			$image = $request->file('image');
			$slug = str::slug($request->name);
			if (isset($image))
			{
				$currentDate = Carbon::now()->toDateString();
				$imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

				if (!file_exists('uploads/customers'))
				{
					mkdir('uploads/customers',0777,true);
				}
				$image->move('uploads/customers',$imagename);
			}else{
				$imagename = $customer->image;
			}

			$customer->name = $request -> name;
			$customer->identification_document = $request->identification_document;
			$customer->address = $request->address;
			$customer->phone = $request->phone;
			$customer->image = $imagename;
            $customer->email = $email;
            $customer->status = 1;
            $customer->registerby = $request->user()->id;
			$customer->save();

            return redirect()->route('customers.index')->with('successMsg','El registro se actualizó exitosamente');
    }
    public function destroy(Customer $customer)
    {
        $customer->delete();
       return redirect()->route('customers.index')->with('eliminar','ok');
    }

    public function changestatuscustomer(Request $request)
	{
		$customer = Customer::find($request->customer_id);
		$customer->status=$request->status;
		$customer->save();
	}
}
