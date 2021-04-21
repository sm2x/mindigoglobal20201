<?php

namespace App\Http\Controllers;

use App\BinaryTree;
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
        //
        $position = 'L';
        $legs = '00';

        $binaryTree = BinaryTree::Create([
            'user_id' => $request->user_id,
            'user_code' => $request->user_code,
            'position' => $position,  
            'legs' => $legs,        
            'pack_name' => $user_order->pack_name,
            'pack_id' => $user_order->pack_id,
        ]);

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
