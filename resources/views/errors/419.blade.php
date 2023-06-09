<!DOCTYPE html>
<html lang="en" data-layout-mode="detached" data-topbar-color="dark" data-sidenav-color="light" data-sidenav-user="true">
<head>
        <meta charset="utf-8" />
        <title>419 Error</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App css -->
        <link href="{{ asset('assets/admin/css/app-modern.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />
</head>
    <body>
<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                {{-- <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                        <li class="breadcrumb-item active">419 Error</li>
                    </ol>
                </div> --}}
                <h4 class="page-title">419 Error</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <div class="text-center">
                {{-- <img src="assets/images/svg/file-searching.svg" height="90" alt="File not found Image"> --}}

                <h1 class="text-error mt-4">419</h1>
                <h4 class="text-uppercase text-danger mt-3">Page Not Found</h4>
                <p class="text-muted mt-3">It's looking like you may have taken a wrong turn. Don't worry... it
                    happens to the best of us. Here's a
                    little tip that might help you get back on track.</p>

                <a class="btn btn-info mt-3" href="{{url('admin/dashboard')}}"><i class="mdi mdi-reply"></i> Return Home</a>
            </div> <!-- end /.text-center-->
        </div> <!-- end col-->
    </div>
    <!-- end row -->
</div> <!-- container -->
    </body>

</html> 
