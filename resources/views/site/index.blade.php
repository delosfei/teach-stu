@extends('layouts.admin')

@section('content')
    <div>
        <a href="{{route('site.site.create')}}" class="btn btn-info mb-3">
            <i class="fa fa-plus" aria-hidden="true"></i> 添加网站
        </a>
        @if (user()->isSuperAdmin)
            <span class="text-secondary">
            <i class="fa fa-info-circle" aria-hidden="true"></i> 您是超级管理员
        </span>
        @endif

        @foreach ($sites as $site)
            <div class="card mb-3 shadow-sm">
                <div class="card-header d-flex justify-content-between">
                    <div>
                        套餐:
                        @foreach($site->user->group->packages as $package)
                            <span class="badge badge-info">{{$package['title']}}</span>
                        @endforeach
                    </div>
                    <a href="{{route('site.module.index',$site)}}">
                        <i class="fa fa-cog" aria-hidden="true"></i> 应用扩展
                    </a>
                </div>
                <div class="card-body">
                    <i class="fa fa-rss fa-3x mr-3" aria-hidden="true"></i>
                    <span class="h3">{{$site->title}}</span>
                </div>
                <div class="card-footer text-muted d-flex flex-column flex-sm-row justify-content-between ">
                    <div class="small mb-2">
                        #{{$site->id}}
                        创建时间: {{$site->created_at}} 站长: {{$site->user->name}} 所属组: {{$site->user->group->title}}
                        默认模块：{{$site->module->title??''}}
                    </div>
                    <div class="small">
                        @if($site['domain'])
                            <a href="{{$site['domain']}}" target="_blank" class="text-muted mr-2"><i
                                    aria-hidden="true"
                                    class="fa fa-home"></i>
                                访问首页
                            </a>
                        @endif
                        @can('update', $site)
                            <a href="/site/1/config" class="text-muted mr-2"><i aria-hidden="true"
                                                                                class="fa fa-check-circle-o"></i>
                                网站配置
                            </a>

                            <a href="" class="text-muted mr-2"><i class="fa fa-comment-o"></i>
                                微信公众号
                            </a>

                            <a href="{{route('site.admin.index',$site)}}" class="text-muted mr-2"><i
                                    class="fa fa-user-circle-o"></i>
                                操作员设置
                            </a>

                            <a href="{{route('site.role.index',$site)}}" class="text-muted mr-2">
                                <i class="fa fa-user-secret" aria-hidden="true">角色管理</i>
                            </a>
                            <a href="{{route('site.site.edit',$site)}}" class="text-muted mr-2"><i
                                    class="fa fa-pencil-square-o"></i>
                                编辑
                            </a>
                            <btn-del action="{{route('site.site.destroy',$site)}}" class-name="text-muted">
                                <i class="fa fa-trash" aria-hidden="true"> 删除</i>
                            </btn-del>
                        @endcan
                    </div>
                </div>
            </div>
        @endforeach


    </div>
@endsection
