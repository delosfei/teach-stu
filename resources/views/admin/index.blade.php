@extends('layouts.admin')

@section('content')
    @include('admin.nav')



    <table class="table mt-3 table-striped">
        <thead>
        <tr>
            <th>编号</th>
            <th>昵称</th>
            <th>邮箱</th>
            <th>手机号</th>
            <th width="160"></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($site->admins as $admin)
            <tr>
                <td class="align-middle">{{ $admin['id'] }}</td>
                <td class="align-middle">
                    <img src="{{ $admin->avatar }}" class="rounded-circle w35">
                    {{ $admin['name'] }}
                </td>
                <td class="align-middle">{{ $admin['email'] }}</td>
                <td class="align-middle">{{ $admin['mobile'] }}</td>
                <td class="align-middle text-right pr-2">
                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                        <a href="/" class="btn btn-info">设置角色</a>
                        <btn-del action="{{route('site.admin.destroy',[$site,$admin])}}">删除</btn-del>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <user-search action="{{route('site.admin.search',$site)}}" v-slot="{user}" title="添加管理员">
            <div class="btn-group btn-group-sm" role="group">

                <a :href="'/site/{{$site['id']}}/admin/add/' + user.id" class="btn btn-info">设为管理员</a>
            </div>
    </user-search>

@endsection

@push('scripts')
    <script>
        // window.vue = {
        //     data() {
        //         return {
        //             dialogVisible: false
        //         };
        //     }
        // };
    </script>
@endpush
