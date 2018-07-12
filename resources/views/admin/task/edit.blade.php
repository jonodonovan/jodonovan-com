@extends('layouts.admin')

@section('body_style') margin-top:20px;background-color:#212121; @endsection

@section('content')
    @if ($project->project_type == '1')
        @include('admin.task._task')
    @else
        @include('admin.task._blog')
    @endif
@endsection
