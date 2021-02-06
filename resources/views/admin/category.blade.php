<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Category List</title>
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
    @yield('css')
    @yield('javascript')
</head>
<body>
<div class="row" id="proBanner">
    <div class="col-12">
        <!--<span class="d-flex align-items-center purchase-popup">-->
        <span class="d-flex align-items-center">
          <!--<p>Get tons of UI components, Plugins, multiple layouts, 20+ sample pages, and more!</p>-->
          <a href="https://www.bootstrapdash.com/product/celestial-admin-template/?utm_source=organic&utm_medium=banner&utm_campaign=free-preview" target="_blank" class="btn download-button purchase-button ml-auto">Upgrade To Pro</a>
          <i class="typcn typcn-delete-outline" id="bannerClose"></i>
        </span>
    </div>
</div>
<div class="container-scroller">

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
            <div id="settings-trigger"><i class="typcn typcn-cog-outline"></i></div>
            <div id="theme-settings" class="settings-panel">
                <i class="settings-close typcn typcn-delete-outline"></i>
                <p class="settings-heading">SIDEBAR SKINS</p>
                <div class="sidebar-bg-options" id="sidebar-light-theme">
                    <div class="img-ss rounded-circle bg-light border mr-3"></div>
                    Light
                </div>
                <div class="sidebar-bg-options selected" id="sidebar-dark-theme">
                    <div class="img-ss rounded-circle bg-dark border mr-3"></div>
                    Dark
                </div>
                <p class="settings-heading mt-2">HEADER SKINS</p>
                <div class="color-tiles mx-0 px-4">
                    <div class="tiles success"></div>
                    <div class="tiles warning"></div>
                    <div class="tiles danger"></div>
                    <div class="tiles primary"></div>
                    <div class="tiles info"></div>
                    <div class="tiles dark"></div>
                    <div class="tiles default border"></div>
                </div>
            </div>
        </div>
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item">
                    <div class="d-flex sidebar-profile">
                        <div class="sidebar-profile-image">
                            <img src="{{asset('assets')}}/admin/images/faces/face29.png" alt="image">
                            <span class="sidebar-status-indicator"></span>
                        </div>
                        <div class="sidebar-profile-name">
                            <p class="sidebar-name">
                                {{Auth::user()->name}}
                            </p>
                            <p class="sidebar-designation">
                                Welcome
                            </p>
                        </div>
                    </div>
                    <div class="nav-search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Type to search..." aria-label="search" aria-describedby="search">
                            <div class="input-group-append">
                  <span class="input-group-text" id="search">
                    <i class="typcn typcn-zoom"></i>
                  </span>
                            </div>
                        </div>
                    </div>
                    <p class="sidebar-menu-title">Dash menu</p>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('adminhome')}}">
                        <i class="typcn typcn-device-desktop menu-icon"></i>
                        <span class="menu-title">Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin_category')}}">
                        <i class="typcn typcn-document-text menu-icon"></i>
                        <span class="menu-title">Category</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin_postings')}}">
                        <i class="typcn typcn-briefcase menu-icon"></i>
                        <span class="menu-title">Jobs</span>
                    </a>
                </li>
            <!--<li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <i class="typcn typcn-briefcase menu-icon"></i>
                        <span class="menu-title">UI Elements</span>
                        <i class="typcn typcn-chevron-right menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{asset('assets')}}/admin/pages/ui-features/buttons.html">Buttons</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{asset('assets')}}/admin/pages/ui-features/dropdowns.html">Dropdowns</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{asset('assets')}}/admin/pages/ui-features/typography.html">Typography</a></li>
                        </ul>
                    </div>
                </li>-->
            <!--<li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                        <i class="typcn typcn-film menu-icon"></i>
                        <span class="menu-title">Form elements</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="form-elements">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="{{asset('assets')}}/admin/pages/forms/basic_elements.html">Basic Elements</a></li>
                        </ul>
                    </div>
                </li>-->
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="False" aria-controls="charts">
                        <i class="typcn typcn-chart-pie-outline menu-icon"></i>
                        <span class="menu-title">Charts</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="charts">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{asset('assets')}}/admin/pages/charts/chartjs.html">ChartJs</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                        <i class="typcn typcn-th-small-outline menu-icon"></i>
                        <span class="menu-title">Tables</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="tables">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{asset('assets')}}/admin/pages/tables/basic-table.html">Basic table</a></li>
                        </ul>
                    </div>
                </li>
            <!--<li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                        <i class="typcn typcn-compass menu-icon"></i>
                        <span class="menu-title">Icons</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="icons">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{asset('assets')}}/admin/pages/icons/mdi.html">Mdi icons</a></li>
                        </ul>
                    </div>
                </li>-->
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="typcn typcn-user-add-outline menu-icon"></i>
                        <span class="menu-title">User Pages</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="auth">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{asset('assets')}}/admin/pages/samples/login.html"> Login </a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{asset('assets')}}/admin/pages/samples/register.html"> Register </a></li>
                        </ul>
                    </div>
                </li>
            <!--<li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
                        <i class="typcn typcn-globe-outline menu-icon"></i>
                        <span class="menu-title">Error pages</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="error">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{asset('assets')}}/admin/pages/samples/error-404.html"> 404 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{asset('assets')}}/admin/pages/samples/error-500.html"> 500 </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{asset('assets')}}/admin/pages/documentation/documentation.html">
                        <i class="typcn typcn-document-text menu-icon"></i>
                        <span class="menu-title">Documentation</span>
                    </a>
                </li>-->
            </ul>
            <ul class="sidebar-legend">
                <li>
                    <p class="sidebar-menu-title">Category</p>
                </li>
                <li class="nav-item"><a href="#" class="nav-link">#Sales</a></li>
                <li class="nav-item"><a href="#" class="nav-link">#Marketing</a></li>
                <li class="nav-item"><a href="#" class="nav-link">#Growth</a></li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

                @include('admin._header')
                <div class="content-wrapper">

                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Category List</h4>

                                <a class="btn btn-primary mr-2" href="{{route('admin_category_add')}}">Add Category</a>
                                <div class="table-responsive pt-3">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>
                                                Id
                                            </th>
                                            <th>
                                                Parent
                                            </th>
                                            <th>
                                                Title(s)
                                            </th>
                                            <th>
                                                Status
                                            </th>
                                            <th>
                                                Edit
                                            </th>
                                            <th>
                                                Delete
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($datalist as $datalist)

                                        <tr>
                                            <td>
                                                {{$datalist->id}}
                                            </td>
                                            <td>
                                                {{$datalist->parent_id}}
                                            </td>
                                            <td>
                                                {{$datalist->title}}
                                            </td>
                                            <td>
                                                {{$datalist->status}}
                                            </td>
                                            <td>
                                                <a href="{{route('admin_category_edit',['id'=>$datalist->id])}}"  >Edit</a>
                                            </td>
                                            <td>
                                                <a href="{{route('admin_category_delete',['id'=>$datalist->id])}}" onclick="return confirm('Delete! Are you sure?')" >Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- content-wrapper ends -->
                @include('admin._footer')
                @yield('footer')


            </div>
            <!-- content-wrapper ends -->

        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->


</div>
<!-- container-scroller -->
<!-- base:js -->
<script src="{{asset('assets')}}/admin/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{asset('assets')}}/admin/js/off-canvas.js"></script>
<script src="{{asset('assets')}}/admin/js/hoverable-collapse.js"></script>
<script src="{{asset('assets')}}/admin/js/template.js"></script>
<script src="{{asset('assets')}}/admin/js/settings.js"></script>
<script src="{{asset('assets')}}/admin/js/todolist.js"></script>
<!-- endinject -->
<!-- plugin js for this page -->
<script src="{{asset('assets')}}/admin/vendors/progressbar.js/progressbar.min.js"></script>
<script src="{{asset('assets')}}/admin/vendors/chart.js/Chart.min.js"></script>
<!-- End plugin js for this page -->
<!-- Custom js for this page-->
<script src="{{asset('assets')}}/admin/js/dashboard.js"></script>
<!-- End custom js for this page-->

</body>
</html>
