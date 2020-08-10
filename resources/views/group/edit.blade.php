@extends('layouts.admin')
@section('content')
    @include('package.nav')
    <form action="{{route('admin.group.update',$group)}}" method="post">
        @csrf
        @method('PUT')
        @include('group.form')
    </form>
@endsection


