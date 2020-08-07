<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            @if (0)
                <li class="nav-item mr-3">
                    <a class="nav-link" href="/">
                        <i class="fa fa-reply" aria-hidden="true"></i> 继续管理{{ session('module')['title'] }}模块
                    </a>
                </li>
            @endif

            <li class="nav-item mr-3">
                <a class="nav-link" href="/">
                    <i class="fa fa fa-sitemap" aria-hidden="true"></i> 站点管理
                </a>
            </li>
            <li class="nav-item mr-3">
                <a class="nav-link" href="/"> <i class="fa fa-cubes"
                                                 aria-hidden="true"></i> 模块管理</a>
            </li>
            <li class="nav-item mr-3">
                <a class="nav-link" href="/">
                    <i class="fa fa-comments-o" aria-hidden="true"></i> 系统设置</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    会员组
                </a>
            </li>

        </ul>
        <div class="dropdown form-inline my-2 my-lg-0">
            <div class="text-white dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                 aria-haspopup="true" aria-expanded="false">
                {{user('name')}}
            </div>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">会员中心</a>
                <a class="dropdown-item" href="/">修改密码</a>
                <a class="dropdown-item" href="/">退出登录</a>
            </div>
        </div>
    </div>
</nav>
