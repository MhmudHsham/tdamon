<!DOCTYPE html>
<html lang="en" dir="rtl">
    <head>
        <meta charset="utf-8" />
        <title>{{ $settings->site_title_ar }} @yield('title')</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin RTL Theme #1 for statistics, charts, recent events and reports" name="description" />
        <meta content="Master Vision Integrated Solutions" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        {!! HTML::style('assets/global/plugins/font-awesome/css/font-awesome.min.css') !!}
        {!! HTML::style('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') !!}
        {!! HTML::style('assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css') !!}
        {!! HTML::style('assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css') !!}
        {!! HTML::style('http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all') !!}
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        @yield('styles')
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        {!! HTML::style('assets/global/css/components-rtl.min.css') !!}
        {!! HTML::style('assets/global/css/plugins-rtl.min.css') !!}
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        {!! HTML::style('assets/layouts/layout/css/layout-rtl.min.css') !!}
        {!! HTML::style('assets/layouts/layout/css/themes/darkblue-rtl.min.css') !!}
        {!! HTML::style('assets/layouts/layout/css/custom-rtl.min.css') !!}
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="{{ asset($settings->site_logo) }}" />


        <script type="text/javascript">
            var config = {
                admin_url: "{{ url('/admin/') }}"
            };
        </script>
    </head>


    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <div class="page-wrapper">
            <!-- BEGIN HEADER -->
            <div class="page-header navbar navbar-fixed-top">
                <!-- BEGIN HEADER INNER -->
                <div class="page-header-inner ">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                        <a href="{!! url('admin/') !!}">
                        </a>
                        <div class="menu-toggler sidebar-toggler">
                            <span></span>
                        </div>
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                        <span></span>
                    </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        @include('admin.components.menu')
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END HEADER INNER -->
            </div>
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTAINER -->
            <div class="page-container">
                <!-- BEGIN SIDEBAR -->
                <div class="page-sidebar-wrapper">
                    <!-- BEGIN SIDEBAR -->
                    <div class="page-sidebar navbar-collapse collapse">
                        <!-- BEGIN SIDEBAR MENU -->
                        @include('admin.components.sidebar')
                        <!-- END SIDEBAR MENU -->
                    </div>
                    <!-- END SIDEBAR -->
                </div>
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->
                        <!-- BEGIN THEME PANEL -->
                        @include('admin.components.theme')
                        <!-- END THEME PANEL -->
                        <!-- BEGIN PAGE BAR -->
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="{!! url('admin/') !!}">الرئيسية</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span>@yield('page_level')</span>
                                </li>
                            </ul>

                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title"> @yield('page_title')
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->



                        <!-- START PAGE CONTENT-->
                        @yield('content')
                        <!-- END PAGE CONTENT -->



                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
                <!-- BEGIN QUICK SIDEBAR -->
                @include('admin.components.quick_sidebar')
                <!-- END QUICK SIDEBAR -->
            </div>
            <!-- END CONTAINER -->
            <!-- BEGIN FOOTER -->
            @include('admin.components.footer')
            <!-- END FOOTER -->
        </div>

        <!-- BEGIN CORE PLUGINS -->
        {!! HTML::script('assets/global/plugins/jquery.min.js') !!}
        {!! HTML::script('assets/global/plugins/bootstrap/js/bootstrap.min.js') !!}
        {!! HTML::script('assets/global/plugins/js.cookie.min.js') !!}
        {!! HTML::script('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') !!}
        {!! HTML::script('assets/global/plugins/jquery.blockui.min.js') !!}
        {!! HTML::script('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') !!}
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        @yield('plugins')
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        {!! HTML::script('assets/global/scripts/app.min.js') !!}
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        @yield('scripts')
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        {!! HTML::script('assets/layouts/layout/scripts/layout.min.js') !!}
        {!! HTML::script('assets/layouts/layout/scripts/demo.min.js') !!}
        {!! HTML::script('assets/layouts/global/scripts/quick-sidebar.min.js') !!}
        {!! HTML::script('assets/layouts/global/scripts/quick-nav.min.js') !!}
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>