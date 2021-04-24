<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Auth;

use App\BinaryTree;

class AdminPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        //

        $data = [
            'category_name' => 'dashboard',
            'page_name' => 'analytics',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',
        ];

        return view('admin.home',[

        ])->with($data);
    }

    public function members()
    {
        //

        return view('admin.members',[
            
        ]);
    }

    public function single_member()
    {
        //

        return view('admin.single_member',[
            
        ]);
    }

    public function payouts()
    {
        //
        $data = [
            'category_name' => 'dashboard',
            'page_name' => 'analytics',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',
        ];

        return view('admin.payouts',[
            
        ])->with($data);
    }
    
    public function genealogy()
    {
        $user_id = Auth::user()->id;

        $admin_accounts = User::where('role', 'admin')->latest()->get();

        $parent = BinaryTree::where('user_id', $user_id)->first();

        // dd($parent);
        
        $data = [
            'category_name' => 'dashboard',
            'page_name' => 'analytics',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',
        ];

        return view('admin.genealogy',[
            'admin_accounts' => $admin_accounts,
            'parent' => $parent
        ])->with($data);
    }

    public function orders()
    {
        //

        return view('admin.orders',[
            
        ]);
    }

    public function single_order()
    {
        //

        return view('admin.single_order',[
            
        ]);
    }

    public function support()
    {
        //

        return view('admin.support',[
            
        ]);
    }


    public function single_support()
    {
        //

        return view('admin.single_support',[
            
        ]);
    }

    public function audit_trail()
    {
        //

        return view('admin.audit_trail',[
            
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
