@extends('layouts.admin')

@section('content')
    @include('package.nav')

    <form action="{{ route('admin.package.update',$package) }}" method="post">
        @csrf
        @method('PUT')
        <div class="card mt-3">
            <div class="card-header">
                套餐资料
            </div>
            <div class="card-body">
                <x-form title="套餐名称" required name="title" class="col-12 col-md-6" value="{{ $package->title }}"></x-form>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-header">
                可用模块
            </div>
            <div class="card-body">
                <module-select></module-select>
            </div>
        </div>
        <button class="btn btn-primary mt-3">保存</button>
    </form>

@endsection

@push('js')
    <script>
        window.modules = @json($modules);
        window.selected = @json($package->modules->pluck('id'))
    </script>
@endpush
