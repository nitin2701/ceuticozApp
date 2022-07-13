<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('page_title')</title> 
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
          integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
          crossorigin="anonymous"/>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('plugins/codemirror/codemirror.css') }}">
    @yield('third_party_stylesheets')
    @stack('page_css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <!-- Main Header -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown user-menu">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                <img src="{{asset('img/user2-160x160.jpg')}}"
                                 class="user-image img-circle elevation-2" alt="User Image">
                                <span class="d-none d-md-inline">{{ Auth::guard('admin')->user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <!-- User image -->
                            <li class="user-header bg-primary">
                                <img src="{{asset('img/user2-160x160.jpg')}}"
                                     class="img-circle elevation-2"
                                     alt="User Image">
                                <p>
                                    {{ Auth::guard('admin')->user()->name }}
                                    <small>Member since {{ Auth::guard('admin')->user()->created_at->format('M. Y') }}</small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <a href="{{ url('admin/profile') }}" class="btn btn-default btn-flat">{{ __('auth.profile') }}</a>
                                <a href="#" class="btn btn-default btn-flat float-right"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                 <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
                <!-- Left side column. contains the logo and sidebar -->
                @include('admin.partials.sidebar')
                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper">
                        <!-- Content Header (Page header) -->
                        <section class="content-header">
                                <div class="container-fluid">
                                        <div class="row mb-2">
                                                 <div class="col-sm-6">
                                                                <h1> @yield('title')</h1>
                                                 </div>
                                                <div class="col-sm-6">
                                                       <!--Breadcrumb come here -->
                                                        
                                                </div>
                                        </div>
                                </div>
                        </section>
                        <section class="content">
                                @include('partials.flash.message')
                                @yield('content')
                        </section>
                </div>
                <footer class="main-footer">
                        <div class="float-right d-none d-sm-block">
                                <b>Version</b> 3.0.5
                        </div>
                        <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
                </footer>
        </div>
       
        <script src="{{ asset('plugins/ckeditor/ckeditor.js') }}"></script>
        <script src="{{ mix('js/app.js') }}" ></script>
        <script src="{{ asset('plugins/codemirror/codemirror.js') }}"></script>
        @yield('third_party_scripts')
        @stack('page_scripts')
        
        @hasSection('scripts')@yield('scripts')@endif
        
        
</body>
</html>