<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();

        return view('customers', compact('customers'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required|email'
        ]);

        Customer::create($request->all());

        return redirect()->route('customers');
    }

    public function edit(Customer $customer)
    {
        return view(
            'customers.edit',
            compact('customer')
        );
    }

    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required|email'
        ]);

        $customer->update($request->all());

        return redirect()->route('customers');
    }
}