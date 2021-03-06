<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ trans('labels.title.common') }} | @yield('title')</title>

    <link href="{{url('plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('plugins/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{url('plugins/inspinia/css/animate.css')}}" rel="stylesheet">
    <link href="{{url('plugins/inspinia/css/style.css')}}" rel="stylesheet">
    <link href="{{url('css/backend/common.css')}}" rel="stylesheet">
    @yield('extend-css')
</head>

<body>

<div id="wrapper">
    <!-- Include sidebar left -->
@include('backend.layout.main.sidebar_left')
<!-- End include side bar left -->

    <div id="page-wrapper" class="gray-bg">
        <!-- Include sidebar top -->
    @include('backend.layout.main.sidebar_top')
    <!-- End include side bar top -->
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                @yield('breadcrumb')
            </div>
            <div class="col-lg-2">
            </div>
        </div>


        <div class="wrapper wrapper-content animated fadeInRight">
            @yield('content')
        </div>
        <div class="footer">
            <div>
                {!! trans('messages.message.common.copyright') !!}
            </div>
        </div>
    </div>
</div>

<!-- Mainly scripts -->
<script src="{{url('plugins/jquery/js/jquery-3.1.1.min.js')}}"></script>
<script src="{{url('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{url('plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{url('plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<!-- Custom and plugin javascript -->
<script src="{{url('plugins/inspinia/js/inspinia.js')}}"></script>
<script src="{{url('plugins/pace/pace.min.js')}}"></script>
@yield('extend-js')

</body>

</html>
