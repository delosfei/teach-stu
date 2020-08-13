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
                        <btn-del action="/">删除</btn-del>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <el-dialog
        title="提示"
        :visible.sync="dialogVisible"
        width="30%"
        :before-close="handleClose">
        <span>这是一段信息</span>
        <span slot="footer" class="dialog-footer">
    <el-button @click="dialogVisible = false">取 消</el-button>
    <el-button type="primary" @click="dialogVisible = false">确 定</el-button>
  </span>
    </el-dialog>
    <button class="btn btn-info mt-3" @click="dialogVisible=true">添加管理员</button>


@endsection

@push('scripts')
    <script>
        window.vue = {
            data() {
                return {
                    dialogVisible: false
                };
            },
            methods: {
                handleClose(done) {
                    this.$confirm('确认关闭？')
                        .then(_ => {
                            done();
                        })
                        .catch(_ => {});
                }
            }
        };
    </script>
@endpush
