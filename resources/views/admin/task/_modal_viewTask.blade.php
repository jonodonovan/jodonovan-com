<div class="modal fade" id="{{$task->id}}" tabindex="-1" role="dialog" aria-labelledby="taskModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="taskModalLabel">
                    <span class="label @if ($task->priority == 1) label-danger @elseif ($task->priority == 2) label-warning @else label-default @endif>">{{$task->priority}}</span>
                    <span class="label label-success">{{$task->ticket_number}}</span>
                    <span style="text-transform:uppercase;font-weight:bold;">{{$task->name}}</span><br>
                    <small><i class="fa fa-calendar" aria-hidden="true"></i> {{Carbon\Carbon::parse($task->due_date)->format('Ymd')}}</small>

                </h4>
            </div>
            <div class="modal-body">
                {!!Markdown::convertToHtml($task->description)!!}
            </div>
            <div class="modal-footer">
                <div class="pull-left">
                    <small><i class="fa fa-user" aria-hidden="true"></i> {{$task->requestor}}</small>
                </div>
                <div>
                    <a href="{{route('projects.tasks.edit', [$project->slug, $task->slug])}}">Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>
