<nav class="nav nav-tabs nav-stacked">

    <a class="nav-link" href="{{ route('admin') }}">
        <i class="fa fa-home" aria-hidden="true"></i>
    </a>

    <a class="nav-link {{ active_class(if_route('site.site.index')) }}" href="{{ route('site.site.index') }}">站点列表</a>

    <a class="nav-link {{ active_class(if_route('site.site.create')) }}" href="{{ route('site.site.create') }}">添加站点</a>

    @if( active_class(if_route('site.site.edit') ))
        <a class="nav-link active" href="#">编辑站点</a>
    @endif
</nav>
