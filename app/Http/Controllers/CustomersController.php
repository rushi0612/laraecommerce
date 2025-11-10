<?php
namespace App\Http\Controllers;
use App\Models\Customers;
use Illuminate\Http\Request;
class CustomersController extends Controller
{
    public function index(Request $request )
    {        
        if(!empty($request->search)) {
            $query = Customers::where('name', 'like', '%' . $request->search . '%')
            ->orWhere('email', 'like', '%' . $request->search . '%')
            ->orwhere('number', 'like','%' . $request->search . '%');
        } else {
            $query = Customers::query();
        }

        if(!empty($request->sortmethod) && !empty($request->sortcolumn)) {
            $query->orderby($request->sortcolumn,$request->sortmethod);
        }
        $customers = $query->get();
        // print_r($customers); exit;
        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        return view('customers.create' );

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_name'  => 'required',
            'user_email' => 'required|email|unique:customers,email',
            'user_phone' => 'required',
        ]);

        Customers::create([
            'name'   => $validated['user_name'],
            'email'  => $validated['user_email'],
            'number' => $validated['user_phone'],
        ]);

        return redirect()->route('customers.index')->with('success', 'Customer added successfully!');
    }

    public function show(Customers $customer)
    {
        return view('customers.show', compact('customer'));
    }

    public function edit($id , Request $request)
    {   
        $customer = Customers::findOrFail($id);
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_name'  => 'required',
            'user_email' => 'required|email|unique:customers,email,' . $id,
            'user_phone' => 'required',
        ]);

        $customer = Customers::findOrFail($id);

        $customer->name   = $request->input('user_name');
        $customer->email  = $request->input('user_email');
        $customer->number = $request->input('user_phone');

        $customer->save();

        return redirect()->route('customers.index')->with('success', 'Customer updated successfully!');
    }


    
    public function destroy($id)
    {
        $customer = Customers::findOrFail($id);
        $customer->delete();

        return redirect()->route('customers.index')->with('success', 'Customer deleted successfully.');
    }

    // public function search(Request $request){
    //     $customer= Customers::where('name', 'like', "%$request->search%")->get();
    //     return $customer;
    // }

}
