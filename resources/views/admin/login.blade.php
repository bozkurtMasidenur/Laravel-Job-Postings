<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CelestialUI Admin</title>
    <!-- base:css -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/typicons.font/font/typicons.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('assets')}}/admin/images/favicon.png" />
</head>

<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <div class="brand-logo">
                            <img src="{{asset('assets')}}/admin/images/logo.svg" alt="logo">
                        </div>
                        <h4>Hello! let's get started</h4>
                        <h6 class="font-weight-light">Sign in to continue.</h6>
                        <!--<form action="{{route('adminlogincheck')}}" method="post" class="pt-3">
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control form-control-lg" id="email" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" id="password" placeholder="Password">
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" >SIGN IN</button>
                            </div>

                            <div class="my-2 d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                        <input type="checkbox" class="form-check-input">
                                        Keep me signed in
                                    </label>
                                </div>
                                <a href="#" class="auth-link text-black">Forgot password?</a>
                            </div>
                            <div class="mb-2">
                                <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                                    <i class="typcn typcn-social-facebook-circular mr-2"></i>Connect using facebook
                                </button>
                            </div>
                            <div class="text-center mt-4 font-weight-light">
                                Don't have an account? <a href="{{asset('assets')}}/admin/pages/register.html" class="text-primary">Create</a>
                            </div>
                        </form>-->


                        <form action="{{ route('adminlogincheck') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="small mb-1" for="email">Email</label>
                                <input class="form-control py-4" name="email" id="email" type="email" placeholder="Enter email address" />
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="inputPassword">Password</label>
                                <input class="form-control py-4" name="password" id="password" type="password" placeholder="Enter password" />
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                <button class="btn btn-primary btn-block" type="submit">Giriş Yap</button>
                            </div>
                        </form>



                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- base:js -->
<script src="{{asset('assets')}}/admin/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="{{asset('assets')}}/admin/js/off-canvas.js"></script>
<script src="{{asset('assets')}}/admin/js/hoverable-collapse.js"></script>
<script src="{{asset('assets')}}/admin/js/template.js"></script>
<script src="{{asset('assets')}}/admin/js/settings.js"></script>
<script src="{{asset('assets')}}/admin/js/todolist.js"></script>
<!-- endinject -->
</body>

</html>

