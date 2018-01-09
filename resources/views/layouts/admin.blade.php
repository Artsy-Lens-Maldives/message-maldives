<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon.png">
    <title>Message Maldives - @yield('title')</title>
    
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Sidebar menu and Animation and Spinners CSS -->
    <link href="/css/admin/combined.css" rel="stylesheet">
    <!-- This is a Custom CSS -->
    <link href="/css/admin/style.css" rel="stylesheet">
    <!-- color CSS you can use different color css from css/colors folder -->
    <link href="/css/admin/color.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('css')
</head>

<body class="fix-sidebar">
    <!-- Preloader -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
        </svg>
    </div>
    <div id="wrapper">
        @include('partials.admin.header')
        @include('partials.admin.left-sidebar')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <!-- .page title -->
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">@yield('title')</h4> 
                    </div>
                    <!-- /.page title -->
                    <!-- .breadcrumb -->
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
                        <ol class="breadcrumb">
                            <li><a href="{{ url('admin/home') }}">Home</a></li>
                            @yield('breadcrumb')
                        </ol>
                    </div>
                    <!-- /.breadcrumb -->
                </div>
                @yield('content')
                <!-- .row -->
                @include('partials.admin.right-sidebar')
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> {{ date('Y') }} &copy; Message Maldives </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="/js/admin/sidebar-nav.min.js"></script>
    <!--Slimscroll JavaScript For custom scroll-->
    <script src="/js/admin/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="/js/admin/waves.js"></script>
    <script src="/js/admin/custom.js"></script>
    @yield('js')
    <script>
        //Loads the correct sidebar on window load,
        //collapses the sidebar on window resize.
        // Sets the min-height of #page-wrapper to window size
        $(function () {
            $(window).bind("load resize", function () {
                topOffset = 60;
                width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
                if (width < 768) {
                    $('div.navbar-collapse').addClass('collapse');
                    topOffset = 100; // 2-row-menu
                }
                else {
                    $('div.navbar-collapse').removeClass('collapse');
                }
                height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
                height = height - topOffset;
                if (height < 1) height = 1;
                if (height > topOffset) {
                    $("#page-wrapper").css("min-height", (height) + "px");
                }
            });
            var url = window.location;
            var element = $('ul.nav a').filter(function () {
                return this.href == url || url.href.indexOf(this.href) == 0;
            }).addClass('active').parent().parent().addClass('in').parent();
            if (element.is('li')) {
                element.addClass('active');
            }
        });
    </script>

</body>
</html>