@inject('moduleService','App\Services\ModuleService')
@inject('permissionService','App\Services\PermissionService')

@foreach($moduleService->find(module()['name'])['menus'] as $index=>$menu)
    @if($permissionService->menuGroupAccess(site(),module(),$menu))
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo{{$index}}"
           aria-expanded="true" aria-controls="collapseTwo{{$index}}">
            <i class="{{$menu['icon']??'fas fa-check-square'}}"></i>
            <span>{{$menu['title']}}</span>
        </a>
        <div id="collapseTwo{{$index}}" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                @foreach($menu['items'] as $item)
{{--                    @can(permission_name($item['permission'],site(),module()))--}}
                    @if(access($item['permission'],false))
                        <a class="collapse-item" href="{{$item['route']??'#'}}">{{$item['title']}}</a>
                    @endif
{{--                    @endcan--}}

                @endforeach
            </div>
        </div>
    </li>
    @endif

@endforeach

