<!DOCTYPE html>
<html>

<!-- Mirrored from themesground.com/nexus-admin/template3/HTML/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Mar 2021 14:45:00 GMT -->
<head>
    <meta charset="UTF-8">
    <title>Login | Nexus - Responsive Bootstrap Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="description" content="">
    <meta name="keywords" content="Nexus bootstrap template, Nexus admin, bootstrap,admin template, bootstrap admin,">
    <meta name="author" content="ThemesGround">

    <!-- Base Css Files -->
    <link href="../admin_html/assets/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css" rel="stylesheet" />
    <link href="../admin_html/assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../admin_html/assets/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="../admin_html/assets/libs/fontello/css/fontello.css" rel="stylesheet" />
    <link href="../admin_html/assets/libs/animate-css/animate.min.css" rel="stylesheet" />
    <link href="../admin_html/assets/libs/nifty-modal/css/component.css" rel="stylesheet" />
    <link href="../admin_html/assets/libs/magnific-popup/magnific-popup.css" rel="stylesheet" />
    <link href="../admin_html/assets/libs/ios7-switch/ios7-switch.css" rel="stylesheet" />
    <link href="../admin_html/assets/libs/pace/pace.css" rel="stylesheet" />
    <link href="../admin_html/assets/libs/sortable/sortable-theme-bootstrap.css" rel="stylesheet" />
    <link href="../admin_html/assets/libs/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
    <link href="../admin_html/assets/libs/jquery-icheck/skins/all.css" rel="stylesheet" />
    <!-- Code Highlighter for Demo -->
    <link href="../admin_html/assets/libs/prettify/github.css" rel="stylesheet" />

    <!-- Extra CSS Libraries Start -->
    <link href="../admin_html/assets/css/style.css" rel="stylesheet" type="text/css" />
    <!-- Extra CSS Libraries End -->
    <link href="../admin_html/assets/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->


    <link rel="apple-touch-icon" href="../admin_html/assets/img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="../admin_html/assets/img/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="../admin_html/assets/img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="../admin_html/assets/img/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="../admin_html/assets/img/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="../admin_html/assets/img/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="../admin_html/assets/img/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="../admin_html/assets/img/apple-touch-icon-152x152.png" />
</head>
<body class="fixed-left login-page">
<!-- Modal Start -->
<!-- Modal Task Progress -->
<div class="md-modal md-3d-flip-vertical" id="task-progress">
    <div class="md-content">
        <h3><strong>Task Progress</strong> Information</h3>
        <div>
            <p>CLEANING BUGS</p>
            <div class="progress progress-xs for-modal">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                    <span class="sr-only">80&#37; Complete</span>
                </div>
            </div>
            <p>POSTING SOME STUFF</p>
            <div class="progress progress-xs for-modal">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                    <span class="sr-only">65&#37; Complete</span>
                </div>
            </div>
            <p>BACKUP DATA FROM SERVER</p>
            <div class="progress progress-xs for-modal">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                    <span class="sr-only">95&#37; Complete</span>
                </div>
            </div>
            <p>RE-DESIGNING WEB APPLICATION</p>
            <div class="progress progress-xs for-modal">
                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                    <span class="sr-only">100&#37; Complete</span>
                </div>
            </div>
            <p class="text-center">
                <button class="btn btn-danger btn-sm md-close">Close</button>
            </p>
        </div>
    </div>
</div>

<!-- Modal Logout -->
<div class="md-modal md-just-me" id="logout-modal">
    <div class="md-content">
        <h3><strong>Logout</strong> Confirmation</h3>
        <div>
            <p class="text-center">Are you sure want to logout from this awesome system?</p>
            <p class="text-center">
                <button class="btn btn-danger md-close">Nope!</button>
                <a href="login.html" class="btn btn-success md-close">Yeah, I'm sure</a>
            </p>
        </div>
    </div>
</div>        <!-- Modal End -->
<!-- Begin page -->
<div class="container">
    @if(session()->has('LoginFail'))
        <p class="text-danger text-center" > Đăng nhập thất bại </p>
    @endif
    <div class="full-content-center">
        <p class="text-center"><a href="#"><img src="../admin_html/assets/img/login-logo.png" alt="Logo"></a></p>
        <div class="login-wrap animated flipInX">
            <div class="login-block">
                <img src="../admin_html/images/users/default-user.jpg" class="img-circle not-logged-avatar">
                <form role="form" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group login-input">
                        <i class="fa fa-user overlay"></i>
                        <input type="text" class="form-control text-input" placeholder="Username" name="login[email]">
                    </div>
                    <div class="form-group login-input">
                        <i class="fa fa-key overlay"></i>
                        <input type="password" class="form-control text-input" placeholder="********" name="login[password]">
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-login btn-block">LOGIN</button>
                        </div>
                        <div class="col-sm-6">
                            <a href="register.html" class="btn btn-reg btn-block">Register</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
<!-- the overlay modal element -->
<div class="md-overlay"></div>
<!-- End of eoverlay modal -->
<script>
    var resizefunc = [];
</script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../admin_html/assets/libs/jquery/jquery-1.11.1.min.js"></script>
<script src="../admin_html/assets/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="../admin_html/assets/libs/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
<script src="../admin_html/assets/libs/jquery-ui-touch/jquery.ui.touch-punch.min.js"></script>

<script src="../admin_html/assets/libs/jquery-animate-numbers/jquery.animateNumbers.js"></script>
<script src="../admin_html/assets/libs/ios7-switch/ios7.switch.js"></script>
<script src="../admin_html/assets/libs/fastclick/js/fastclick.js"></script>
<script src="../admin_html/assets/libs/jquery-blockui/jquery.blockUI.js"></script>
<script src="../admin_html/assets/libs/bootstrap-bootbox/bootbox.min.js"></script>
<script src="../admin_html/assets/libs/jquery-slimscroll/jquery.slimscroll.js"></script>
<script src="../admin_html/assets/libs/jquery-sparkline/jquery-sparkline.js"></script>
<script src="../admin_html/assets/libs/nifty-modal/js/classie.js"></script>
<script src="../admin_html/assets/libs/nifty-modal/js/modalEffects.js"></script>
<script src="../admin_html/assets/libs/sortable/sortable.min.js"></script>
<script src="../admin_html/assets/libs/bootstrap-fileinput/bootstrap.file-input.js"></script>
<script src="../admin_html/assets/libs/bootstrap-select/bootstrap-select.min.js"></script>
<script src="../admin_html/assets/libs/bootstrap-select2/select2.min.js"></script>
<script src="../admin_html/assets/libs/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="../admin_html/assets/libs/pace/pace.min.js"></script>
<script src="../admin_html/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="../admin_html/assets/libs/jquery-icheck/icheck.min.js"></script>

<!-- Demo Specific JS Libraries -->
<script src="../admin_html/assets/libs/prettify/prettify.js"></script>

<script src="../admin_html/assets/js/init.js"></script>
</body>

<!-- Mirrored from themesground.com/nexus-admin/template3/HTML/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Mar 2021 14:45:01 GMT -->
</html>
