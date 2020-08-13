@extends('layouts.admin')
@section('content')
    @include('role.nav')
    <table class="table table-bordered mt-3 shadow-sm">
        <thead>
        <tr>
            <th width="80">编号</th>
            <th>角色名称</th>
            <th>角色标识</th>
            <th width="180">操作</th>
        </tr>
        </thead>
        <tbody>
        @foreach($site->roles as $role)
            <tr>
                <td>
                    {{ $role['id'] }}
                </td>
                <td> {{ $role['title'] }}</td>
                <td> {{ $role['name'] }}</td>
                <td>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                        <a href="{{ route("site.role.edit",[$site,$role]) }}" class="btn btn-info">编辑</a>
                        <a href="/" class="btn btn-primary">设置权限</a>



                        <btn-del action="{{ route('site.role.destroy',[$site,$role]) }}"></btn-del>

                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
