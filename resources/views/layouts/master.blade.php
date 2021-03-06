<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title') | Study Each</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href={{url('/plugins/bootstrap/css/bootstrap.min.css')}}>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href={{url('/resources/AdminLTE/css/AdminLTE.min.css')}}>
        <link rel="stylesheet" href={{url('/resources/AdminLTE/css/skins/skin-blue.min.css')}}>
        <link rel="stylesheet" href={{url('/resources/css/master.css')}}>
        @yield('head')
    </head>

    <body class="hold-transition skin-blue sidebar-mini fixed">
        <div class="wrapper">
            <header class="main-header">
                <a href={{url('/home')}} class="logo">
                    <span class="logo-mini"><img class="img-responsive" src={{url('/resources/img/logo_3.png')}} alt="StudyEach"></span>
                    <span class="logo-lg"><b>Study Each</b></span>
                </a>

                <nav class="navbar navbar-static-top" role="navigation">
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href={{url('/settings')}} title="Settings"><i class="fa fa-gear "></i></a>
                            </li>
                            <li>
                                <a href={{url('/logout')}} title="Logout"><i class="fa fa-sign-out"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <aside class="main-sidebar">
                <section class="sidebar">
                    <div class="user-panel">
                        <?php $user = \Auth::user();?>
                        <?php $photo = \App\UserProfilePhoto::where('user',$user->id)->first()?>
                        @if($photo)
                            <div class="pull-left image">
                                <img class="img-circle" src={{$photo->url}} alt="User Image">
                            </div>
                        @else
                            <div class="pull-left image">
                                <img class="img-circle" src={{url('/resources/img/user.jpg')}} alt="User Image">
                            </div>
                        @endif
                        <div class="pull-left info">
                            <p><?php echo $user->name?></p>
                        </div>
                    </div>

                    <ul class="sidebar-menu">
                        <li id="Home"><a href={{url('/home')}}><i class="fa fa-home"></i> <span>Home</span></a></li>
                        <li id="Calendar"><a href={{url('/calendar')}}><i class="fa fa-calendar-o"></i> <span>Calendar</span></a></li>
                        <li id="Tasks"><a href={{url('/tasks')}}><i class="fa fa-check-square-o"></i> <span>Tasks</span></a></li>
                        <li id="Exams"><a href={{url('/exams')}}><i class="fa fa-file-text-o"></i> <span>Exams</span></a></li>
                        <li id="Schedule"><a href={{url('/schedule')}}><i class="fa fa-mortar-board"></i> <span>Schedule</span></a></li>
                    </ul>
                </section>
            </aside>

            <div class="content-wrapper">
                <section class="content-header">
                    <div class="row std-content-header">
                        <div class="col-md-6">
                            <p>
                                @yield('title')
                                <small>@yield('description')</small>
                            </p>
                        </div>
                        <div class="col-md-6">
                            @yield('header')
                        </div>
                    </div>
                </section>

                <section class="content">
                    <div class="row">
                        @yield('content')
                    </div>
                </section>
            </div>

            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <i class="fa fa-star"></i>
                    v3.2.0
                </div>
                <strong>Copyright &copy; 2016 <a href="https://github.com/TiagoDamascena/StudyEach">Study Each</a>.</strong>
            </footer>
            <div class="control-sidebar-bg"></div>
        </div>
        <div id="users-device-size">
            <div id="xs" class="visible-xs"></div>
            <div id="sm" class="visible-sm"></div>
            <div id="md" class="visible-md"></div>
            <div id="lg" class="visible-lg"></div>
        </div>

        @yield('page_end')

        <!-- REQUIRED JS SCRIPTS -->

        <!-- jQuery 2.2.0 -->
        <script src={{url('/plugins/jQuery/jQuery-2.2.0.min.js')}}></script>
        <!-- Bootstrap 3.3.6 -->
        <script src={{url('/plugins/bootstrap/js/bootstrap.min.js')}}></script>
        <!-- AdminLTE App -->
        <script src={{url('/resources/AdminLTE/js/app.min.js')}}></script>
        <!-- Master JS -->
        <script src={{url('/resources/js/master.js')}}></script>
        @yield('include_js')

        <script>
            $(function () {
                $('[id^="@yield('title')"]').addClass("active");
            });
            @yield('js')
        </script>
    </body>
</html>