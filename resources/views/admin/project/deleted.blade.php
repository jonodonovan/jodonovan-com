@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="/css/footable.bootstrap.min.css">
@endsection

@section('body_style') margin-top:20px;background-color:#212121; @endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{url('projects/'.$project->slug)}}" class="label label-" style="color:black;"><- back</a></span>
                    <div class="row">
                        <div class="col-md-12">
                            <span style="text-transform:uppercase;font-size:24px;">{{$project->name}} | deleted tasks</span>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th data-sorted="true">Due</th>
                                <th data-sorted="true">Pri.</th>
                                <th data-sorted="true">Name</th>
                                <th data-sorted="true" data-breakpoints="xs">Tag</th>
                                <th data-sorted="true" data-breakpoints="xs">Updated</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach ($tasks as $task)
                            <tr>
                                <td
                                    @if (Carbon\Carbon::parse($task->due_date)->isToday())
                                        style="font-weight:bold;background-color: #DCEDC8;"
                                    @elseif (Carbon\Carbon::parse($task->due_date)->isPast())
                                        style="color:white;font-weight:bold;background-color: #E57373;"
                                    @endif
                                >{{Carbon\Carbon::parse($task->due_date)->format('Ymd')}}</td>
                                <td>{{$task->priority}}</td>
                                <td>{{$task->name}}</td>

                                @isset($task->tag)
                                    <td>{{$task->tag->name}}</td>
                                @else
                                    <td>{{$task->old_tag}}</td>
                                @endisset

                                <td>{{Carbon\Carbon::parse($task->updated_at)->format('Ymd')}}</td>
                            </tr>
                            @include('admin.task._modal_viewTask')
                        @endforeach

                        </tbody>
                    </table>
                    <a href="{{url('projects/'.$project->slug)}}" class="btn btn-default">Open</a>
                    <a href="{{url('projects/'.$project->slug.'/completed')}}" class="btn btn-default">Completed</a>
                </div>
            </div>
        </div>
    </div>
</div>

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
                    "limit": 5
                }
            });
        });
    </script>
@endsection
