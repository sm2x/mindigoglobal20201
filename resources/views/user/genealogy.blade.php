@extends('layouts.app')
<link href="{{asset('assets/css/elements/miscellaneous.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/elements/breadcrumb.css')}}" rel="stylesheet" type="text/css" />
        
    <link href="{{asset('plugins/animate/animate.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/components/custom-modal.css')}}" rel="stylesheet" type="text/css" />  
      
<link href="https://unpkg.com/treeflex/dist/css/treeflex.css" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>


@section('content')

        <style>
            .tf-gap-lg{
            width: 90px;
            }

            .tf-tree{
            font-size: 8pt;
            
            }

            .tf-tree .card{
            padding-top: 10px;
            padding-bottom: 10px;
            
            color: white;
            }

            .tf-nc:before,
            .tf-nc:after {
            /* css here */
            outline: 2px solid white;
            }

            li li:before {
            /* css here */

            outline: 2px solid white;
            }

        </style>

    <div class="layout-px-spacing">

       <h3 class="mt-3">My Genealogy Tree</h3>

        <div class="tf-tree text-center">
            <ul>
                <li>
                        <span 
                        data-toggle="tooltip" data-placement="top" title="TESTING"
                        style="" class="border border-primary bg-warning card tf-nc tf-gap-lg shadow text-center mx-auto">
                        <a target="_blank" href="{{route('user.genealogy2', 123)}}"> 1</a>
                        <br>
                        <span class="font-weight-bold">+</span>
                        </span>
                        <ul>
                            <li>
                                <span 
                                data-toggle="tooltip" data-placement="top" title="TESTING"
                                style="" class="border border-primary bg-warning card tf-nc tf-gap-lg shadow text-center mx-auto">
                                <a target="_blank" href="{{route('user.genealogy2', 123)}}"> 2</a>
                                <br>
                                <span class="font-weight-bold">+</span>
                                </span>
                                        <ul>
                                            <li>
                                                <span 
                                                data-toggle="tooltip" data-placement="top" title="TESTING"
                                                style="" class="border border-primary bg-warning card tf-nc tf-gap-lg shadow text-center mx-auto">
                                                <a target="_blank" href="{{route('user.genealogy2', 123)}}"> 4</a>
                                                <br>
                                                <span class="font-weight-bold">+</span>
                                                </span>

                                                        <ul>
                                                            <li>
                                                                <span 
                                                                data-toggle="tooltip" data-placement="top" title="TESTING"
                                                                style="" class="border border-primary bg-warning card tf-nc tf-gap-lg shadow text-center mx-auto">
                                                                <a target="_blank" href="{{route('user.genealogy2', 123)}}"> 8</a>
                                                                <br>
                                                                <span class="font-weight-bold">+</span>
                                                                </span>
                                                                        
                                                            </li>
                                                            <li>
                                                                <span 
                                                                data-toggle="tooltip" data-placement="top" title="TESTING"
                                                                style="" class="border border-primary bg-warning card tf-nc tf-gap-lg shadow text-center mx-auto">
                                                                <a target="_blank" href="{{route('user.genealogy2', 123)}}"> 9</a>
                                                                <br>
                                                                <span class="font-weight-bold">+</span>
                                                                </span>
                                                            </li>
                                                        </ul>


                                            </li>
                                            <li>
                                                <span 
                                                data-toggle="tooltip" data-placement="top" title="TESTING"
                                                style="" class="border border-primary bg-warning card tf-nc tf-gap-lg shadow text-center mx-auto">
                                                <a target="_blank" href="{{route('user.genealogy2', 123)}}"> 5</a>
                                                <br>
                                                <span class="font-weight-bold">+</span>
                                                </span>
                                                            <ul>
                                                                <li>
                                                                    <span 
                                                                    data-toggle="tooltip" data-placement="top" title="TESTING"
                                                                    style="" class="border border-primary bg-warning card tf-nc tf-gap-lg shadow text-center mx-auto">
                                                                    <a target="_blank" href="{{route('user.genealogy2', 123)}}"> 10</a>
                                                                    <br>
                                                                    <span class="font-weight-bold">+</span>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <span 
                                                                    data-toggle="tooltip" data-placement="top" title="TESTING"
                                                                    style="" class="border border-primary bg-warning card tf-nc tf-gap-lg shadow text-center mx-auto">
                                                                    <a target="_blank" href="{{route('user.genealogy2', 123)}}"> 11</a>
                                                                    <br>
                                                                    <span class="font-weight-bold">+</span>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                            </li>
                                        </ul>

                            </li>

                            <li>
                                <span 
                                data-toggle="tooltip" data-placement="top" title="TESTING"
                                style="" class="border border-primary bg-warning card tf-nc tf-gap-lg shadow text-center mx-auto">
                                <a target="_blank" href="{{route('user.genealogy2', 123)}}"> 3</a>
                                <br>
                                <span class="font-weight-bold">+</span>
                                </span>

                                    <ul>
                                        <li>
                                            <span 
                                            data-toggle="tooltip" data-placement="top" title="TESTING"
                                            style="" class="border border-primary bg-warning card tf-nc tf-gap-lg shadow text-center mx-auto">
                                            <a target="_blank" href="{{route('user.genealogy2', 123)}}"> 6</a>
                                            <br>
                                            <span class="font-weight-bold">+</span>
                                            </span>
                                                            <ul>
                                                                <li>
                                                                    <span 
                                                                    data-toggle="tooltip" data-placement="top" title="TESTING"
                                                                    style="" class="border border-primary bg-warning card tf-nc tf-gap-lg shadow text-center mx-auto">
                                                                    <a target="_blank" href="{{route('user.genealogy2', 123)}}"> 12</a>
                                                                    <br>
                                                                    <span class="font-weight-bold">+</span>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <span 
                                                                    data-toggle="tooltip" data-placement="top" title="TESTING"
                                                                    style="" class="border border-primary bg-warning card tf-nc tf-gap-lg shadow text-center mx-auto">
                                                                    <a target="_blank" href="{{route('user.genealogy2', 123)}}"> 13</a>
                                                                    <br>
                                                                    <span class="font-weight-bold">+</span>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                        </li>
                                        <li>
                                            <span 
                                            data-toggle="tooltip" data-placement="top" title="TESTING"
                                            style="" class="border border-primary bg-warning card tf-nc tf-gap-lg shadow text-center mx-auto">
                                            <a target="_blank" href="{{route('user.genealogy2', 123)}}"> 7</a>
                                            <br>
                                            <span class="font-weight-bold">+</span>
                                            </span>

                                                            <ul>
                                                                <li>
                                                                    <span 
                                                                    data-toggle="tooltip" data-placement="top" title="TESTING"
                                                                    style="" class="border border-primary bg-warning card tf-nc tf-gap-lg shadow text-center mx-auto">
                                                                    <a target="_blank" href="{{route('user.genealogy2', 123)}}"> 14</a>
                                                                    <br>
                                                                    <span class="font-weight-bold">+</span>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <span 
                                                                    data-toggle="tooltip" data-placement="top" title="TESTING"
                                                                    style="" class="border border-primary bg-warning card tf-nc tf-gap-lg shadow text-center mx-auto">
                                                                    <a target="_blank" href="{{route('user.genealogy2', 123)}}"> 15</a>
                                                                    <br>
                                                                    <span class="font-weight-bold">+</span>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                        </li>
                                    </ul>


                            </li>
                            
                        </ul>
                                

                </li>
            </ul>
        </div>


        <div class="text-center">
        
            <button type="button" id="launch_modal" class="d-none btn btn-primary btn-sm mb-2 mr-2" data-toggle="modal" data-target=".bd-example-modal-sm">Add A Node</button>
        </div>
