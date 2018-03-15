@extends('layouts.app')

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
                        <div class="col-md-9">
                            <span style="text-transform:uppercase;font-size:24px;">{{$project->name}}</span>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped" data-filter-container="#filter-form-container">
                        <thead>
                            <tr>
                                <th data-sorted="true">Due</th>
                                <th data-sorted="true">Pri.</th>
                                <th data-sorted="true">Name</th>
                                <th data-sorted="true" data-breakpoints="xs">Tag</th>
                                <th data-sorted="true" data-breakpoints="xs">Updated</th>
                                <th data-sorted="true" data-breakpoints="xs">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach ($project->tasks as $task)
                            <tr>
                                <td
                                    @if (Carbon\Carbon::parse($task->due_date)->isToday())
                                        style="font-weight:bold;background-color: #DCEDC8;"
                                    @elseif (Carbon\Carbon::parse($task->due_date)->isPast())
                                        style="color:white;font-weight:bold;background-color: #E57373;"
                                    @endif
                                >{{Carbon\Carbon::parse($task->due_date)->format('Ymd')}}</td>
                                <td>{{$task->priority}}</td>
                                <td><a href="#" data-toggle="modal" data-target="#{{$task->id}}">{{$task->name}}</a></td>
                                <td>{{$task->tag}}</td>
                                <td>{{Carbon\Carbon::parse($task->updated_at)->format('Ymd')}}</td>
                                <td>
                                    <a href="{{route('projects.tasks.edit', [$project->slug, $task->slug])}}">Edit</a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
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
                    "size": 200,
                    "limit": 200,
                    "countFormat": "Showing {PF}-{PL} of {TR} results"
                }
            });
        });
    </script>
@endsection
