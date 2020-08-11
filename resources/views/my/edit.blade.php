@extends('layouts.admin')

@section('content')
    <nav class="nav nav-tabs nav-stacked">

        <a class="nav-link" href="{{ route('admin.setting') }}">
            <i class="fa fa-home" aria-hidden="true"></i>
        </a>

        <a class="nav-link active" href="#">我的资料</a>

    </nav>

    <form action="{{ route('admin.my.update') }}" method="post">
        @csrf
        @method("PUT")

        <div class="card mt-3">
            <div class="card-header">
                基本资料
            </div>
            <div class="card-body">
                <div class="col-12 col-sm-6">
                    <x-form title="昵称" name="name" required value="{{ user('name') }}"></x-form>
                    <x-form title="邮箱" name="email" value="{{ user('email') }}"></x-form>
                    <x-form title="QQ号码" name="qq" value="{{ user('qq') }}"></x-form>
                    <x-form title="手机号" name="mobile" value="{{ user('mobile') }}"></x-form>
                    <x-form title="github" name="github" value="{{ user('github') }}"></x-form>
                    <x-form title="微博" name="weibo" value="{{ user('weibo') }}"></x-form>
                </div>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-header">
                密码
            </div>
            <div class="card-body">
                <div class="col-12 col-sm-6">
                    <x-form type="password" title="密码" name="password"></x-form>
                    <x-form type="password" title="确认密码" name="password_confirmation"></x-form>
                </div>
            </div>
        </div>
        <button class="btn-primary btn mt-3">保存</button>
    </form>

@endsection
