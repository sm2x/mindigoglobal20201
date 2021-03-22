@extends('layouts.app')

@section('content')

    <div class="layout-px-spacing">

       <h1 class="mt-3">Mindigo Market Place</h1>

       <div class="container">
            <div id="pricingWrapper" class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card stacked mt-5">
                        <div class="card-header pt-0">
                            <span class="border-warning card-price">$49</span>
                            <h3 class="card-title mt-3 mb-1">Standard Package</h3>
                            <p>Unlock your wealth.</p>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-minimal mb-3">
                                <li class="list-group-item d-flex justify-content-between align-items-center">Life Time Earnings
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">Vacation Trips
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">Dynamic Earnings
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">Generational Earnings
                                </li>
                            </ul>
                            <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                                   
                                            
                                            <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
                                            <input type="hidden" name="orderID" value="345">
                                            <input type="hidden" name="amount" value="4999900"> {{-- required in kobo --}}
                                            <input type="hidden" name="quantity" value="1">
                                            <input type="hidden" name="currency" value="NGN">
                                            <input type="hidden" name="callback_url" value="{{config('app.url')}}user/purchase_success">
                                            <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                                            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                                            {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

                                            <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}

                                            <p>
                                                <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                                                    <i class="fa fa-plus-circle fa-lg"></i> Purchase
                                                </button>
                                            </p>
                                        
                                </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">

                    <h4 class="display-4">Getting Started</h4>

                    <p>Mindigo offers you a life time opportunity with a single investment package you can start enjoying loads of rewards </p>
                    <p>So, welcome to our partnership!!</p>

                    <p class="mt-5">CEO Mrs. Sylvia Edwin</p>



                </div>
            
                
            </div>
        </div>

    </div>
    
@endsection