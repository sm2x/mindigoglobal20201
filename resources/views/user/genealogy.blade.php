@extends('layouts.app')

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

       <h4>My Genealogy Tree</h4>

       <div class="tf-tree text-center">
            <ul>
                <li>
                <span 
                        data-toggle="tooltip" data-placement="top" title="TESTING"
                        style="" class="border border-primary bg-warning card tf-nc tf-gap-lg shadow text-center mx-auto">
                        
                        1
                    
                        
                        </span>

                <ul>
                    <li>
                    <span 
                        data-toggle="tooltip" data-placement="top" title="TESTING"
                        style="" class="border border-primary bg-warning card tf-nc tf-gap-lg shadow text-center mx-auto">
                        
                        1
                    
                        
                        </span>

                        <ul>
                    <li>
                    <span 
                        data-toggle="tooltip" data-placement="top" title="TESTING"
                        style="" class="border border-primary bg-warning card tf-nc tf-gap-lg shadow text-center mx-auto">
                        
                        1
                    
                        
                        </span>
                    
                    </li>
                    <li>
                    
                    <span 
                        data-toggle="tooltip" data-placement="top" title="TESTING"
                        style="" class="border border-primary bg-warning card tf-nc tf-gap-lg shadow text-center mx-auto">
                        
                        1
                    
                        
                        </span>
                    
                    </li>
                </ul>
                    
                    </li>
                    <li>
                    
                    <span 
                        data-toggle="tooltip" data-placement="top" title="TESTING"
                        style="" class="border border-primary bg-warning card tf-nc tf-gap-lg shadow text-center mx-auto">
                        
                        1
                    
                        
                        </span>

                        <ul>
                    <li>
                    <span 
                        data-toggle="tooltip" data-placement="top" title="TESTING"
                        style="" class="border border-primary bg-secondary card tf-nc tf-gap-lg shadow text-center mx-auto">
                        
                        1
                    
                        
                        </span>
                    
                    </li>
                    <li>
                    
                    <span 
                        data-toggle="tooltip" data-placement="top" title="TESTING"
                        style="" class="border border-primary bg-warning card tf-nc tf-gap-lg shadow text-center mx-auto">
                        
                        1
                    
                        
                        </span>
                    
                    </li>
                </ul>
                    
                    </li>
                </ul>
                </li>
            </ul>
        </div>

    </div>
    
@endsection