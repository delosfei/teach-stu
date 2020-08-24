<div class="container mt-5 mb-5">
    <div class="card">
        <div class="card-header bg-white">
            贴子管理
        </div>
        <div class="card-body">
            <x-form title="贴子标题" required name="title" value="{{ $topic['title'] }}"></x-form>
            <div>
                @foreach ($tags as $tag)
                    <label class="d-inline-block mr-1">
                        <input type="checkbox" name="tags[]" value="{{ $tag['id'] }}"
                            {{ $topic->tags->contains($tag)?'checked':'' }}> {{ $tag['title'] }}
                    </label>
                @endforeach
            </div>

            <div id="app">
                <editor name="content" :content="content"></editor>
            </div>
        </div>
        <div class="card-footer text-muted  bg-white">
            <button class="btn btn-primary">保存</button>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        window.vue={
            data:{
                content:@json($topic->content)
            }
        }
    </script>
@endpush
