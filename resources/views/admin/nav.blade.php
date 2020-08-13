<nav class="nav nav-tabs nav-stacked">

    <a class="nav-link" href="{{ route('admin') }}">
        <i class="fa fa-home" aria-hidden="true"></i>
    </a>

    <a class="nav-link {{ active_class(if_route('site.admin.index')) }}" href="{{ route('site.site.index') }}">管理员列表</a>



</nav>
