<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Network;
use Illuminate\Http\Request;

class NetworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $networks = Network::latest()->paginate(5);




        return view('network.index',compact('networks'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //TODO delete this and just do the save thingy
    public function create()
    {
        return view('network.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->userid = Auth::user()->id;
        $request->validate([
            'name' => 'required',
        ]);

        $newNetwork = new Network([
            'userid' => Auth::user()->id,
            'name' => $request->get('name'),
        ]);

        print(var_dump($newNetwork));

        $newNetwork->save();

        return redirect()->route('network.index')
                        ->with('success','Network created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Network  $network
     * @return \Illuminate\Http\Response
     */
    public function show(Network $network)
    {
        return view('network.show',compact('network'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Network  $network
     * @return \Illuminate\Http\Response
     */
    public function edit(Network $network)
    {
        return view('network.edit',compact('network'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Network  $network
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Network $network)
    {


        $network->update($request->all());

        return redirect()->route('network.index')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Network  $network
     * @return \Illuminate\Http\Response
     */
    public function destroy(Network $network)
    {
        $network->delete();

        return redirect()->route('network.index')
                        ->with('success','Network deleted successfully');
    }
}
