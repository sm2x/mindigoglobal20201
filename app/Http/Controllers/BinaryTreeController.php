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


    public function add_node(Request $request)
   
    {
        //
        // check if he is a direct referree

        $my_guy = DirectReferral::where('referrer_id', Auth::user()->id)->where('referree', $request->user_code)->first();

        
        if ($my_guy) {
            # code...

            $validatedData = $request->validate([
                   
                'user_code' => 'unique:binary_trees,user_code','exists:orders,sponsors_id',
                'user_id' => 'unique:binary_trees,user_id',
            ]);
                
            $parent_id = BinaryTree::where('user_code', $request->parent)->first()->pluck('id');

            $node = BinaryTree::find($parent_id);
    
          
    
            //get user data for user code
    
            $user_data = User::where('user_code', $request->user_code)->first();
    
            //look for user code order data
    
            $user_order = Order::where('spoonsors_id', $user_data->user_code)->first();
    
            //if left and right are full
    
            if ($node->children()->count() <= 1 ) {
                # code...
                $binaryTree = BinaryTree::Create([
                    'user_id' => $user_data->id,
                    'user_code' => $request->user_code,
                    'position' => $request->position,        
                    'package_name' => $user_order->pack_title,
                    'package_id' => $user_order->pack_id,
                ]);
        
                $node->appendNode($binaryTree);
    
                $referree_data = DirectReferral::where('referree', $user_code)->update([
                    'position' => $request->position
                ]);
    
                    //update legs information
    
                if ($request->position == 'L') {
                    # code...
                    $node = BinaryTree::find($parent_id)->update([
                        'legs' => '10',
                    ]);
                }
                //update legs information
                if ($request->position == 'R') {
                    # code...
                    $node = BinaryTree::find($parent_id)->update([
                        'legs' => '01',
                    ]);
                }
    
                $node = BinaryTree::find($parent_id);
    
                if ($node->children()->count() > 1 ) {
                    $node = BinaryTree::find($parent_id)->update([
                        'legs' => '11',
                    ]);
                }
    
                // $result = BinaryTree::descendantsAndSelf($node->id);
    
                // $new_node = BinaryTree::find($binaryTree->id);
    
    
    
                // $my_tree = Genealogy::Create([
                //     'owner_id' => Auth::user()->id,
                //     'parent' => $request->parent,
                //     'user_id' => $new_node->id,
                //     'user_code' => $new_node->user_code,
                //     'postion' => $new_node->postion,        
                //     'package_name' => $new_node->package_title,
                //     'package_id' => $new_node->package_id,
                // ]);



                                // try block

                //record entry in matching_bonus  table

                //check for the first children of user from auth::

                    

                //classify accordingly left or right

                //get descendants of left_group


                //get descendants of right_group

                //if node added is descendant of left_group
                //add into left id column with respective points

                



                //else if node add is descendant of right_group

                //add into right id column with respective points
    
    
    
                
    
                return back()->with('node_message', 'Node is Created!!');
                
            }else{
    
                $node = BinaryTree::find($parent_id)->update([
                    'legs' => '11',
                ]);
    
            return back()->with('node_message', 'Node is full!!');
    
            }

            
        }else{

            return back()->with('node_message', 'User code is not your direct referral');

        }
        


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

    public function check_legs($id)
    {
        # code...

        $node = BinaryTree::where('user_code', $id)->first();

        $node_legs = $node->legs;


        return $node_legs;

        
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
