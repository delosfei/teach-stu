<div class="card mt-3">
    <div class="card-header">
        站点设置
    </div>
    <div class="card-body">
        <x-form name="title" required title="站点名称" value="{{$site['title']}}"></x-form>
        <x-form name="domain" required title="域名" value="{{$site['domain']}}"></x-form>

    </div>

</div>


<div class="card mt-3">
    <div class="card-header">
        默认模块
    </div>
    <div class="card-body">
        <div class="row">
            @foreach (user()->group->modules as $module)
                <div class="col-6 col-sm-2">
                    <div class="card">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <img src="{{ $module['preview'] }}" class="rounded-circle mb-3" style="width:55px"/>
                            <h6>{{ $module['title'] }}</h6>
                            <span class="text-secondary small text-center">
                            {{ $module['description'] }}
                        </span>
                        </div>
                        <div class="card-footer text-muted text-center">
                            <label>
                                <input type="radio" hidden name="module_id" value="{{ $module['id'] }}"
                                    {{ $module['id']===$site['module_id'] ?'checked':''}}>
                                <span class="btn btn-secondary btn-sm">设置为默认</span>
                            </label>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>


<button class="btn btn-primary mt-3">保存</button>


@push('styles')
    <style>
        input[name='module_id']:checked + span {
            background: #EA4A57;
        }
    </style>
@endpush
