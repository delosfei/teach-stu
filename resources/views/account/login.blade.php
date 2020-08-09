@extends('layouts.account')
@section('title','会员登录')
@section('content')



    <form action="{{route('login.store')}}" method="post">
        @csrf
        <div class="card shadow">
            <div class="card-header">
                会员登录
            </div>
            <div class="card-body">
                <x-form title="帐号" name="account" placeholder="请输入邮箱或手机号"></x-form>
                <x-form type="password" title="密码" name="password" placeholder="请输入登录密码"></x-form>
                <x-form theme="captcha" title="图形验证码" name="password" placeholder="请输入图形验证码"></x-form>

                <label for="remember">
                    <input type="checkbox" name="remember"> 记住我
                </label>
            </div>
            <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                <button class="btn btn-success">登录</button>
                <div>
                    <a href="{{route('register')}}">注册</a> |
                    <a href="">找回密码</a>
                </div>
            </div>
        </div>
    </form>


@endsection
