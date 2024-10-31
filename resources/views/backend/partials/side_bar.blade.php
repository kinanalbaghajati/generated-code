@php
    $prefix = Request::route()->getPrefix();
    $route = Request::route()->getName();
@endphp

<section class="sidebar">

    <div class="user-profile">
        <div class="ulogo">
            <a href="#">
                <!-- logo for regular state and mobile devices -->
                <div class="d-flex align-items-center justify-content-center px-4 py-2 ">
                    <img class="rounded" src="{{asset('backend_theme/logo.jpg')}}" alt="">
                </div>
            </a>
        </div>
    </div>

    <!-- sidebar menu-->
    <ul class="sidebar-menu" data-widget="tree">
        @can('roles_tab')
        <li @if($route == 'dashboard') class="active" @endif>
            <a href="{{url('/')}}">
                <i data-feather="pie-chart"></i>
                <span>Dashboard</span>
            </a>
        </li>
        @endcan

        @can('admin_tab')
        <li class="treeview @if($prefix == 'admins') active menu-open @endif">
            <a href="#">
                <i class="fa fa-user-o" style="font-size: 18px"></i>
                <span>Accountants</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                {{--                <li @if($route == 'create.admin') class="active" @endif><a href="{{route('create.admin')}}"><i class="ti-more"></i>Chat</a></li>--}}
                {{--                <li><a href="calendar.html"><i class="ti-more"></i>Calendar</a></li>--}}
                <li @if($route == 'admins.index') class="active" @endif><a href="{{route('admins.index')}}"><i
                            class="ti-more"></i>all Accountants</a></li>
                {{--                <li><a href="calendar.html"><i class="ti-more"></i>Calendar</a></li>--}}
            </ul>
        </li>
        @endcan
        @can('roles_tab')
            <li class="treeview @if($prefix == 'roles') active menu-open @endif">
                <a href="#">
                    <i class="fa fa-cog" style="font-size: 18px"></i> <span>roles</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li @if($route == 'role.index') class="active" @endif ><a href="{{route('role.index')}}"><i
                                class="ti-more"></i>all Roles</a></li>
                </ul>
            </li>
        @endcan
        <li class="header nav-small-cap">Receipts page</li>
        <li class="treeview @if($prefix == 'receipts') active menu-open @endif">
            <a href="#">
                <i data-feather="file"></i>
                <span>Receipts</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu ">
                @can('invoices_all')
                    <li @if($route == 'invoice.index') class="active" @endif><a href="{{route('invoice.index')}}"><i class="ti-more"></i>All Receipts</a></li>
                @endcan
                @can('invoices_add')
                    <li @if($route == 'invoice.create') class="active" @endif><a href="{{route('invoice.create')}}"><i class="ti-more"></i>Add Receipt</a></li>
                @endcan
            </ul>
        </li>

    </ul>
</section>


{{--<li>--}}
{{--    <a href="javascript: void(0);" class="has-arrow waves-effect {{ ($prefix == '/manage-employee')?'mm-active':'' }}">--}}
{{--        <i class="ri-user-heart-line"></i>--}}
{{--        <span>Manage Employee</span>--}}
{{--    </a>--}}
{{--    <ul class="sub-menu" aria-expanded="false">--}}
{{--        <li><a href="{{route('index.employees')}}" class="{{ ($route == 'index.employees')?'active':'' }}">Employees</a></li>--}}
{{--        <li><a href="{{route('create.employee')}}" class="{{ ($route == 'create.employee')?'active':'' }}">Create Employee</a></li>--}}
{{--    </ul>--}}
{{--</li>--}}
