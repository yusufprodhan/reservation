<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div class="h-100">

        <div class="user-wid text-center py-4">
            <div class="user-img">
                <img src="/assets/images/users/avatar-2.jpg" alt="" class="avatar-md mx-auto rounded-circle">
            </div>

            <div class="mt-3">
                @auth
                <a href="#" class="text-reset fw-medium font-size-16">{{auth()->user()->name}}</a>
                @endauth
{{--                <p class="text-muted mt-1 mb-0 font-size-13">UI/UX Designer</p>--}}

            </div>
        </div>
        @auth
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu {{auth()->user()->is_admin}}</li>
                </li>
                @if(auth()->user()->is_admin)
                    <li>
                        <a href="{{route('admin')}}" class="waves-effect">
                            <i class="fas fa-home"></i>
                            <span>{{_('Dashboard')}}</span>
                        </a>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="fas fa-user"></i>
                            <span>{{_('Users')}}</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{route('admin.users')}}"><i class="fas fa-user-friends"></i>{{_('All Users')}}</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="fa fa-cart-plus"></i>
                            <span>{{_('Orders')}}</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{route('admin.orders')}}"> <i class="fa fa-shopping-cart"></i>{{_(' All Orders')}}</a></li>
                            <li><a href="{{route('admin.order.review')}}"><i class="fas fa-calculator"></i>{{_(' In Review Orders')}}</a></li>
                            <li><a href="{{route('admin.order.pending')}}"><i class="fas fa-exclamation"></i>{{_(' Pending Orders')}}</a></li>
                            <li><a href="{{route('admin.order.received')}}"><i class="fas fa-receipt"></i> {{_(' Receive Orders')}}</a></li>
                            <li><a href="{{route('admin.order.invoiced')}}"><i class="fas fa-file-invoice"></i>{{_(' Invoiced Orders')}}</a></li>
                            <li><a href="{{route('admin.order.processing')}}"><i class="fas fa-spinner"></i>{{_(' Processing Orders')}}</a></li>
                            <li><a href="{{route('admin.order.finalizing')}}"><i class="fas fa-money-check"></i>{{_(' Finalizing Orders')}}</a></li>
                            <li><a href="{{route('admin.order.completed')}}"><i class="fas fa-calendar-check"></i>{{_(' Completed Orders')}}</a></li>
                            <li><a href="{{route('admin.order.paid')}}"><i class="fas fa-money-bill"></i>{{_(' Paid Orders')}}</a></li>
                            <li><a href="{{route('admin.order.downloaded')}}"><i class="fas fa-file-download"></i>{{_(' Downloaded Orders')}}</a></li>
                            <li><a href="{{route('admin.order.redo')}}"><i class="fa fa-arrow-up"></i>{{_(' Redo Orders')}}</a></li>
                            <li><a href="{{route('admin.order.canceled')}}"><i class="fas fa-times"></i>{{_(' Canceled Orders')}}</a></li>
                            <li><a href="{{route('admin.order.closed')}}"><i class="fas fa-closed-captioning"></i>{{_(' Closed Orders')}}</a></li>
                            <li><a href="{{route('admin.order.todays')}}"><i class="fas fa-calendar"></i>{{_(' To-days Orders')}}</a></li>
                            <li><a href="{{route('admin.order.valid')}}"><i class="fas fa-list"></i>{{_(' Valid Orders')}}</a></li>
                            <li><a href="{{route('admin.order.banned')}}"><i class="fas fa-list"></i>{{_(' Banned Orders')}}</a></li>
                        </ul>
                    </li>
                @endif

                @if(auth()->user()->is_user)
                    <li>
                        <a href="{{route('home')}}" class="waves-effect">
                            <i class="fas fa-home"></i>
                            <span>{{_('Dashboard')}}</span>
                        </a>
                    <li>
                    <li>
                        <a href="{{route('home.order.index')}}" class="waves-effect">
                            <i class="fas fa-cart-plus"></i>
                            <span>{{_('Orders')}}</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('home.order.invoiced')}}" class="waves-effect">
                            <i class="fas fa-file-invoice"></i>
                            <span>{{_('Invoices')}}</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('home.order.payments')}}" class="waves-effect">
                            <i class="fas fa-money-bill-wave"></i>
                            <span>{{_('Payments')}}</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('home.order.redo')}}" class="waves-effect">
                            <i class="fas fa-spinner"></i>
                            <span>{{_('Redo')}}</span>
                        </a>
                    </li>
                @endif
                <!---
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-flip-horizontal"></i>
                        <span>Layouts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);" class="has-arrow">Vertical</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li>
                                <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                                <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                                <li><a href="layouts-preloader.html">Preloader</a></li>
                            </ul>
                        </li>

                        <li><a href="javascript: void(0);" class="has-arrow">Horizontal</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-horizontal.html">Horizontal</a></li>
                                <li><a href="layouts-hori-topbarlight.html">Topbar Light</a></li>
                                <li><a href="layouts-hori-boxed.html">Boxed Layout</a></li>
                                <li><a href="layouts-hori-preloader.html">Preloader</a></li>
                            </ul>
                        </li>
                    </ul>

                </li>

                <li>
                    <a href="calendar.html" class=" waves-effect">
                        <i class="mdi mdi-calendar-text"></i>
                        <span>Calendar</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-inbox-full"></i>
                        <span>Email</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="email-inbox.html">Inbox</a></li>
                        <li><a href="email-read.html">Read Email</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-calendar-check"></i>
                        <span>Tasks</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tasks-list.html">Task List</a></li>
                        <li><a href="tasks-kanban.html">Kanban Board</a></li>
                        <li><a href="tasks-create.html">Create Task</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-account-circle-outline"></i>
                        <span>Pages</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-login.html">Login</a></li>
                        <li><a href="pages-register.html">Register</a></li>
                        <li><a href="pages-recoverpw.html">Recover Password</a></li>
                        <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                        <li><a href="pages-starter.html">Starter Page</a></li>
                        <li><a href="pages-invoice.html">Invoice</a></li>
                        <li><a href="pages-profile.html">Profile</a></li>
                        <li><a href="pages-maintenance.html">Maintenance</a></li>
                        <li><a href="pages-comingsoon.html">Coming Soon</a></li>
                        <li><a href="pages-timeline.html">Timeline</a></li>
                        <li><a href="pages-faqs.html">FAQs</a></li>
                        <li><a href="pages-pricing.html">Pricing</a></li>
                        <li><a href="pages-404.html">Error 404</a></li>
                        <li><a href="pages-500.html">Error 500</a></li>
                    </ul>
                </li>

                <li class="menu-title">Components</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-checkbox-multiple-blank-outline"></i>
                        <span>UI Elements</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ui-alerts.html">Alerts</a></li>
                        <li><a href="ui-buttons.html">Buttons</a></li>
                        <li><a href="ui-cards.html">Cards</a></li>
                        <li><a href="ui-carousel.html">Carousel</a></li>
                        <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                        <li><a href="ui-grid.html">Grid</a></li>
                        <li><a href="ui-images.html">Images</a></li>
                        <li><a href="ui-lightbox.html">Lightbox</a></li>
                        <li><a href="ui-modals.html">Modals</a></li>
                        <li><a href="ui-rangeslider.html">Range Slider</a></li>
                        <li><a href="ui-session-timeout.html">Session Timeout</a></li>
                        <li><a href="ui-progressbars.html">Progress Bars</a></li>
                        <li><a href="ui-sweet-alert.html">Sweet-Alert</a></li>
                        <li><a href="ui-tabs-accordions.html">Tabs & Accordions</a></li>
                        <li><a href="ui-typography.html">Typography</a></li>
                        <li><a href="ui-video.html">Video</a></li>
                        <li><a href="ui-general.html">General</a></li>
                        <li><a href="ui-colors.html">Colors</a></li>
                        <li><a href="ui-rating.html">Rating</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-newspaper"></i>
                        <span class="badge rounded-pill bg-danger float-end">6</span>
                        <span>Forms</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="form-elements.html">Form Elements</a></li>
                        <li><a href="form-validation.html">Form Validation</a></li>
                        <li><a href="form-advanced.html">Form Advanced</a></li>
                        <li><a href="form-editors.html">Form Editors</a></li>
                        <li><a href="form-uploads.html">Form File Upload</a></li>
                        <li><a href="form-xeditable.html">Form Xeditable</a></li>
                        <li><a href="form-repeater.html">Form Repeater</a></li>
                        <li><a href="form-wizard.html">Form Wizard</a></li>
                        <li><a href="form-mask.html">Form Mask</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-clipboard-list-outline"></i>
                        <span>Tables</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tables-basic.html">Basic Tables</a></li>
                        <li><a href="tables-datatable.html">Data Tables</a></li>
                        <li><a href="tables-responsive.html">Responsive Table</a></li>
                        <li><a href="tables-editable.html">Editable Table</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-chart-donut"></i>
                        <span>Charts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="charts-apex.html">Apex charts</a></li>
                        <li><a href="charts-chartjs.html">Chartjs Chart</a></li>
                        <li><a href="charts-flot.html">Flot Chart</a></li>
                        <li><a href="charts-knob.html">Jquery Knob Chart</a></li>
                        <li><a href="charts-sparkline.html">Sparkline Chart</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-emoticon-happy-outline"></i>
                        <span>Icons</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="icons-boxicons.html">Boxicons</a></li>
                        <li><a href="icons-materialdesign.html">Material Design</a></li>
                        <li><a href="icons-dripicons.html">Dripicons</a></li>
                        <li><a href="icons-fontawesome.html">Font awesome</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-map-marker-outline"></i>
                        <span>Maps</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="maps-google.html">Google Maps</a></li>
                        <li><a href="maps-vector.html">Vector Maps</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-file-tree"></i>
                        <span>Multi Level</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);">Level 1.1</a></li>
                        <li><a href="javascript: void(0);" class="has-arrow">Level 1.2</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);">Level 2.1</a></li>
                                <li><a href="javascript: void(0);">Level 2.2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li> -->

            </ul>
        </div>
        <!-- Sidebar -->
        @endauth
    </div>
</div>
<!-- Left Sidebar End -->
