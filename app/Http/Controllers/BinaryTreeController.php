<?php

namespace App\Http\Controllers;

use App\BinaryTree;
use App\User;
use App\Order;
use Illuminate\Http\Request;

class BinaryTreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function initialize(Request $request)
    {

       

        $validatedData = $request->validate([
                   
            'user_code' => 'unique:binary_trees,user_code','exists:users,user_code',
     
        ]);

        $user_data = User::where('user_code', $request->user_code)->first();

       $my_order = Order::where('user_id', $user_data->id)->first();
        //
        $position = 'L';
        $legs = '00';

        $binaryTree = BinaryTree::Create([
            'user_id' => $user_data->id,
            'user_code' => $request->user_code,
            'position' => $position,  
            'legs' => $legs,        
            'pack_name' => $my_order->package,
            'pack_id' => $my_order->pack_id,
        ]);

        return back()->with('b_message','Node Initialized');

    }


    public function addd_node(Request $request)
    {

       

        $validatedData = $request->validate([
                   
            'user_code' => 'unique:binary_trees,user_code','exists:orders,sponsors_id',
            'user_id' => 'unique:binary_trees,user_id',
        ]);

        $user_data = User::where('user_code', $request->user_code)->first();

       $my_order = Order::where('user_id', $user_data->id)->first();
        //
        $position = 'L';
        $legs = '00';

        $binaryTree = BinaryTree::Create([
            'user_id' => $user_data->id,
            'user_code' => $request->user_code,
            'position' => $position,  
            'legs' => $legs,        
            'pack_name' => $my_order->package,
            'pack_id' => $my_order->pack_id,
        ]);

        return back()->with('b_message','Node Initialized');

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BinaryTree  $binaryTree
     * @return \Illuminate\Http\Response
     */
    public function show(BinaryTree $binaryTree)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BinaryTree  $binaryTree
     * @return \Illuminate\Http\Response
     */
    public function edit(BinaryTree $binaryTree)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BinaryTree  $binaryTree
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BinaryTree $binaryTree)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BinaryTree  $binaryTree
     * @return \Illuminate\Http\Response
     */
    public function destroy(BinaryTree $binaryTree)
    {
        //
    }
}
