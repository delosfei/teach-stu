<div class="card mt-3">
    <div class="card-header">
        组资料
    </div>
    <div class="card-body">
        <div class="col-12 col-sm-6">
            <x-form title="会员组名称" required name="title" value="{{ $group['title'] }}"></x-form>
            <x-form title="站点数量" type="number" required name="site_nums" value="{{ $group['site_nums'] }}">
            </x-form>
            <x-form title="会员天数" type="number" required name="days" value="{{ $group['days'] }}"></x-form>
        </div>
    </div>
</div>
<div class="card mt-3">
    <div class="card-header">
        可用套餐
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
            <tr>
                <th width="80"></th>
                <th width="80">编号</th>
                <th width="200">套餐名称</th>
                <th>包含模块</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($packages as $package)
                <tr>
                    <td>
                        <input type="checkbox" name="packages[]" value="{{ $package['id'] }}"
                            {{ $group->packages->contains($package)?'checked':'' }}>
                    </td>
                    <td>{{ $package['id'] }}</td>
                    <td>{{ $package['title'] }}</td>
                    <td>
                        @foreach ($package->modules as $module)
                            <span class="badge badge-info mr-2">
                            {{ $module['title'] }}
                        </span>
                        @endforeach
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<button class="btn btn-primary mt-3">保存</button>
