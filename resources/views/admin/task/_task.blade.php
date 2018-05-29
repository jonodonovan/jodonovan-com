@section('style')
    <link rel="stylesheet" href="/vendor/simplemde.min.css">
    <link rel="stylesheet" href="/vendor/flatpickr.min.css">
@endsection

@section('script_header')
    <script src="/vendor/flatpickr.js"></script>
@endsection

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{url('projects/'.$project->slug)}}" class="label label-" style="color:black;"><- back</a></span>
                    <div class="row">
                        <div class="col-md-8">
                            <span style="text-transform:uppercase;font-size:24px;">{{$task->name}}</span>
                        </div>
                        <div class="col-md-4">
                            @include('partials.alerts')
                        </div>
                    </div>

                </div>
                <div class="panel-body">
                    <form method="POST" action="{{route('projects.tasks.update', [$project->slug, $task->slug])}}">
                    {{method_field('PATCH')}}
                    {{csrf_field()}}
                    <input type="hidden" name="project_id" id="project_id" value="{{$project->slug}}">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group {{$errors->has('Name') ? ' has-error' : ''}}">
                                    <label for="name">Name</label>
                                    <input id="name" type="text" class="form-control" name="name" value="{{$task->name or old('name')}}"   autofocus>
                                </div>
                                <div class="form-group {{$errors->has('Requestor') ? ' has-error' : ''}}">
                                    <label for="requestor">Requestor</label>
                                    <input list="requestorlist" id="requestor" type="text" class="form-control" name="requestor" value="{{$task->requestor or old('requestor')}}">
                                    <datalist id="requestorlist">
                                        @foreach ($tasklists->unique('requestor') as $tasklist)
                                            <option value="{{$tasklist->requestor}}">{{$tasklist->requestor}}</option>
                                        @endforeach
                                    </datalist>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group {{$errors->has('Slug') ? ' has-error' : ''}}">
                                    <div class="form-group">
                                        <label for="exampleSelect2">Slug</label>
                                        <input id="slug" type="text" class="form-control" name="slug" value="{{$task->slug or old('slug')}}"  required>
                                    </div>
                                </div>
                                <div class="form-group {{$errors->has('Tag') ? ' has-error' : ''}}">
                                    <label for="tag">Tag</label>
                                    <input list="taglist" id="tag" type="text" class="form-control" name="tag" value="{{$task->tag or old('tag')}}"  required>
                                    <datalist id="taglist">
                                        @foreach ($tasklists->unique('tag') as $taglist)
                                            <option value="{{$taglist->tag}}">{{$taglist->tag}}</option>
                                        @endforeach
                                    </datalist>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group {{$errors->has('description') ? ' has-error' : ''}}">
                                    <label for="description">Description</label>
                                    <textarea rows="10" id="description" class="form-control" name="description">{{$task->description or old('description')}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row  m-b-40">
                            <div class="col-md-6">
                                <div class="form-group {{$errors->has('Priority') ? ' has-error' : ''}}">
                                    <label for="priority">Priority</label>
                                    <input id="priority" type="text" class="form-control" name="priority" value="{{$task->priority or old('priority')}}">
                                </div>
                                <div class="form-group {{$errors->has('Ticket_Number') ? ' has-error' : ''}}">
                                    <label for="ticket_number">Ticket Number</label>
                                    <input id="ticket_number" type="text" class="form-control" name="ticket_number" value="{{$task->ticket_number or old('ticket_number')}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="due_date">Due Date</label>
                                    <input id="due_date" type="text" class="form-control" name="due_date" value="{{$task->due_date or old('due_date')}}">
                                </div>
                                @if ($task->tag == "Reoccurring")
                                    <div class="form-group">

                                    </div>
                                @else
                                    <div class="form-group">
                                        <label for="completed_date">Completed Date</label>
                                        <input id="completed_date" type="text" class="form-control" name="completed_date" value="{{$task->completed_date or old('completed_date')}}">
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="#" data-toggle="modal" data-target="#{{$task->id}}" class="btn btn-default">Delete</a>
                                <a href="{{url('projects/'.$project->slug)}}" class="btn btn-default">All Tasks</a>
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="{{$task->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Please confirm</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete <b>{{$task->name}}</b> task?</p>
            </div>
            <div class="modal-footer">

                <form method="POST" action="{{route('projects.tasks.destroy', [$project->slug, $task->slug])}}">
                {{method_field('DELETE')}}
                {{csrf_field()}}
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

@section('script_footer')
    <script type="text/javascript">
        flatpickr("#due_date", {
            altInput: true,
            enableTime: false,
            dateFormat: 'Y-m-d'
        });
        flatpickr("#completed_date", {
            altInput: true,
            enableTime: false,
            dateFormat: 'Y-m-d'
        });
    </script>

    <script src="/vendor/simplemde.min.js"></script>
    <script>
        var simplemde = new SimpleMDE({
            indentWithTabs: false,
            toolbar: ["bold", "italic", "heading", "strikethrough", "|", "quote", "unordered-list", "ordered-list", "|", "link", "image", "|", "preview", {
                name: "code",
                action: SimpleMDE.toggleCodeBlock,
                className: "fa fa-code",
                title: "Code",
            }],
        });
    </script>
@endsection