<a target="_blank" href="{{route('user.genealogy2', 123)}}"> </a>
<br>
<span class="font-weight-bold">+</span>
            <div class="row">
                <div class="col-md-6">
                    
                         <div class="row layout-spacing layout-top-spacing">
                            <div class="col-lg-12">
                                <div class="statbox widget box box-shadow">
                                    <div class="widget-header">
                                        <div class="row">
                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>LEFT GROUPS</h4>
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
                                                        <td><span class="shadow-none badge badge-primary">Approved</span></td>
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
                <div class="col-md-6">
                   
                        <div class="row layout-spacing layout-top-spacing">
                            <div class="col-lg-12">
                                <div class="statbox widget box box-shadow">
                                    <div class="widget-header">
                                        <div class="row">
                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>RIGHT GROUPS</h4>
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
                                                        <td><span class="shadow-none badge badge-primary">Approved</span></td>
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


    </div>


    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mySmallModalLabel">Attach a Node?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    <a target="_blank" href="{{route('user.genealogy2', 123)}}"> </button></a>
                    <br>
                    <span class="font-weight-bold">+</span>
                </div>
                <div class="modal-body">

                    <form action="">
                        @csrf

                        <div class="form-group">
                            <label for="">Node</label>
                            <input id="selected_node" type="text" class="form-control shadow">
                        </div>

                        <div class="form-group">
                            <label for="">Select Downline</label>
                            <select class="form-control form-control-sm" name="" id="">
                                <option value="">--Select Downline</option>
                                <option value="">MNG 232233 :: VICTOR ASUQUO</option>
                                <option value="">MNG 232233 :: VICTOR ASUQUO</option>
                                <option value="">MNG 232233 :: VICTOR ASUQUO</option>
                                <option value="">MNG 232233 :: VICTOR ASUQUO</option>
                                <option value="">MNG 232233 :: VICTOR ASUQUO</option>
                            </select>
                        </div>

                       


                  
                    <p class="modal-text">
                    
                    
                    </p>


                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Refractor</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                <a target="_blank" href="{{route('user.genealogy2', 123)}}"> </div></a>
                <br>
                <span class="font-weight-bold">+</span>
                </form>
            </div>
        </div>
    </div>
    
@endsection

<script src="{{asset('plugins/table/datatable/datatables.js')}}"></script>
<script src="{{asset('plugins/table/datatable/custom_miscellaneous.js')}}"></script>

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


    <script>

        function addNode(data) {

            <a target="_blank" href="{{route('user.genealogy2', 123)}}"> // alert(data);</a>
            <br>
            <span class="font-weight-bold">+</span>

            <a target="_blank" href="{{route('user.genealogy2', 123)}}"> $('#launch_modal').trigger('click');</a>
            <br>
            <span class="font-weight-bold">+</span>

            $('#selected_node').val(data);

        <a target="_blank" href="{{route('user.genealogy2', 123)}}"> }</a>
        <br>
        <span class="font-weight-bold">+</span>
        
        
    </script>