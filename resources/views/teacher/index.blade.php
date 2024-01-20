<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Teacher Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="https://i.ibb.co/RgJJv3C/home-page-2.webp">
    <!-- Pignose Calender -->
    <link href="{{ asset("/teacherdashboards/teacherdashboard") }}/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{ asset("/teacherdashboards/teacherdashboard") }}/plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="{{ asset("/teacherdashboards/teacherdashboard") }}/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="{{ asset("/teacherdashboards/teacherdashboard") }}/css/style.css" rel="stylesheet">
    <link href="{{ asset("/teacherdashboards/teacherdashboard") }}/plugins/summernote/dist/summernote.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
</head>

<style>
    body
    {
        font-family: 'Hind Siliguri', sans-serif;
        color: #000;
    }
</style>

<body>

    <!--**********************************
        Main wrapper start
        ***********************************-->
        <div id="main-wrapper">

        <!--**********************************
            Nav header start
            ***********************************-->
            <div class="nav-header">
                <div class="brand-logo">
                    <a href="{{ url('teacherdashboard') }}">
                        <b class="logo-abbr"><img src="https://i.ibb.co/RgJJv3C/home-page-2.webp" alt=""> </b>
                        <span class="logo-compact"><img src="{{ url(Auth('teacher')->user()->image) }}" alt=""></span>
                        <span class="brand-title">
                            <h4 style="color: #fff;" class="text-uppercase"><b>Dashboard</b></h4>
                        </span>
                    </a>
                </div>
            </div>
        <!--**********************************
            Nav header end
            ***********************************-->

        <!--**********************************
            Header start
            ***********************************-->
            <div class="header">    
                <div class="header-content clearfix">

                    <div class="nav-control">
                        <div class="hamburger">
                            <span class="toggle-icon"><i class="icon-menu"></i></span>
                        </div>
                    </div>
                    <div class="header-left">
                        <div class="input-group icons">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                            </div>
                            <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                            <div class="drop-down animated flipInX d-md-none">
                                <form action="#">
                                    <input type="text" class="form-control" placeholder="Search">
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <div class="header-right">
                        <ul class="clearfix">
                            <li class="icons dropdown" style="padding: 0px 58px 0px 0px;">
                                @if (App::isLocale('bn'))
                                <a class="nav-link" href="{{ route('lang', 'en') }}" role="button">
                                    <img src="{{ asset('assets/images/flags/us.jpg') }}" alt="user-image" class="me-0 me-sm-1" height="12">
                                    <span class="align-middle d-none d-sm-inline-block">English</span>
                                </a>
                                @else
                                <a class="nav-link" href="{{ route('lang', 'bn') }}" role="button">
                                    <img src="{{ asset('assets/images/flags/bd.jpg') }}" alt="user-image" class="me-0 me-sm-1" height="12">
                                    <span class="align-middle d-none d-sm-inline-block">Bangla</span>
                                </a>
                                @endif
                            </li>
                            <li class="icons dropdown">
                                <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                    <span class="activity active"></span>
                                    <img src="{{ url(Auth('teacher')->user()->image) }}" height="40" width="40" alt="">
                                </div>
                                <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="{{ url("/teacherprofile/".Auth('teacher')->user()->id) }}"><i class="icon-user"></i> <span>Profile</span></a>
                                            </li>

                                            <li><a href="{{ url("teacherlogout") }}"><i class="icon-key"></i> <span>Logout</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <!--**********************************
            Header end ti-comment-alt
            ***********************************-->


        <!--**********************************
            Sidebar start
            ***********************************-->
            <div class="nk-sidebar">           
                <div class="nk-nav-scroll">
                    <ul class="metismenu" id="menu">
                        <li class="nav-label" style="color:gray;">@lang('common.dashboard')</li>

                        <li>
                            <a href="{{ url("teacherdashboard") }}" aria-expanded="false">
                                <i class="icon-badge menu-icon"></i><span class="nav-text">@lang('common.dashboard')</span>
                            </a>
                        </li>

                        <li class="nav-label" style="color:gray;">@lang('common.menu')</li>

                        <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="icon-speedometer menu-icon"></i><span class="nav-text">@lang('teacher.managetitle')</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="{{ url('/coursematerials')}}">@lang('teacher.addtitle')</a></li>
                                <li><a href="{{ url('/managecoursematerials')}}">@lang('teacher.viewtitle')</a></li>
                            </ul>
                        </li>


                        <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="icon-speedometer menu-icon"></i><span class="nav-text">@lang('notices.managetitle')</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="{{ url('/t_notice')}}">@lang('notices.addtitle')</a></li>
                                <li><a href="{{ url('/t_managenotice')}}">@lang('notices.viewtitle')</a></li>
                            </ul>
                        </li>


                        <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="icon-speedometer menu-icon"></i><span class="nav-text">Results</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="{{ url('/t_results')}}">Results</a></li>
                                <li><a href="{{ url('/t_manageresults')}}">Manage Results</a></li>
                            </ul>
                        </li>



                        <!-- <li class="nav-label" style="color:gray;">Chat</li>


                        <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="icon-speedometer menu-icon"></i><span class="nav-text">Message</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="{{ url('/inboxmessageteacher')}}">Inbox</a></li>
                            </ul>
                        </li>
                        
                        
                         <li class="nav-label" style="color:gray;">SMS Notification</li>


                        <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="icon-speedometer menu-icon"></i><span class="nav-text">SMS</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="{{ url('/studentsmssend')}}">Student Message</a></li>
                                <li><a href="{{ url('/guardiansmssend')}}">Guardian Message</a></li>
                            </ul>
                        </li> -->
                        
                        





                        <li class="nav-label" style="color:gray;">Profile</li>

                        <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="icon-speedometer menu-icon"></i><span class="nav-text">Profile</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="{{ url('/teacherprofile/'.Auth('teacher')->user()->id) }}">My Profile</a></li>
                            </ul>
                        </li>
                        
                        
                           <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="icon-speedometer menu-icon"></i><span class="nav-text">Change Password</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="{{ url('/changepasswordteacher')}}">Change Password</a></li>
                            </ul>
                        </li>





                    </ul>
                </div>
            </div>
        <!--**********************************
            Sidebar end
            ***********************************-->




            @yield('content')



        </div>
    <!--**********************************
        Main wrapper end
        ***********************************-->

    <!--**********************************
        Scripts
        ***********************************-->
        <script src="{{ asset("/teacherdashboards/teacherdashboard") }}/plugins/common/common.min.js"></script>
        <script src="{{ asset("/teacherdashboards/teacherdashboard") }}/js/custom.min.js"></script>
        <script src="{{ asset("/teacherdashboards/teacherdashboard") }}/js/settings.js"></script>
        <script src="{{ asset("/teacherdashboards/teacherdashboard") }}/js/gleek.js"></script>
        <script src="{{ asset("/teacherdashboards/teacherdashboard") }}/js/styleSwitcher.js"></script>

        <!-- Chartjs -->
        <script src="{{ asset("/teacherdashboards/teacherdashboard") }}/plugins/chart.js/Chart.bundle.min.js"></script>
        <!-- Circle progress -->
        <script src="{{ asset("/teacherdashboards/teacherdashboard") }}/plugins/circle-progress/circle-progress.min.js"></script>
        <!-- Datamap -->
        <script src="{{ asset("/teacherdashboards/teacherdashboard") }}/plugins/d3v3/index.js"></script>
        <script src="{{ asset("/teacherdashboards/teacherdashboard") }}/plugins/topojson/topojson.min.js"></script>
        <script src="{{ asset("/teacherdashboards/teacherdashboard") }}/plugins/datamaps/datamaps.world.min.js"></script>
        <!-- Morrisjs -->
        <script src="{{ asset("/teacherdashboards/teacherdashboard") }}/plugins/raphael/raphael.min.js"></script>
        <script src="{{ asset("/teacherdashboards/teacherdashboard") }}/plugins/morris/morris.min.js"></script>
        <!-- Pignose Calender -->
        <script src="{{ asset("/teacherdashboards/teacherdashboard") }}/plugins/moment/moment.min.js"></script>
        <script src="{{ asset("/teacherdashboards/teacherdashboard") }}/plugins/pg-calendar/js/pignose.calendar.min.js"></script>
        <!-- ChartistJS -->
        <script src="{{ asset("/teacherdashboards/teacherdashboard") }}/plugins/chartist/js/chartist.min.js"></script>
        <script src="{{ asset("/teacherdashboards/teacherdashboard") }}/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>



        <script src="{{ asset("/teacherdashboards/teacherdashboard") }}/js/dashboard/dashboard-1.js"></script>

        <script src="{{ asset("/teacherdashboards/teacherdashboard") }}/plugins/summernote/dist/summernote.min.js"></script>
        <script src="{{ asset("/teacherdashboards/teacherdashboard") }}/plugins/summernote/dist/summernote-init.js"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script>
          @if(Session::has('messege'))
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
            case 'info':
            toastr.info("{{ Session::get('messege') }}");
            break;
            case 'success':
            toastr.success("{{ Session::get('messege') }}");
            break;
            case 'warning':
            toastr.warning("{{ Session::get('messege') }}");
            break;
            case 'error':
            toastr.error("{{ Session::get('messege') }}");
            break;
        }
        @endif
    </script>


    <script src="{{ asset("/teacherdashboards/teacherdashboard") }}/plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset("/teacherdashboards/teacherdashboard") }}/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset("/teacherdashboards/teacherdashboard") }}/plugins/tables/js/datatable-init/datatable-basic.min.js"></script>

    <style type="text/css">
        .dataTables_filter input{
            border:1px solid lightgray!important;
            height: 30px!important;
        }
    </style>

    <script type="text/javascript">
      (function($) {
        "use strict"

        new quixSettings({
            sidebarPosition: "fixed",
            headerPosition: "fixed"
        });

    })(jQuery);



    
</script>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#summernote1').summernote();
        });
    </script>

</body>

</html>