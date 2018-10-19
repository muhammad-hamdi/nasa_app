<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
    <li class="header">@lang('dashboard.sidebar.main')</li>
    <li class="{{ css_route_active('dashboard.home') }}">
        <a href="{{ route('dashboard.home') }}">
            <i class="fa fa-home"></i>
            <span>@lang('dashboard.home')</span>
        </a>
    </li>
    {{--Admins--}}
    <li class="treeview {{ css_resource_active('dashboard.admins') }}">
        <a href="#">
            <i class="fa fa-users"></i> <span>{{  trans('admins.plural') }}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="{{ css_resource_active('dashboard.admins') }}">
                <a href="{{ route('dashboard.admins.index') }}">
                    <i class="fa fa-arrow-right"></i>
                    {{  trans('general.list') }}
                </a>
            </li>
            <li class="{{ css_route_active('dashboard.admins.create') }}">
                <a href="{{ route('dashboard.admins.create') }}">
                    <i class="fa fa-arrow-right"></i>
                    {{  trans('general.add') }}
                </a>
            </li>
        </ul>
    </li>

    {{--Disasters--}}
    <li class="treeview {{ css_resource_active('dashboard.disasters') }}">
        <a href="#">
            <i class="fa fa-users"></i> <span>{{  trans('disasters.plural') }}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="{{ css_resource_active('dashboard.disasters') }}">
                <a href="{{ route('dashboard.disasters.index') }}">
                    <i class="fa fa-arrow-right"></i>
                    {{  trans('general.list') }}
                </a>
            </li>
            <li class="{{ css_route_active('dashboard.disasters.create') }}">
                <a href="{{ route('dashboard.disasters.create') }}">
                    <i class="fa fa-arrow-right"></i>
                    {{  trans('general.add') }}
                </a>
            </li>
        </ul>
    </li>

    {{--List Template--}}
    <li class="treeview {{ css_resource_active('dashboard.list_templates') }}">
        <a href="#">
            <i class="fa fa-users"></i> <span>{{  trans('list_templates.plural') }}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="{{ css_resource_active('dashboard.list_templates') }}">
                <a href="{{ route('dashboard.list_templates.index') }}">
                    <i class="fa fa-arrow-right"></i>
                    {{  trans('general.list') }}
                </a>
            </li>
            <li class="{{ css_route_active('dashboard.list_templates.create') }}">
                <a href="{{ route('dashboard.list_templates.create') }}">
                    <i class="fa fa-arrow-right"></i>
                    {{  trans('general.add') }}
                </a>
            </li>
        </ul>
    </li>

    {{--Tutorials--}}
    <li class="treeview {{ css_resource_active('dashboard.tutorials') }}">
        <a href="#">
            <i class="fa fa-users"></i> <span>{{  trans('tutorials.plural') }}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="{{ css_resource_active('dashboard.tutorials') }}">
                <a href="{{ route('dashboard.tutorials.index') }}">
                    <i class="fa fa-arrow-right"></i>
                    {{  trans('general.list') }}
                </a>
            </li>
            <li class="{{ css_route_active('dashboard.tutorials.create') }}">
                <a href="{{ route('dashboard.tutorials.create') }}">
                    <i class="fa fa-arrow-right"></i>
                    {{  trans('general.add') }}
                </a>
            </li>
        </ul>
    </li>

    {{--Settings--}}
    <li class="{{ css_route_active('dashboard.settings.index') }}">
        <a href="{{ route('dashboard.settings.index') }}">
            <i class="fa fa-cogs"></i>
            <span>@lang('settings.plural')</span>
        </a>
    </li>

</ul>
