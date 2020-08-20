<div class="card mt-3">
    <div class="card-header">
课程资料
    </div>
    <div class="card-body">
        <x-form name="title" required title="课程标题"></x-form>
        <x-form theme="textarea" name="description" required title="课程介绍"></x-form>
        <x-form theme="image" title="预览图" name="preview" action="{{ route('common.upload') }}"
                value="{{$system['preview'] }}"></x-form>

    </div>
</div>
<lesson-list class="mt-3"></lesson-list>
