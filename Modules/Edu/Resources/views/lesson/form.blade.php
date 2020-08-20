<div class="card mt-3">
    <div class="card-header">
        基本资料
    </div>
    <div class="card-body">
        <x-form title="标题" name="title" require value="{{ $lesson['title'] }}"></x-form>

        <div class="mt-2 mb-2">
            @foreach ($tags as $tag)
                <label class="mr-2">
                    <input type="checkbox" name="tags[]" value="{{ $tag['id'] }}"
                        {{ $lesson->tags->contains($tag) ?'checked':""}}>
                    {{ $tag['title'] }}
                </label>
            @endforeach
        </div>

        <x-form theme="textarea" title="视频介绍" name="description" require>{{ $lesson['description'] }}</x-form>

        <x-form theme="image" title="网站标志" name="thumb" action="{{ route('common.upload') }}"
                value="{{ $lesson['thumb'] }}"></x-form>

        <div class="form-group">
            <label>上架</label>
            <input type="checkbox" name="status" {{ $lesson['status']?'checked':'' }}>
        </div>

        <x-form title="视频下载地址" name="download_address" require value="{{ $lesson['download_address'] }}"></x-form>
        <x-form type="number" title="免费观看数量" name="free_num" require value="{{ $lesson['free_num'] }}"></x-form>
    </div>
</div>

<lesson-videos></lesson-videos>
<button class="btn btn-primary mt-3">保存</button>

@push('scripts')
    <script>
        window.videos = @json($lesson->videos);
    </script>
@endpush
