<div class="quick-menu d-flex justify-content-between align-items-center m-3 pt-5">
    <div class="logo">
        <a href="{{ route('admin') }}"><img src="/images/logo.png"></a>
    </div>
    <div class="menus d-flex">
        <a href="{{ route('admin') }}"
           class="d-flex flex-column bg-white shadow rounded  align-items-center justify-content-center ml-3">
            <i class="fa fa-sitemap fa-2x" aria-hidden="true"></i>
            <span>网站管理</span>
        </a>
        <a href="/"
           class="d-flex flex-column bg-white shadow rounded  align-items-center justify-content-center ml-3">
            <i class="fa fa-support fa-2x" aria-hidden="true"></i>
            <span>系统设置 </span>
        </a>
        <a href="/"
           class="d-flex flex-column bg-white shadow rounded  align-items-center justify-content-center ml-3">
            <i class="fa fa-sign-out fa-2x" aria-hidden="true"></i>
            <span>退出</span>
        </a>
    </div>
</div>