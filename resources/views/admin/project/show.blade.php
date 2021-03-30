@extends('layouts.admin')

@section('title')
    @if ($project->project_type == '1')
        {{ $project->name }} Project
    @else
        Blog Admin
    @endif

@endsection

@section('style')
    <link rel="stylesheet" href="/css/footable.bootstrap.min.css">
@endsection

@section('body_style') margin-top:20px;background-color:#212121; @endsection

@section('content')
    @if ($project->project_type == '1')
        @include('admin.project._task')
    @else
        @include('admin.project._blog')
    @endif
@endsection

@section('script_footer')
    <script src="/js/footable.min.js"></script>

    <script type="text/javascript">
        jQuery(function($){
            $('.table').footable({
                "sorting": {
                    "enabled": true
                },
                "filtering": {
                    "enabled": true
                },
                "paging": {
                    "enabled": true,
                    "size": 10,
                    "limit": 10,
                    "countFormat": "Showing {PF}-{PL} of {TR} results"
                }
            });
        });
    </script>
@endsection
