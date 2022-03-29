<?php

namespace App\Http\Controllers;

use App\Models\OrderedItem;
use App\Http\Requests\StoreOrderedItemRequest;
use App\Http\Requests\UpdateOrderedItemRequest;

class OrderedItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrderedItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderedItemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrderedItem  $orderedItem
     * @return \Illuminate\Http\Response
     */
    public function show(OrderedItem $orderedItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrderedItem  $orderedItem
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderedItem $orderedItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderedItemRequest  $request
     * @param  \App\Models\OrderedItem  $orderedItem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderedItemRequest $request, OrderedItem $orderedItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrderedItem  $orderedItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderedItem $orderedItem)
    {
        //
    }
}
