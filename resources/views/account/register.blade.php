@extends('layouts.account')
@section('title','会员注册')
@section('content')
    <form action="{{route('login.store')}}" method="post">
        @csrf

        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <div class="card shadow">
                    <div class="card-header">
                        会员注册
                    </div>
                    <div class="card-body">
                        <x-input title="帐号" name="account" placeholder="请输入邮箱或手机号"></x-input>
                        <x-input title="密码" name="password" placeholder="请输入登录密码"></x-input>
                        <x-input title="确认密码" name="password_conformation" placeholder="请输入确认密码"></x-input>
                        <x-input type="captcha" title="图形验证码" name="password" placeholder="请输入图形验证码"></x-input>
                    </div>
                    <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                        <button class="btn btn-success">注册</button>
                        <div>
                            <a href="{{route('login.index')}}">登录</a> |

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </form>
@endsection
