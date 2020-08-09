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
    @error('captcha')
    <small id="helpId" class="form-text text-danger">{{$message}}</small>
    @enderror
</div>
