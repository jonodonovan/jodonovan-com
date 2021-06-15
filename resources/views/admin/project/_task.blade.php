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
                                    @isset($tags)
                                        @foreach ($tags as $tag)
                                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                                        @endforeach
                                    @endisset
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
                                <th>Due</th>
                                <th>Pri.</th>
                                <th>Name</th>
                                <th data-breakpoints="xs">Tag</th>
                                <th data-breakpoints="xs">Updated</th>
                                <th data-breakpoints="xs">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach ($tasks as $task)

                            <tr>
                                @isset($task->tag)
                                    @if ($task->tag->use_duedate)
                                        <td
                                            @if (Carbon\Carbon::parse($task->due_date)->isToday())
                                                style="background-color: #DCEDC8;"
                                            @elseif (Carbon\Carbon::parse($task->due_date)->isPast())
                                                style="color:white;background-color: #E57373;"
                                            @endif
                                        >{{Carbon\Carbon::parse($task->due_date)->format('Ymd')}}</td>
                                    @else
                                        <td></td>
                                    @endif
                                @else
                                    <td></td>
                                @endisset
                                <td>{{$task->priority}}</td>
                                <td><a href="#" data-toggle="modal" data-target="#{{$task->id}}">{{$task->name}}</a></td>
                                <td>
                                    @isset($task->tag)
                                        {{$task->tag->name}}
                                    @endisset
                                </td>
                                <td>{{Carbon\Carbon::parse($task->updated_at)->format('Ymd')}}</td>
                                <td>
                                    <a href="{{route('projects.tasks.edit', [$project->slug, $task->slug])}}">Edit</a>
                                </td>
                            </tr>

                            @include('admin.task._modal_viewTask')
                        @endforeach

                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#" data-toggle="modal" data-target="#tagModel" class="btn btn-default">Add Tag</a>
                            <a href="#" data-toggle="modal" data-target="#allTagsModel" class="btn btn-default">All Tags</a>
                            <a href="{{url('projects/'.$project->slug.'/deleted')}}" class="btn btn-default">Deleted Tasks</a>
                            <a href="{{url('projects/'.$project->slug.'/completed')}}" class="btn btn-default">Completed Tasks</a>
                            <a href="{{url('projects/'.$project->slug.'/all')}}" class="btn btn-default">All Tasks</a>
                        </div>
                        <div id="filter-form-container" class="col-md-6"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.tag._modal_createTag')
@include('admin.tag._modal_allTags')
