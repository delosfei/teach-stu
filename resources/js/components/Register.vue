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
                           class="form-control is-invalid" name="account"
                           placeholder="请输入手机号或邮箱" v-model="account">
                    <strong class="invalid-feedback">ssd</strong>

                </div>

                <div class="form-group captcha">
                    <label for="captcha">图形验证码</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="captcha" id="captcha"
                               placeholder="请输入图形验证码">
                        <div class="input-group-append" @click="updateCaptcha">
                            <img :src="captchaImage" class="border rounded-right">
                        </div>
                    </div>

                </div>

                <div class="form-group">
                    <label for="code">验证码</label>
                    <div class="input-group mb-3 captcha">
                        <input type="text" class="form-control" name="code" id="code" placeholder="请填写收到的验证码"
                               v-model="code">
                        <div class="input-group-append" @click="sendCode">
                            <span class="input-group-text" id="basic-addon2">发送验证码</span>
                        </div>

                    </div>
                </div>

            </div>
            <el-divider><i class="el-icon-mobile-phone"></i></el-divider>

            <div class="form-group">
                <label for="">密码</label>
                <input type="text"
                       class="form-control" v-model="password" placeholder="请输入密码"/>


            </div>
            <div class="form-group">
                <label for="">确认密码</label>
                <input type="text"
                       class="form-control" v-model="password_confirmation" placeholder="请输入确认密码"/>
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

export default {
    data() {
        return {
            account: '',
            code: '',
            captcha: '',
            captchaImage: '/captcha',
            password: '',
            password_confirmation: ''
        }
    },
    methods: {
        updateCaptcha() {
            this.captchaImage = '/captcha?' + Math.random()
        },
        sendCode(){
           this.axios.post('/register/code').then(r=>{
               console.log(r)
           })
        }
    }

}
</script>
<style lang="scss" scoped>
.captcha {
    .input-group-append {
        cursor: pointer;
    }
}
</style>
