<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Askned - Dashboard</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/datepicker3.css')}}" rel="stylesheet">
    <link href="{{ asset('css/styles.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
</head>
    <body>
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span></button>
                    <a class="navbar-brand" href="#"><span>Askned</span>Admin</a>
                    <ul class="nav navbar-top-links navbar-right">
                       
                        <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <em class="fa fa-user"></em>
                        </a>
                            <ul class="dropdown-menu dropdown-alerts">
                                <li><a href="{{route('logout')}}">
                                    <div>Logout</div>
                                        <!-- <span class="pull-right text-muted small">3 mins ago</span></div> -->
                                </a></li>
                                <!-- <li class="divider"></li>
                                <li><a href="#">
                                    <div><em class="fa fa-heart"></em> 12 New Likes
                                        <span class="pull-right text-muted small">4 mins ago</span></div>
                                </a></li>
                                <li class="divider"></li>
                                <li><a href="#">
                                    <div><em class="fa fa-user"></em> 5 New Followers
                                        <span class="pull-right text-muted small">4 mins ago</span></div>
                                </a></li> -->
                            </ul>
                        </li>
                    </ul>
                </div>
            </div><!-- /.container-fluid -->
        </nav>
        @extends('layouts.sidebar')

        <div class="container-fluid">
            @yield('content')
        </div>
    </body>
    <script src="{{ asset('js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/chart.min.js')}}"></script>
    <script src="{{ asset('js/chart-data.js')}}"></script>
    <script src="{{ asset('js/easypiechart.js')}}"></script>
    <script src="{{ asset('js/easypiechart-data.js')}}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.js')}}"></script>
    <script src="{{ asset('js/custom.js')}}"></script>
    <script type="text/javascript">
        var highlight_menu = function(path) {
            /* Highlight current link */  
            $('.nav li').removeClass('active');
            $('.nav li:has(a[href="' + path + '"])').addClass('active')
        }
        $( document ).ready(function() {
            highlight_menu(window.location.href);
        });
    </script>

</html>