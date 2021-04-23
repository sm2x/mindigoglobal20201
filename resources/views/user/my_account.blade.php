@extends('layouts.app')

<link href="{{asset('plugins/animate/animate.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/components/custom-modal.css')}}" rel="stylesheet" type="text/css" />  

@section('content')

    <div class="layout-px-spacing">


        <h2 class="mt-5 ">Hi, {{Auth::user()->name}}</h2>


        <div class="row">

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing mx-auto">
                <div class="widget widget-card-four">
                    <div class="widget-content">
                        <div class="w-content">
                            <div class="w-info">
                                <h3 class="value">$ 0.00</h3>
                                <p class="">Direct Referral Bonus</p>
                            </div>
                            <div class="">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                </div>
                            </div>
                        </div>
                        <div class="pt-5 d-flex justify-content-center">
                            <a href="" class="btn btn-primary shadow text-center btn-sm">View Summary</a>
                        </div>
                        <!-- <div class="progress">
                            <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                        </div> -->
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing mx-auto">
                <div class="widget widget-card-four">
                    <div class="widget-content">
                        <div class="w-content">
                            <div class="w-info">
                                <h3 class="value">$ 0.00</h3>
                                <p class="">Matching Bonus</p>
                            </div>
                            <div class="">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                </div>
                            </div>
                        </div>
                        <div class="pt-5 d-flex justify-content-center">
                            <a href="" class="btn btn-primary shadow text-center btn-sm">View Summary</a>
                        </div>
                        <!-- <div class="progress">
                            <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                        </div> -->
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-10 mx-auto">
                   
                   <div class="row ">
                       <div class="col-lg-12">
                           <div class="statbox widget box box-shadow">
                               <div class="widget-header">
                                   <div class="row">
                                       <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                       <h4>DIRECT REFERRALS</h4>
                                       </div>                  
                                   </div>
                               </div>
                               <div class="widget-content widget-content-area">
                                   <div class="table-responsive mb-4">
                                       <table id="column-filter" class="table">
                                           <thead>
                                               <tr>
                                                   
                                                   <th>Fullname</th>
                                                   <th>Member Code</th>
                                                  
                                                   <th>Status</th>
                                                   <th class="text-center">Action</th>
                                               </tr>
                                           </thead>
                                           <tbody>
                                               <tr>
                                                 
                                                   <td>John</td>
                                                  
                                                   <td>KYZ</td>
                                                   <td><span class="shadow-none badge badge-secondary">Not registered</span></td>
                                                   <td class="text-center"><button class="btn btn-sm btn-outline-primary">Copy</button></td>
                                               </tr>
                                              
                                           </tbody>
                                           <tfoot>
                                               <tr>
                                                  
                                                   <th>Fullname</th>
                                                   <th>Member Code</th>
                                                   <th>Status</th>
                                                  
                                                   <th></th>
                                               </tr>
                                           </tfoot>
                                       </table>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
           </div>

 

    </div>
    
@endsection  

<script>
        $('#yt-video-link').click(function () {
            var src = 'https://www.youtube.com/embed/YE7VzlLtp-4';
            $('#videoMedia1').modal('show');
            $('<iframe>').attr({
                'src': src,
                'width': '560',
                'height': '315',
                'allow': 'encrypted-media'
            }).css('border', '0').appendTo('#videoMedia1 .video-container');
        });
        $('#vimeo-video-link').click(function () {
            var src = 'https://player.vimeo.com/video/1084537';
            $('#videoMedia2').modal('show');
            $('<iframe>').attr({
                'src': src,
                'width': '560',
                'height': '315',
                'allow': 'encrypted-media'
            }).css('border', '0').appendTo('#videoMedia2 .video-container');
        });
        $('#videoMedia1 button, #videoMedia2 button').click(function () {
            $('#videoMedia1 iframe, #videoMedia2 iframe').removeAttr('src');
        });
    </script>