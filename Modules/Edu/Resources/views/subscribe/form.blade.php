<div class="card mt-3">
    <div class="card-header">
        套餐资料
    </div>
    <div class="card-body">
        <x-form title="套餐标题" name="title" value="{{$subscribe['title']}}"></x-form>
        <x-form title="图标" name="icon" value="{{$subscribe['icon']}}"></x-form>
        <small class="mb-3 d-block">请访问 <a href="https://fontawesome.com/icons?d=gallery">https://fontawesome.com/icons?d=gallery</a> 获取图标</small>
        <x-form title="价格" name="price" value="{{$subscribe['price']}}"></x-form>
        <x-form title="套餐月数" name="month" value="{{$subscribe['month']}}"></x-form>
        <x-form title="套餐介绍" name="ad" value="{{$subscribe['ad']}}"></x-form>

    </div>
</div>
<button class="btn btn-primary mt-3">保存</button>
