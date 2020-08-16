@inject('moduleService','App\Services\ModuleService')

@foreach($moduleService->find(module()['name'])['menus'] as $index=>$menu)
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo{{$index}}" aria-expanded="true" aria-controls="collapseTwo{{$index}}">
            <i class="{{$menu['icon']??'fas fa-check-square'}}"></i>
            <span>{{$menu['title']}}</span>
        </a>
        <div id="collapseTwo{{$index}}" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                @foreach($menu['items'] as $item)
                <a class="collapse-item" href="buttons.html">{{$item['title']}}</a>
                @endforeach
            </div>
        </div>
    </li>

@endforeach

