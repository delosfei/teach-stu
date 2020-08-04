<template>
    <div class="card shadow">
        <div class="card-header">
            会员注册
        </div>
        <div class="card-body">
            <div>
                <div class="form-group">
                    <label>手机号/邮箱</label>
                    <input type="text"
                           class="form-control" name="account"
                           placeholder="请输入手机号或邮箱" value="请输入手机号或邮箱" v-model="account">
                    <!--            <small id="helpId" class="form-text text-danger">{{ $message }}</small>-->
                </div>

                <div class="form-group">
                    <label for="code">验证码</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="code" id="code" placeholder="请填写收到的验证码"
                               v-model="code">
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2">发送验证码</span>
                        </div>

                    </div>
                </div>

                <div class="form-group">
                    <label for="captcha">图形验证码</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="captcha" id="captcha"
                               placeholder="请输入图形验证码">
                        <div class="input-group-append" style="cursor:pointer">
                            <img src="/captcha/" class="border rounded-right">
                        </div>
                    </div>
                    <!--            <small id="helpId" class="form-text text-danger">{{$message}}</small>-->

                </div>
            </div>

        </div>
        <div class="card-footer text-muted d-flex justify-content-between align-items-center">
            <button class="btn btn-success">注册</button>
            <div>
                <a href="/login">登录</a> |
                <a href="">找回密码</a>
            </div>
        </div>
    </div>
</template>
<script>
import VerificationCode from "./VerificationCode";

export default {
    data() {
        return {
            account: '',
            code: '',
            captcha: '',
            password: '',
            password_confirmed: ''
        }
    }

}
</script>
