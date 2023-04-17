<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreStoreRequest;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stores = Store::all();
        return view('admin.storeIndex',compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.storeCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStoreRequest $request)
    {
        $favicon = $request->file('favicon')->store('public/images');

       Store::create([
        'store_name' => $request->store_name,
        'store_location' => $request->store_location,
        'favicon' => $favicon
       ]);

        return to_route('store.index');
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
    public function edit(Store $store)
    {
        return view('admin.storeEdit' , compact('store'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Store $store)
    {
        $request ->validate([
            'store_name' =>'required',
            'store_location' =>'required',
            'favicon' => 'required',
        ]);

        $favicon = $store->favicon;
        if($request->hasFile('favicon')){
            Storage::delete($store->favicon);
            $favicon = $request->file('favicon')->store('public/images');
    }
        $store->update([
            'store_name' => $request->store_name,
            'store_location' => $request->store_location,
            'favicon' => $favicon,
        ]);
        return to_route('store.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store)
    {

        Storage::delete($store->favicon);

        $store->delete();

        return to_route('store.index');
    }
}
