@extends('layouts.app')

@section('content')

    <div class="layout-px-spacing mt-5">

       <h1 class="mt-3">Mindigo Market Place</h1>

       <div class="containr">
            <div id="pricingWrapper" class="row">

            @foreach($packs as $pack)

                <div class="col-md-4">
                    <div class="card stacked mt-5">
                        <div class="card-header pt-0">
                            <span style="width: 230px;" class="border-warning card-price">${{number_format($pack->reg_fee)}}</span>
                            <h3 class="card-title mt-3 mb-1">{{$pack->title}}</h3>
                            <p>{{$pack->description}}</p>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-minimal mb-3">
                                <li class="list-group-item d-flex justify-content-between align-items-center">Points: <span>{{$pack->points}}</span> 
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">Direct Referral Commission: <span>{{$pack->dr_commission}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">Matching Bonus: <span>{{$pack->match_bonus}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">Maximum Daily Matching: <span>{{$pack->max_daily_matching}}</span> 
                                </li>


                            </ul>

                            <?php

                                $price = $pack->reg_fee * 485;

                            ?>
                            <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                                   
                                            
                                            <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
                                            <input type="hidden" name="orderID" value="345">
                                            <input type="hidden" name="amount" value="{{$pack->reg_fee * 100 * 460}}"> {{-- required in kobo --}}
                                            <input type="hidden" name="quantity" value="1">
                                            <input type="hidden" name="currency" value="NGN">
                                            <input type="hidden" name="callback_url" value="{{config('app.url')}}user/purchase_success">
                                            <input type="hidden" name="metadata" value="{{ json_encode($array = [
                                            'key_name' => 'value',
                                            
                                            ]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
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

                
            <div class="col-md-6">
                                                
                <h3>About the package</h3>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem corporis libero, odio ab laudantium tempore ipsa a reiciendis maxime soluta enim, corrupti minima repudiandae voluptatibus voluptas quaerat sapiente? Similique, assumenda!
                </p>
                                            
            </div>


            @endforeach




            </div>
        </div>

    </div>
    
@endsection