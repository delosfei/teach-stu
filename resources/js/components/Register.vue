<template>
    <div>
        <verification-code :form="form"></verification-code>

        <div class="form-group">
            <label for="password">密码</label>
            <input type="text"
                   class="form-control" id="password"
                   placeholder="请输入密码" v-model="form.password">
            <!--            <small id="helpId" class="form-text text-danger">{{ $message }}</small>-->
        </div>

        <div class="form-group">
            <label for="password_confirmation">确认密码</label>
            <input type="text"
                   class="form-control" id="password_confirmation"
                   placeholder="请输入确认密码" v-model="form.password_confirmation">
            <!--            <small id="helpId" class="form-text text-danger">{{ $message }}</small>-->
        </div>

    </div>
</template>
<script>
import VerificationCode from "./VerificationCode";

export default {
    components: {VerificationCode},
    data() {
        return {
            form: {
                code: "",
                account: "abc",
                captcha: ""
            }
        };
    },
    methods: {
        sendCode() {
            alert(3);
        }
    }
}
</script>
