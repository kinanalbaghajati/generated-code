<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('backend_theme/images/favicon.ico')}}">

    <title>Sunny Admin - Dashboard</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{asset('backend_theme/main-dark/css/vendors_css.css')}}">

    <!-- Style-->
    <link rel="stylesheet" href="{{asset('backend_theme/main-dark/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('backend_theme/main-dark/css/skin_color.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">

</head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">

<div class="wrapper">

    @include('backend.partials.header')

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar-->
     @include('backend.partials.side_bar')
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">

            <!-- Main content -->
            @yield('content')
            <!-- /.content -->
        </div>
    </div>
    <!-- /.content-wrapper -->
{{--    @include('backend.partials.footer')--}}

    <!-- Control Sidebar -->
{{--    <aside class="control-sidebar">--}}

{{--        <div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger"><i class="ion ion-close text-white" data-toggle="control-sidebar"></i></span> </div>  <!-- Create the tabs -->--}}
{{--        <ul class="nav nav-tabs control-sidebar-tabs">--}}
{{--            <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab" class="active">Chat</a></li>--}}
{{--            <li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab">Todo</a></li>--}}
{{--        </ul>--}}
{{--        <!-- Tab panes -->--}}
{{--        <div class="tab-content">--}}
{{--            <!-- Home tab content -->--}}
{{--            <div class="tab-pane active" id="control-sidebar-home-tab">--}}
{{--                <div class="flexbox">--}}
{{--                    <a href="javascript:void(0)" class="text-grey"><i class="ti-minus"></i></a>--}}
{{--                    <p>Users</p>--}}
{{--                    <a href="javascript:void(0)" class="text-right text-grey"><i class="ti-plus"></i></a>--}}
{{--                </div>--}}
{{--                <div class="lookup lookup-sm lookup-right d-none d-lg-block">--}}
{{--                    <input type="text" name="s" placeholder="Search" class="w-p100">--}}
{{--                </div>--}}
{{--                <div class="media-list media-list-hover mt-20">--}}
{{--                    <div class="media py-10 px-0">--}}
{{--                        <a class="avatar avatar-lg status-success" href="#">--}}
{{--                            <img src="../images/avatar/1.jpg" alt="...">--}}
{{--                        </a>--}}
{{--                        <div class="media-body">--}}
{{--                            <p class="font-size-16">--}}
{{--                                <a class="hover-primary" href="#"><strong>Tyler</strong></a>--}}
{{--                            </p>--}}
{{--                            <p>Praesent tristique diam...</p>--}}
{{--                            <span>Just now</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="media py-10 px-0">--}}
{{--                        <a class="avatar avatar-lg status-danger" href="#">--}}
{{--                            <img src="../images/avatar/2.jpg" alt="...">--}}
{{--                        </a>--}}
{{--                        <div class="media-body">--}}
{{--                            <p class="font-size-16">--}}
{{--                                <a class="hover-primary" href="#"><strong>Luke</strong></a>--}}
{{--                            </p>--}}
{{--                            <p>Cras tempor diam ...</p>--}}
{{--                            <span>33 min ago</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="media py-10 px-0">--}}
{{--                        <a class="avatar avatar-lg status-warning" href="#">--}}
{{--                            <img src="../images/avatar/3.jpg" alt="...">--}}
{{--                        </a>--}}
{{--                        <div class="media-body">--}}
{{--                            <p class="font-size-16">--}}
{{--                                <a class="hover-primary" href="#"><strong>Evan</strong></a>--}}
{{--                            </p>--}}
{{--                            <p>In posuere tortor vel...</p>--}}
{{--                            <span>42 min ago</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="media py-10 px-0">--}}
{{--                        <a class="avatar avatar-lg status-primary" href="#">--}}
{{--                            <img src="../images/avatar/4.jpg" alt="...">--}}
{{--                        </a>--}}
{{--                        <div class="media-body">--}}
{{--                            <p class="font-size-16">--}}
{{--                                <a class="hover-primary" href="#"><strong>Evan</strong></a>--}}
{{--                            </p>--}}
{{--                            <p>In posuere tortor vel...</p>--}}
{{--                            <span>42 min ago</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="media py-10 px-0">--}}
{{--                        <a class="avatar avatar-lg status-success" href="#">--}}
{{--                            <img src="../images/avatar/1.jpg" alt="...">--}}
{{--                        </a>--}}
{{--                        <div class="media-body">--}}
{{--                            <p class="font-size-16">--}}
{{--                                <a class="hover-primary" href="#"><strong>Tyler</strong></a>--}}
{{--                            </p>--}}
{{--                            <p>Praesent tristique diam...</p>--}}
{{--                            <span>Just now</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="media py-10 px-0">--}}
{{--                        <a class="avatar avatar-lg status-danger" href="#">--}}
{{--                            <img src="../images/avatar/2.jpg" alt="...">--}}
{{--                        </a>--}}
{{--                        <div class="media-body">--}}
{{--                            <p class="font-size-16">--}}
{{--                                <a class="hover-primary" href="#"><strong>Luke</strong></a>--}}
{{--                            </p>--}}
{{--                            <p>Cras tempor diam ...</p>--}}
{{--                            <span>33 min ago</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="media py-10 px-0">--}}
{{--                        <a class="avatar avatar-lg status-warning" href="#">--}}
{{--                            <img src="../images/avatar/3.jpg" alt="...">--}}
{{--                        </a>--}}
{{--                        <div class="media-body">--}}
{{--                            <p class="font-size-16">--}}
{{--                                <a class="hover-primary" href="#"><strong>Evan</strong></a>--}}
{{--                            </p>--}}
{{--                            <p>In posuere tortor vel...</p>--}}
{{--                            <span>42 min ago</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="media py-10 px-0">--}}
{{--                        <a class="avatar avatar-lg status-primary" href="#">--}}
{{--                            <img src="../images/avatar/4.jpg" alt="...">--}}
{{--                        </a>--}}
{{--                        <div class="media-body">--}}
{{--                            <p class="font-size-16">--}}
{{--                                <a class="hover-primary" href="#"><strong>Evan</strong></a>--}}
{{--                            </p>--}}
{{--                            <p>In posuere tortor vel...</p>--}}
{{--                            <span>42 min ago</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}

{{--            </div>--}}
{{--            <!-- /.tab-pane -->--}}
{{--            <!-- Settings tab content -->--}}
{{--            <div class="tab-pane" id="control-sidebar-settings-tab">--}}
{{--                <div class="flexbox">--}}
{{--                    <a href="javascript:void(0)" class="text-grey"><i class="ti-minus"></i></a>--}}
{{--                    <p>Todo List</p>--}}
{{--                    <a href="javascript:void(0)" class="text-right text-grey"><i class="ti-plus"></i></a>--}}
{{--                </div>--}}
{{--                <ul class="todo-list mt-20">--}}
{{--                    <li class="py-15 px-5 by-1">--}}
{{--                        <!-- checkbox -->--}}
{{--                        <input type="checkbox" id="basic_checkbox_1" class="filled-in">--}}
{{--                        <label for="basic_checkbox_1" class="mb-0 h-15"></label>--}}
{{--                        <!-- todo text -->--}}
{{--                        <span class="text-line">Nulla vitae purus</span>--}}
{{--                        <!-- Emphasis label -->--}}
{{--                        <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>--}}
{{--                        <!-- General tools such as edit or delete-->--}}
{{--                        <div class="tools">--}}
{{--                            <i class="fa fa-edit"></i>--}}
{{--                            <i class="fa fa-trash-o"></i>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li class="py-15 px-5">--}}
{{--                        <!-- checkbox -->--}}
{{--                        <input type="checkbox" id="basic_checkbox_2" class="filled-in">--}}
{{--                        <label for="basic_checkbox_2" class="mb-0 h-15"></label>--}}
{{--                        <span class="text-line">Phasellus interdum</span>--}}
{{--                        <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>--}}
{{--                        <div class="tools">--}}
{{--                            <i class="fa fa-edit"></i>--}}
{{--                            <i class="fa fa-trash-o"></i>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li class="py-15 px-5 by-1">--}}
{{--                        <!-- checkbox -->--}}
{{--                        <input type="checkbox" id="basic_checkbox_3" class="filled-in">--}}
{{--                        <label for="basic_checkbox_3" class="mb-0 h-15"></label>--}}
{{--                        <span class="text-line">Quisque sodales</span>--}}
{{--                        <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>--}}
{{--                        <div class="tools">--}}
{{--                            <i class="fa fa-edit"></i>--}}
{{--                            <i class="fa fa-trash-o"></i>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li class="py-15 px-5">--}}
{{--                        <!-- checkbox -->--}}
{{--                        <input type="checkbox" id="basic_checkbox_4" class="filled-in">--}}
{{--                        <label for="basic_checkbox_4" class="mb-0 h-15"></label>--}}
{{--                        <span class="text-line">Proin nec mi porta</span>--}}
{{--                        <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>--}}
{{--                        <div class="tools">--}}
{{--                            <i class="fa fa-edit"></i>--}}
{{--                            <i class="fa fa-trash-o"></i>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li class="py-15 px-5 by-1">--}}
{{--                        <!-- checkbox -->--}}
{{--                        <input type="checkbox" id="basic_checkbox_5" class="filled-in">--}}
{{--                        <label for="basic_checkbox_5" class="mb-0 h-15"></label>--}}
{{--                        <span class="text-line">Maecenas scelerisque</span>--}}
{{--                        <small class="badge bg-primary"><i class="fa fa-clock-o"></i> 1 week</small>--}}
{{--                        <div class="tools">--}}
{{--                            <i class="fa fa-edit"></i>--}}
{{--                            <i class="fa fa-trash-o"></i>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li class="py-15 px-5">--}}
{{--                        <!-- checkbox -->--}}
{{--                        <input type="checkbox" id="basic_checkbox_6" class="filled-in">--}}
{{--                        <label for="basic_checkbox_6" class="mb-0 h-15"></label>--}}
{{--                        <span class="text-line">Vivamus nec orci</span>--}}
{{--                        <small class="badge bg-info"><i class="fa fa-clock-o"></i> 1 month</small>--}}
{{--                        <div class="tools">--}}
{{--                            <i class="fa fa-edit"></i>--}}
{{--                            <i class="fa fa-trash-o"></i>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li class="py-15 px-5 by-1">--}}
{{--                        <!-- checkbox -->--}}
{{--                        <input type="checkbox" id="basic_checkbox_7" class="filled-in">--}}
{{--                        <label for="basic_checkbox_7" class="mb-0 h-15"></label>--}}
{{--                        <!-- todo text -->--}}
{{--                        <span class="text-line">Nulla vitae purus</span>--}}
{{--                        <!-- Emphasis label -->--}}
{{--                        <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>--}}
{{--                        <!-- General tools such as edit or delete-->--}}
{{--                        <div class="tools">--}}
{{--                            <i class="fa fa-edit"></i>--}}
{{--                            <i class="fa fa-trash-o"></i>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li class="py-15 px-5">--}}
{{--                        <!-- checkbox -->--}}
{{--                        <input type="checkbox" id="basic_checkbox_8" class="filled-in">--}}
{{--                        <label for="basic_checkbox_8" class="mb-0 h-15"></label>--}}
{{--                        <span class="text-line">Phasellus interdum</span>--}}
{{--                        <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>--}}
{{--                        <div class="tools">--}}
{{--                            <i class="fa fa-edit"></i>--}}
{{--                            <i class="fa fa-trash-o"></i>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li class="py-15 px-5 by-1">--}}
{{--                        <!-- checkbox -->--}}
{{--                        <input type="checkbox" id="basic_checkbox_9" class="filled-in">--}}
{{--                        <label for="basic_checkbox_9" class="mb-0 h-15"></label>--}}
{{--                        <span class="text-line">Quisque sodales</span>--}}
{{--                        <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>--}}
{{--                        <div class="tools">--}}
{{--                            <i class="fa fa-edit"></i>--}}
{{--                            <i class="fa fa-trash-o"></i>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li class="py-15 px-5">--}}
{{--                        <!-- checkbox -->--}}
{{--                        <input type="checkbox" id="basic_checkbox_10" class="filled-in">--}}
{{--                        <label for="basic_checkbox_10" class="mb-0 h-15"></label>--}}
{{--                        <span class="text-line">Proin nec mi porta</span>--}}
{{--                        <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>--}}
{{--                        <div class="tools">--}}
{{--                            <i class="fa fa-edit"></i>--}}
{{--                            <i class="fa fa-trash-o"></i>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <!-- /.tab-pane -->--}}
{{--        </div>--}}
{{--    </aside>--}}
    <!-- /.control-sidebar -->

    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg "></div>

</div>
<!-- ./wrapper -->

@include('sweetalert::alert')
<!-- Vendor JS -->
<script src="{{asset('backend_theme/main-dark/js/vendors.min.js')}}"></script>
<script src="{{asset('backend_theme/assets/icons/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('backend_theme/assets/vendor_components/easypiechart/dist/jquery.easypiechart.js')}}"></script>
<script src="{{asset('backend_theme/assets/vendor_components/apexcharts-bundle/irregular-data-series.js')}}"></script>
<script src="{{asset('backend_theme/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js')}}"></script>
<script src="{{asset('backend_theme/assets/vendor_components/datatable/datatables.min.js')}}"></script>
<script src="{{asset('backend_theme/main-dark/js/pages/data-table.js')}}"></script>
<script src="{{asset('backend_theme/assets/vendor_components/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('backend_theme/assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js')}}"></script>
<script src="{{asset('backend_theme/main-dark/js/pages/editor.js')}}"></script>

<!-- Sunny Admin App -->
<script src="{{asset('backend_theme/main-dark/js/template.js')}}"></script>
<script src="{{asset('backend_theme/main-dark/js/pages/dashboard.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
    function loadingBtn(element) {
        if (element.tagName.toLowerCase() == "button") {
            event.target.form.submit();
            element.disabled = true;
            element.innerHTML = '<span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span> Loading...';
            element.setAttribute('type', 'button');
        } else if (element.tagName.toLowerCase() == "a") {
            element.disabled = true;
            element.innerHTML = '<span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span> Loading...';
        } else if (element.tagName.toLowerCase() == "input") {
            element.disabled = true;
            element.value = 'Loading...';
            event.target.form.submit();
        }
    }

</script>

<script>
    @if (Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}"
    switch (type) {
        case 'info':

            toastr.options.timeOut = 10000;
            toastr.info("{{ Session::get('message') }}");
            // var audio = new Audio('audio.mp3');
            // audio.play();
            break;
        case 'success':

            toastr.options.timeOut = 10000;
            toastr.success("{{ Session::get('message') }}");
            // var audio = new Audio('audio.mp3');
            // audio.play();

            break;
        case 'warning':

            toastr.options.timeOut = 10000;
            toastr.warning("{{ Session::get('message') }}");
            // var audio = new Audio('audio.mp3');
            // audio.play();

            break;
        case 'error':

            toastr.options.timeOut = 10000;
            toastr.error("{{ Session::get('message') }}");
            // var audio = new Audio('audio.mp3');
            // audio.play();

            break;
    }
    @endif
</script>

</body>
</html>