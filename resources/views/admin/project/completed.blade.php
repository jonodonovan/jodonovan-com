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
                            <span style="text-transform:uppercase;font-size:24px;">{{$project->name}} | completed tasks</span>
                        </div>
                    </div>
                </div>

                <div class="panel-body">

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th data-sorted="true" data-direction="DESC">Due</th>
                                <th data-sorted="true">Pri.</th>
                                <th data-sorted="true">Name</th>
                                <th data-sorted="true" data-breakpoints="xs">Tag</th>
                                <th data-sorted="true" data-breakpoints="xs">Updated</th>
                                <th data-sorted="true" data-breakpoints="xs">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach ($project->completedTasks as $task)
                            <tr>
                                <td>{{Carbon\Carbon::parse($task->due_date)->format('Ymd')}}</td>
                                <td>{{$task->priority}}</td>
                                <td><a href="#" data-toggle="modal" data-target="#{{$task->id}}">{{$task->name}}</a></td>
                                <td>{{$task->tag->name}}</td>
                                <td>{{Carbon\Carbon::parse($task->updated_at)->format('Ymd')}}</td>
                                <td>
                                    <a href="{{route('projects.tasks.edit', [$project->slug, $task->slug])}}">Edit</a>
                                </td>
                            </tr>

                            <!-- Task Modal -->
                            <div class="modal fade" id="{{$task->id}}" tabindex="-1" role="dialog" aria-labelledby="taskModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="taskModalLabel">
                                                <span class="label @if ($task->priority == 1) label-danger @elseif ($task->priority == 2) label-warning @else label-default @endif>">{{$task->priority}}</span>
                                                <span class="label label-success">{{$task->ticket_number}}</span>
                                                <span style="text-transform:uppercase;font-weight:bold;">{{$task->name}}</span><br>
                                                <small>Due {{Carbon\Carbon::parse($task->due_date)->format('Ymd')}}</small>
                                            </h4>
                                        </div>
                                        <div class="modal-body">
                                            {!!Markdown::convertToHtml($task->description)!!}
                                        </div>
                                        <div class="modal-footer">
                                            <a href="{{route('projects.tasks.edit', [$project->slug, $task->slug])}}">Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Task Modal -->
                        @endforeach

                        </tbody>
                    </table>
                    <a href="{{url('projects/'.$project->slug)}}" class="btn btn-default">Open</a>
                    <a href="{{url('projects/'.$project->slug.'/deleted')}}" class="btn btn-default">Deleted</a>
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
                    "limit": 5,
                    "countFormat": "Showing {PF}-{PL} of {TR} results"
                }
            });
        });
    </script>
@endsection
