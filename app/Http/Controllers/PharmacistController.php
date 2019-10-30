<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pharmacist;
use App\Supplier;

class PharmacistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pharmacists = Pharmacist::all()->toArray();
        return view('pharmacist.phindex', compact('pharmacists'));
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
        return view('pharmacist.phcreate');
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
            'drug_quantity'  => 'required',
            'manufacture_date'  => 'required',
            'expiration_date'  => 'required',
            'delivery_date'  => 'required',
            'price'  => 'required'
        ]);

        $pharmacist = new Pharmacist([
            'drug_name' => $request->get('drug_name'),
            'drug_type' => $request->get('drug_type'),
            'drug_state' => $request->get('drug_state'),
            'drug_quantity' => $request->get('drug_quantity'),
            'manufacture_date' => $request->get('manufacture_date'),
            'expiration_date' => $request->get('expiration_date'),
            'delivery_date' => $request->get('delivery_date'),
            'price' => $request->get('price')
            /* 'photo' => $request->get('file/photo') ->file('photo')->store('public')*/
        ]);
        $pharmacist->save();

        return redirect()->route('pharmacist.index')->with('success', 'New Drug Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */ 
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pharmacist = Pharmacist::find($id);
        return view('pharmacist.phedit', compact('pharmacist', 'id'));
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
            'drug_quantity'  => 'required',
            'manufacture_date'  => 'required',
            'expiration_date'  => 'required',
            'delivery_date'  => 'required',
            'price'  => 'required'
        ]);
        $pharmacist = Pharmacist::find($id);
        $pharmacist->drug_name = $request->get('drug_name');
        $pharmacist->drug_type = $request->get('drug_type');
        $pharmacist->drug_state = $request->get('drug_state');
        $pharmacist->drug_quantity = $request->get('drug_quantity');
        $pharmacist->manufacture_date = $request->get('manufacture_date');
        $pharmacist->expiration_date = $request->get('expiration_date');
        $pharmacist->delivery_date = $request->get('delivery_date');
        $pharmacist->price = $request->get('price');
        $pharmacist->save();

        return redirect()->route('pharmacist.index')->with('success', 'Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pharmacist = Pharmacist::find($id);
        $pharmacist->delete();
        return redirect()->route('pharmacist.index')->with('success','Data Deleted Successfully');
    }
}
