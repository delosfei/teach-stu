@extends('edu::layouts.front')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-12 col-md-9">
                <div class="bg-white rounded shadow-sm border border-gary shadow-sm p-md-5 p-3">
                    <div class="border-bottom mb-5 pb-3">
                        <h5 class="pb-1 pt-3 mb-3 text-monospace text-black-50">
                            {{ $topic['title'] }}
                        </h5>
                        <div class="small text-secondary clearfix">
                            <div class="float-left pt-2">
                                <a href="/edu/center/topic/18907" class="text-success">
                                    {{ $topic->user->name }}
                                </a>
                                创建于 {{ $topic->created_at->diffForHumans() }}
                                <span class="pr-2 pl-2">/</span>
                                评论数 {{ $topic->comment_count }}
                                <span class="pr-2 pl-2">/</span>
                                更新于 {{ $topic->updated_at->diffForHumans() }}
                                <span class="pr-2 pl-2">/</span>
                                收藏数 {{ $topic->favorite_count }}
                                <span class="pr-2 pl-2">/</span>
                                点赞数 {{ $topic->favour_count }}
                            </div>
                            <div class="float-right">
                                <div class="btn-group btn-group-sm">
{{--                                    @if (is_admin())--}}
{{--                                        <a href="" class="btn btn-outline-info">--}}
{{--                                            推荐--}}
{{--                                        </a>--}}
{{--                                    @endif--}}
                                    @can('update',$topic)
                                        <a href="{{ route('edu.front.topic.edit',$topic) }}"
                                           class="btn btn-outline-success">编辑</a>
                                    @endcan
                                </div>
                                <div class="btn-group btn-group-sm align-items-center mt-1 mt-md-0">
{{--                                    <a href="{{ route('common.favorite',['Topic',$topic['id']]) }}" class="btn--}}
{{--                                {{ $topic->isFavorite?'btn-info':'btn-outline-secondary' }}">--}}
{{--                                        <i aria-hidden="true" class="fa fa-heart-o"></i> 收藏--}}
{{--                                    </a>--}}

                                    <button type="button" class="btn btn-outline-secondary">
                                        {{ $topic->favorite_count }}
                                    </button>
                                    @can('update',$topic)
                                        <form action="{{ route('edu.front.topic.destroy',$topic) }}" method="post"
                                              class="d-inline-block ml-1">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-sm btn-outline-secondary" onclick="return confirm('确定删除吗')">
                                                删除
                                            </button>
                                        </form>
                                    @endcan
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="topic-content markdown bg-white text-monospace markdown">
                        {!! $topic['html'] !!}
                    </div>
                    <div>
                        <div class="mt-5 text-center border-top border-gary pt-5">
                            <div role="group" aria-label="First group" class="favour btn-group mr-2">
{{--                                <a href="{{ route('common.favour',['Topic',$topic['id']]) }}"--}}
{{--                                   class="btn {{ $topic->isFavour?'btn-success':'btn-outline-secondary' }}">--}}
{{--                                    <i class=" fa fa-thumbs-o-up"></i> 点个赞呗--}}
{{--                                </a>--}}
                                <button type="button"
                                        class="btn {{ $topic->isFavour?'btn-outline-success':'btn-outline-secondary' }}">
                                    {{ $topic->favour_count }}
                                </button>
                            </div>
                        </div>
                        <div class="favour-list text-center pt-3 w-75 m-auto">
                            <a href="#" class="m-1 d-inline-block">
{{--                                @foreach ($topic->favours as $user)--}}
{{--                                    <img src="{{ $user->icon }}" class="rounded-circle avatar35">--}}
{{--                                @endforeach--}}

                            </a>
                        </div>
                    </div>
                </div>

                <div id="app" class="mt-3">
                    <comment model="Topic" id="{{ $topic['id'] }}"></comment>
                </div>
            </div>
            <div class="col-12 col-md-3 p-0">
                @include('edu::layouts.user',['user'=>$topic->user])
                @include('edu::layouts.tips')
            </div>
        </div>
    </div>
@endsection
