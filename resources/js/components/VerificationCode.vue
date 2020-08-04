<template>
    <div>
        <div class="form-group">
            <label for="account">帐号</label>
            <input type="text"
                   class="form-control" name="account" id="account"
                   placeholder="请输入手机号或邮箱" value="请输入手机号或邮箱" v-model="form.account">
            <!--            <small id="helpId" class="form-text text-danger">{{ $message }}</small>-->
        </div>

        <div class="form-group">
            <label for="code">验证码</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="code" id="code" placeholder="请填写收到的验证码"  v-model="form.code">
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
                    <img src="/captcha/" class="border rounded-right"
                         onclick="this.src='/captcha?_'+Math.random()">
                </div>
            </div>
            <!--            <small id="helpId" class="form-text text-danger">{{$message}}</small>-->
        </div>

    </div>
</template>

<script>
export default {
    props: {
        form: {required: true, type: Object}

    },
    data(){
        return{};
    }


};
</script>

<style scoped>

</style>
