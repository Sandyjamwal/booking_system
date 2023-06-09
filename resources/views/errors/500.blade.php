<!DOCTYPE html>
<html lang="en" data-layout-mode="detached" data-topbar-color="dark" data-sidenav-color="light" data-sidenav-user="true">
<head>
        <meta charset="utf-8" />
        <title>500 Error</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App css -->
        <link href="{{ asset('assets/admin/css/app-modern.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />
</head>
    <body>
<div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-4 col-lg-5">
                <div class="card">
                    <!-- Logo -->
                    <div class="card-header pt-4 pb-4 text-center bg-primary">
                        <a href="index-2.html">
                            <span><img src="assets/images/logo.png" alt="logo" height="22"></span>
                        </a>
                    </div>
                    
                    <div class="card-body p-4">

                        <div class="text-center">
                            <img src="assets/images/svg/startman.svg" height="120" alt="File not found Image">

                            <h1 class="text-error mt-4">500</h1>
                            <h4 class="text-uppercase text-danger mt-3">Internal Server Error</h4>
                            <p class="text-muted mt-3">Why not try refreshing your page? or you can contact <a href="#" class="text-muted"><b>Support</b></a></p>

                            <a class="btn btn-info mt-3" href="{{url('admin/dashboard')}}"><i class="mdi mdi-reply"></i> Return Home</a>
                        </div>

                    </div> <!-- end card-body-->
                </div>
                <!-- end card-->
                
            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
</body>

</html> 