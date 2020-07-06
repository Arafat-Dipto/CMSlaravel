<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ url('/admin/dashboard') }}">CMS Admin</a>
    </div>

    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

    <ul class="nav navbar-nav navbar-left navbar-top-links">
        <li><a href="{{ url('/') }}"><i class="fa fa-home fa-fw"></i> Website</a></li>
    </ul>

    <ul class="nav navbar-right navbar-top-links">

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> {{ \Illuminate\Support\Facades\Auth::user()->name }} <b class="caret"></b>
            </a>
            <ul class="dropdown-menu dropdown-user">

                <li class="divider"></li>
                <li><a href="{{ url('admin/logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                </span>
                    </div>
                    <!-- /input-group -->
                </li>
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="{{ url('/admin/post/create?type=Post') }}"><i class="fa fa-table fa-fw"></i>Create Post</a>
                </li>
                <li>
                    <a href="{{ url('/admin/post') }}"><i class="fa fa-table fa-fw"></i>Manage Posts</a>
                </li>
                <li>
                    <a href="{{ url('/admin/video') }}"><i class="fa fa-table fa-fw"></i>Manage Videos</a>
                </li>


            </ul>
        </div>
    </div>
</nav>