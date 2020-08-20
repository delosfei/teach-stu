@extends('layouts.admin')

@section('content')

    <nav class="nav nav-tabs nav-stacked">

        <a class="nav-link" href="{{ route('admin.setting') }}">
            <i class="fa fa-home" aria-hidden="true"></i>
        </a>

        <a class="nav-link active" href="#">系统配置</a>

    </nav>
    <form action="{{ route('admin.config.update') }}" method="post">
        @csrf
        @method('PUT')

        <div class="card mt-3">
            <div class="card-header">
                系统配置
            </div>
            <div class="card-body">
                <x-form title="网站名称" name="title" required value="{{ config('admin.title') }}"></x-form>

                <x-form theme="image" title="网站标志" name="logo" action="{{ route('admin.config.upload') }}"
                        value="{{ config('admin.logo') }}"></x-form>

                <x-form theme="textarea" title="网站名称" name="copyright" required>
                    {{ config('admin.copyright') }}
                </x-form>
            </div>
        </div>

        <button class="btn btn-primary mt-3">保存</button>
    </form>
@endsection
