<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::all()->toArray();
        return view('supplier.index', compact('suppliers'));
    }
    
    public function order(){
        
        $suppliers = Supplier::all()->toArray();  
        return view('pharmacist.phorder', compact('suppliers'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'drug_name'  => 'required',
            'drug_type'  => 'required',
            'drug_state'  => 'required',
            'price'  => 'required',
            'availability'  => 'required',
            'photo'  => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $supplier = new Supplier([
            'drug_name' => $request->get('drug_name'),
            'drug_type' => $request->get('drug_type'),
            'drug_state' => $request->get('drug_state'),
            'price' => $request->get('price'),
            'availability' => $request->get('availability'),
            'photo' => $request->file('photo')->store('public')
            /* 'photo' => $request->get('file/photo') ->file('photo')->store('public')*/
        ]);
        $image = $request->file('photo');
        $new_name = rand() . '.' . $image-> getClientOriginalExtension();
        $image->move(public_path("images"), $new_name);
        $supplier->save();
        //$image->save();

        /*$photo = $request->file('photo');*/
       /* $new_name =  rand() . '.' . $photo ->
             getClientOriginalExtension();
       // $photo->move(public_path("images"), $new_name);
       $photo->move(store('public'), $new_name);*/

        return redirect()->route('supplier.index')->with('success', 'New Item Added Successfully')->with('path', $new_name);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier = Supplier::find($id);
        return view('supplier.edit', compact('supplier', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'drug_name'  => 'required',
            'drug_type'  => 'required',
            'drug_state'  => 'required',
            'price'  => 'required',
            'availability'  => 'required',
            'photo'  => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        $supplier = Supplier::find($id);
        $supplier->drug_name = $request->get('drug_name');
        $supplier->drug_type = $request->get('drug_type');
        $supplier->drug_state = $request->get('drug_state');
        $supplier->price = $request->get('price');
        $supplier->availability = $request->get('availability');
        $supplier->photo = $request->file('photo')->store('public');

        $supplier->save();

        return redirect()->route('supplier.index')->with('success','Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplier = Supplier::find($id);
        $supplier->delete();
        return redirect()->route('supplier.index')->with('success','Data Deleted Successfully');
    }
}

