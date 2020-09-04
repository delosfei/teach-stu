@extends('edu::layouts.front')
@section('content')
    {{-- 视频播放 --}}
    <div class="video mb-2">
        <div class="container p-0 pl-md-3 pr-md-3">
            <div class="video">
                <video controls="">
                    <source
                        src="https://houdunren-video.oss-cn-hangzhou.aliyuncs.com/js/18DOM/1%20%E8%AF%BE%E5%A0%82%E4%BB%8B%E7%BB%8D%E4%B8%8E%E5%AD%A6%E4%B9%A0%E6%96%B9%E5%BC%8F_2020-5-31.mp4"
                        type="video/mp4">
                </video>
            </div>
        </div>
    </div>
    {{-- 视频播放END --}}
    <div class="container">
        <div class="card">
            <div class="card-body row">
                <div class="col-12 col-md-7"><h5 class="text-secondary"> {{$video->title}}</h5> <a
                        href="{{route('edu.front.lesson.show',$video->lesson)}}"
                        class="text-secondary font-weight-light"><i
                            aria-hidden="true" class="fa fa-folder-o"></i>
                        {{$video->lesson->title}}
                    </a></div>
                <div class="col-12 col-md-5 mt-2 mt-md-0 d-flex justify-content-md-end justify-content-start flex-wrap">
                    <div class="btn-group btn-group-sm align-items-center mr-1"><a
                            href="https://www.houdunren.com/Edu/video/13352" class="btn btn-outline-success">下集</a>
                    </div>
                    <div class="btn-group btn-group-sm align-items-center"><a
                            href="https://www.houdunren.com/common/favorite/Video/13351/Edu"
                            class="btn btn-outline-secondary"><i aria-hidden="true" class="fa fa-heart-o"></i> 收藏
                        </a>
                        <button type="button" class="btn btn-outline-secondary">
                            1
                        </button>
                        <a href="https://www.houdunren.com/common/favour/Video/13351/Edu"
                           class="btn btn-outline-secondary"><i aria-hidden="true" class="fa fa-thumbs-o-up"></i> 点赞
                        </a>
                        <button type="button" class="btn btn-outline-secondary">
                            1
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-5 mt-3">
        <div class="row">
            <div class="col-md-9 mt-2 mt-md-0 order-md-0 mb-3">
                <div>
                    <div class="comment">
                        <comment model="Video" id="{{ $video['id'] }}"></comment>
                        <div class="el-backtop" style="right: 40px; bottom: 40px;"><i class="el-icon-caret-top"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pl-md-0 order-0 order-md-1">
                <div class="card text-secondary">
                    <div class="card-header bg-white">课程列表</div>
                    <div class="list-group list-group-flush">
                        @foreach($video->lesson->videos as $video)
                            <a href="{{route('edu.front.video.show',$video)}}" class="list-group-item text-secondary">
                                {{$video->title}}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
