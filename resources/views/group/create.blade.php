@extends('layouts.admin')
@section('content')
    @include('package.nav')
    <form action="{{route('admin.group.store')}}" method="post">
        @csrf
        @include('group.form')
    </form>
@endsection

