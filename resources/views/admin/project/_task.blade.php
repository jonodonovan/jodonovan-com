<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{url('projects')}}" class="label label-" style="color:black;"><- back</a></span>
                    <div class="row">
                        <div class="col-md-9">
                            <a href="{{url('projects/'.$project->slug)}}"><span style="color:black;text-transform:uppercase;font-size:24px;">{{$project->name}}</span></a>
                        </div>
                        <div class="col-md-3 pull-right">
                            @include('partials.alerts')
                        </div>
                    </div>
                    <div class="row">
                        <form method="POST" action="{{route('projects.tasks.store', $project->slug)}}">
                        {{csrf_field()}}
                        <input type="hidden" name="project_id" id="project_id" value="{{$project->id}}">
                            <div class="col-md-2">
                                <select class="form-control" id="tag" name="tag">
                                    @foreach ($tags as $tag)
                                        <option value="{{$tag->name}}">{{$tag->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control" name="name" value="{{old('name')}}"  required autofocus placeholder="Task Name">
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-default">Create Task</button>
                            </div>
                        </form>
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
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#" data-toggle="modal" data-target="#tagModel" class="btn btn-default">Add Tag</a>
                            <a href="{{url('projects/'.$project->slug.'/deleted')}}" class="btn btn-default">Deleted</a>
                            <a href="{{url('projects/'.$project->slug.'/completed')}}" class="btn btn-default">Completed</a>
                            <a href="{{url('projects/'.$project->slug.'/all')}}" class="btn btn-default">All</a>
                        </div>
                        <div id="filter-form-container" class="col-md-6"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tag Modal -->
<div class="modal fade" id="tagModel" tabindex="-1" role="dialog" aria-labelledby="tagModelLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="tagModelLabel">Create New Tag</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('projects.tags.store', $project->slug)}}">
                {{csrf_field()}}
                <input type="hidden" name="project_id" id="project_id" value="{{$project->id}}">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="tagname" class="control-label">Tag Name</label>
                                <input id="tagname" type="text" class="form-control" name="name" value="{{old('name')}}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Create Tag</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
<!-- End Tag Modal -->
