@if ($page_name != 'coming_soon' && $page_name != 'contact_us' && $page_name != 'error404' && $page_name != 'error500' && $page_name != 'error503' && $page_name != 'faq' && $page_name != 'helpdesk' && $page_name != 'maintenence' && $page_name != 'privacy' && $page_name != 'auth_boxed' && $page_name != 'auth_default')

    <!--  BEGIN SIDEBAR  -->
    <div class="sidebar-wrapper sidebar-theme">

    
            
        <nav id="sidebar">
            <div class="shadow-bottom"></div>

            <ul class="list-unstyled menu-categories" id="accordionExample">
                
                @if ($page_name != 'alt_menu' && $page_name != 'blank_page' && $page_name != 'boxed' && $page_name != 'breadcrumb' )

                    <li class="menu {{ ($category_name === 'dashboard') ? 'active' : '' }}">
                        <a href="#dashboard" data-active="{{ ($category_name === 'dashboard') ? 'true' : 'false' }}" data-toggle="collapse" aria-expanded="{{ ($category_name === 'dashboard') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span>Dashboard</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ ($category_name === 'dashboard') ? 'show' : '' }}" id="dashboard" data-parent="#accordionExample">
                            <li class="{{ ($page_name === 'sales') ? 'active' : '' }}">
                                <a href="{{route('user.home')}}"> Home </a>
                            </li>
                           
                        </ul>
                    </li>

                 
                  

                    <!-- <li class="menu {{ ($category_name === 'fonticons') ? 'active' : '' }}">
                        <a href="{{route('user.my_account')}}" data-active="{{ ($category_name === 'fonticons') ? 'true' : 'false' }}" aria-expanded="{{ ($category_name === 'fonticons') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                                <span>My Account</span>
                            </div>
                        </a>
                    </li> -->

                    <li class="menu {{ ($category_name === 'fonticons') ? 'active' : '' }}">
                        <a href="{{route('user.my_profile')}}" data-active="{{ ($category_name === 'fonticons') ? 'true' : 'false' }}" aria-expanded="{{ ($category_name === 'fonticons') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                                <span>My Profile</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu {{ ($category_name === 'fonticons') ? 'active' : '' }}">
                        <a href="{{route('user.my_account')}}" data-active="{{ ($category_name === 'fonticons') ? 'true' : 'false' }}" aria-expanded="{{ ($category_name === 'fonticons') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                                <span>My Earnings</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu {{ ($category_name === 'fonticons') ? 'active' : '' }}">
                        <a href="{{route('user.genealogy')}}" data-active="{{ ($category_name === 'fonticons') ? 'true' : 'false' }}" aria-expanded="{{ ($category_name === 'fonticons') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                                <span>Genealogy</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu {{ ($category_name === 'fonticons') ? 'active' : '' }}">
                        <a href="{{route('user.mindigo_mart')}}" data-active="{{ ($category_name === 'fonticons') ? 'true' : 'false' }}" aria-expanded="{{ ($category_name === 'fonticons') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                                <span>Mindigo Mart</span>
                            </div>
                        </a>
                    </li>

                    
                    <li class="menu {{ ($category_name === 'fonticons') ? 'active' : '' }}">
                        <a href="{{route('user.mindigo_resources')}}" data-active="{{ ($category_name === 'fonticons') ? 'true' : 'false' }}" aria-expanded="{{ ($category_name === 'fonticons') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                                <span>Mindigo Resources</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu {{ ($category_name === 'fonticons') ? 'active' : '' }}">
                        <a href="{{route('user.notification')}}" data-active="{{ ($category_name === 'fonticons') ? 'true' : 'false' }}" aria-expanded="{{ ($category_name === 'fonticons') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                                <span>Notifications</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu {{ ($category_name === 'fonticons') ? 'active' : '' }}">
                        <a href="{{route('user.support')}}" data-active="{{ ($category_name === 'fonticons') ? 'true' : 'false' }}" aria-expanded="{{ ($category_name === 'fonticons') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                                <span>Support</span>
                            </div>
                        </a>
                    </li>


                    <div class="  layout-spacing">
                <div class="row widget-statistic">
                   
                    <div class=" col-12">
                        <div class="widget widget-one_hybrid widget-referral">
                            <div class="widget-heading">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                                </div>
                                <p class="w-value">1,900</p>
                                <h5 class="">Referral</h5>
                            </div>
                            <div class="widget-content">    
                                <div class="w-chart">
                                    <div id="hybrid_followers1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div> 

                    

                   

              

                   

                 
                @else

                    
                
                @endif
                
            </ul>
            
        </nav>

    </div>
    <!--  END SIDEBAR  -->

@endif