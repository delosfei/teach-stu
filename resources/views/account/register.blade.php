@extends('layouts.account')
@section('title','会员注册')
@section('content')



    <form action="{{route('register.store')}}" method="post">
        @csrf
        <div class="card shadow">
            <div class="card-header">
                会员注册
            </div>
            <div class="card-body">
                <register></register>
            </div>
            <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                <button class="btn btn-success">注册</button>
                <div>
                    <a href="{{route('login.index')}}">登录</a> |
                    <a href="">找回密码</a>
                </div>
            </div>
        </div>
    </form>
@endsection
