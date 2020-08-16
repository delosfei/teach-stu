<template>
    <div class="card shadow">
        <div class="card-header">
            会员注册
        </div>
        <div class="card-body">
            <div>
                <div class="form-group">
                    <label>昵称</label>
                    <input type="text"
                           class="form-control" name="name"
                           placeholder="起个有个性的昵称" v-model="name" :class="{'is-invalid':errors.name}"
                           @focus="errors.name=''"/>
                    <strong class="invalid-feedback">{{ errors.name }}</strong>

                </div>
                <div class="form-group">
                    <label>手机号/邮箱</label>
                    <input type="text"
                           class="form-control" name="account"
                           placeholder="请输入手机号或邮箱" v-model="account" :class="{'is-invalid':errors.account}"
                           @focus="errors.account=''"/>
                    <strong class="invalid-feedback">{{ errors.account }}</strong>

                </div>

                <div class="form-group captcha">
                    <label for="captcha">图形验证码</label>
                    <div class="input-group">
                        <input type="text" class="form-control" v-model="captcha"
                               placeholder="请输入图形验证码" :class="{'is-invalid':errors.captcha}"
                               @focus="errors.captcha=''"/>
                        <div class="input-group-append" @click="updateCaptcha">
                            <img :src="captchaImage" class="border rounded-right">
                        </div>
                        <strong class="invalid-feedback">{{ errors.captcha }}</strong>

                    </div>

                </div>

                <div class="form-group">
                    <label for="code">验证码</label>
                    <div class="input-group mb-3 captcha">
                        <input type="text" class="form-control" name="code" id="code" placeholder="请填写收到的验证码"
                               v-model="code" :class="{'is-invalid':errors.code}" @focus="errors.code=''">
                        <div class="input-group-append" @click="sendCode">
                            <span class="input-group-text" id="basic-addon2">发送验证码</span>
                        </div>
                        <strong class="invalid-feedback">{{ errors.code }}</strong>
                    </div>
                </div>

            </div>
            <el-divider><i class="el-icon-mobile-phone"></i></el-divider>

            <div class="form-group">
                <label for="">密码</label>
                <input type="password"
                       class="form-control" v-model="password" placeholder="请输入密码" @focus="errors.password=''"/>


            </div>
            <div class="form-group">
                <label for="">确认密码</label>
                <input type="password"
                       class="form-control" v-model="password_confirmation" placeholder="请输入确认密码"
                       @focus="errors.password_confirmation=''"/>
            </div>

        </div>


        <div class="card-footer text-muted d-flex justify-content-between align-items-center">
            <button class="btn btn-success" @click="onSubmit">注册</button>
            <div>
                <a href="/login">登录</a> |
                <a href="">找回密码</a>
            </div>
        </div>
    </div>
</template>
<script>
import {mapState} from 'vuex'

export default {
    data() {
        return {
            name: '',
            account: '',
            code: '',
            captcha: '',
            captchaImage: '/captcha',
            password: '',
            password_confirmation: ''
        }
    },
    computed: {
        ...mapState(['errors'])
    },
    methods: {
        updateCaptcha() {
            this.captchaImage = '/captcha?' + Math.random()
        },
        async sendCode() {
            let {data} = await this.axios.post('/register/code', this.$data)
            this.updateCaptcha();
        },

        async onSubmit() {
            await this.axios.post('register', this.$data)
            location.href = '/'
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
