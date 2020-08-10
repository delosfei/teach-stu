@extends('layouts.admin')
@section('content')
    @include('group.nav')

    <table class="table table-bordered mt-3 shadow-sm">
        <thead>
        <tr>
            <th width="80">编号</th>
            <th width="300">用户组名称</th>
            <th width="300">包含套餐</th>
            <th>包含模块</th>
            <th width="150">操作</th>
        </tr>
        </thead>
        <tbody>
        @foreach($groups as $group)
            <tr>
                <td>
                    {{ $group['id'] }}
                </td>
                <td> {{ $group['title'] }}</td>
                <td>
                    @foreach($group->packages as $package)
                        <span class="badge badge-success">{{ $package['title'] }}</span>
                    @endforeach
                </td>
                <td>
                    @foreach($group->modules as $module)
                        <span class="badge badge-success">{{ $module['title'] }}</span>
                    @endforeach
                </td>
                <td>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                        <a href="{{ route("admin.group.edit",$group) }}" class="btn btn-info">编辑</a>
                        @if($group['id']>1)
                            <btn-del action="{{ route('admin.group.destroy',$group) }}"></btn-del>
                        @endif
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
