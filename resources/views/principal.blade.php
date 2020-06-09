<!DOCTYPE html>
<html lang="pt">

<head>
    <title>Memorize </title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon icon -->
    <link rel="icon" href="/assets\images\favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="/bower_components\bootstrap\css\bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="/assets\icon\themify-icons\themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="/assets\icon\icofont\css\icofont.css">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="/assets\icon\feather\css\feather.css">
    <!-- Syntax highlighter Prism css -->
    <link rel="stylesheet" type="text/css" href="/assets\pages\prism\prism.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="/assets\css\style.css">
    <!-- animation css -->
    <link rel="stylesheet" type="text/css" href="\bower_components\animate.css\css\animate.css">

    <link rel="stylesheet" type="text/css" href="/assets\css\jquery.mCustomScrollbar.css">
    <!-- owl carousel css -->
    <link rel="stylesheet" type="text/css" href="/bower_components\owl.carousel\css\owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/bower_components\owl.carousel\css\owl.theme.default.css">
    <!-- swiper css -->
    <link rel="stylesheet" type="text/css" href="/bower_components\swiper\css\swiper.min.css">



</head>
<!-- Menu sidebar layout -->

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->

    <!-- Menu header start -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="{{ url('/') }}">

                            <img class="img-fluid" src="/assets/logo.png" alt="Theme-Logo">
                        </a>
                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="feather icon-maximize full-screen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-bell"></i>
                                        <span class="badge bg-c-pink">5</span>
                                    </div>
                                    <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <h6>Notifications</h6>
                                            <label class="label label-danger">New</label>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <div class="media-body">
                                                    <h5 class="notification-user">John Doe</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                            </li>
                        </ul>
                    </div>
                    </li>
                    <li class="user-profile header-notification">
                        <div class="dropdown-primary dropdown">
                            <div class="dropdown-toggle" data-toggle="dropdown">
                                <span>Wellington</span>
                                <i class="feather icon-chevron-down"></i>
                            </div>
                            <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                <li>
                                    <a href="#!">
                                        <i class="feather icon-settings"></i> Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="user-profile.htm">
                                        <i class="feather icon-user"></i> Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="email-inbox.htm">
                                        <i class="feather icon-mail"></i> My Messages
                                    </a>
                                </li>
                                <li>
                                    <a href="auth-lock-screen.htm">
                                        <i class="feather icon-lock"></i> Lock Screen
                                    </a>
                                </li>
                                <li>
                                    <a class="log-out-btn" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> <i class="feather icon-log-out"></i> Logout </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>

                                </li>
                            </ul>

                        </div>
                    </li>
                    </ul>
                </div>
        </div>
        </nav>

        <!-- Sidebar chat start -->

        <!-- Sidebar inner chat start-->

        <!-- Sidebar inner chat end-->
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <nav class="pcoded-navbar" pcoded-header-position="relative">
                    <div class="pcoded-inner-navbar main-menu">
                        <div class="pcoded-navigatio-lavel">Navegação</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                    <span class="pcoded-mtext">Menu</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="{{url('words/leson')}}">
                                            <span class="pcoded-mtext">Aprender Palavras</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="{{url('words/create')}}">
                                            <span class="pcoded-mtext">Cadastrar Palavras</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="{{url('words')}}">
                                            <span class="pcoded-mtext">Listar Palavras</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                    </div>
                </nav>
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">


                        <!-- Main-body start -->
                        <div class="main-body">
                            <section class="content">
                                @yield('words.conteudo')
                            </section>
                        </div>
                        <!-- Main-body end -->

                        <div id="styleSelector">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>



    <!-- Warning Section Ends -->
    <!-- Required Jquery -->

    <script type="text/javascript" src="/bower_components\jquery\js\jquery.min.js"></script>
    <script type="text/javascript" src="/bower_components\jquery-ui\js\jquery-ui.min.js"></script>
    <script type="text/javascript" src="/bower_components\popper.js\js\popper.min.js"></script>
    <script type="text/javascript" src="/bower_components\bootstrap\js\bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="/bower_components\jquery-slimscroll\js\jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="/bower_components\modernizr\js\modernizr.js"></script>
    <script type="text/javascript" src="/bower_components\modernizr\js\css-scrollbars.js"></script>

    <!-- data-table js -->
    <script src="/bower_components\datatables.net\js\jquery.dataTables.min.js"></script>
    <script src="/bower_components\datatables.net-buttons\js\dataTables.buttons.min.js"></script>
    <script src="/assets\pages\data-table\js\jszip.min.js"></script>
    <script src="/assets\pages\data-table\js\pdfmake.min.js"></script>
    <script src="/assets\pages\data-table\js\vfs_fonts.js"></script>
    <script src="/bower_components\datatables.net-buttons\js\buttons.print.min.js"></script>
    <script src="/bower_components\datatables.net-buttons\js\buttons.html5.min.js"></script>
    <script src="/bower_components\datatables.net-bs4\js\dataTables.bootstrap4.min.js"></script>
    <script src="/bower_components\datatables.net-responsive\js\dataTables.responsive.min.js"></script>
    <script src="/bower_components\datatables.net-responsive-bs4\js\responsive.bootstrap4.min.js"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="/bower_components\i18next\js\i18next.min.js"></script>
    <script type="text/javascript" src="/bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="/bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="/bower_components\jquery-i18next\js\jquery-i18next.min.js"></script>
    <!-- Custom js -->
    <script src="/assets\pages\data-table\js\data-table-custom.js"></script>
    <!-- <script type="text/javascript" src="\assets\js\animation.js"></script> -->
    <!-- Custom js -->
    <script type="text/javascript" src="/assets\js\script.js"></script>
    <!-- owl carousel 2 js -->
    <script type="text/javascript" src="/bower_components\owl.carousel\js\owl.carousel.min.js"></script>
    <script type="text/javascript" src="/assets\js\owl-custom.js"></script>
    <!-- swiper js -->
    <script type="text/javascript" src="/bower_components\swiper\js\swiper.min.js"></script>
    <script type="text/javascript" src="/assets\js\swiper-custom.js"></script>
    <!-- -->
    <script src="/assets\js\pcoded.min.js"></script>
    <script src="/assets\js\vartical-layout.min.js"></script>
    <script src="/assets\js\jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="/assets\js\script.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->

    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
</body>

</html>