@extends('edu::layouts.front')
@section('content')

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-12 col-md-9 mb-3">
                <div class="card shadow-sm">
                    <div class="card-header bg-white justify-content-between">话题讨论</div>
                    <div class="card-body pb-0 pt-2">
                        <form method="https://www.houdunren.com/Edu/topic">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" name="w">
                                <div class="input-group-append">
                                    <button href="https://www.houdunren.com/Edu/topic"
                                            class="btn btn-outline-secondary">搜索
                                    </button>
                                    <a href="https://www.houdunren.com/Edu/topic/create"
                                       class="btn btn-outline-secondary">发表</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        @foreach($topics as $topic)
                            @include('edu::layouts.topic')
                        @endforeach
                    </div>
                    <div class="card-footer">
                        @include('edu::layouts.paginate',['data'=>$topics])
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card rounded shadow-sm mb-2">
                    <div class="card-header bg-white text-muted">
                        <i aria-hidden="true" class="fa fa-check-circle-o mr-1"></i>
                        社区小贴
                    </div>
                    <div class="card-body font-weight-light">后盾人是一个主张友好、分享、自由的技术交流社区。</div>
                    <div class="card-footer text-muted bg-white text-center">
                        <div class="d-flex justify-content-between">
                            <a href="https://www.houdunren.com/Edu/topic/create"
                               class="btn btn-outline-success btn-sm flex-fill">
                                <i class="fa fa-pencil-square-o"></i> 发贴交流
                            </a>
                            <a href="https://www.houdunren.com/Edu/sign"
                               class="btn btn-outline-danger btn-sm flex-fill ml-2">
                                <i aria-hidden="true" class="fa fa-flag"></i>
                                签到打卡
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


