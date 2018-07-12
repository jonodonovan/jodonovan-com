<div class="modal fade" id="tagModel" tabindex="-1" role="dialog" aria-labelledby="tagModelLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" action="{{route('projects.tags.store', $project->slug)}}">
            {{csrf_field()}}
            <input type="hidden" name="project_id" id="project_id" value="{{$project->id}}">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="tagModelLabel">Create New Tag</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="tagname" class="control-label">Tag Name</label>
                            <input id="tagname" type="text" class="form-control" name="name" value="{{old('name')}}" required>
                        </div>
                    </div>
                    @if ($project->project_type == 1)
                    <div class="col-md-4">
                        <div class="form-group {{$errors->has('use_duedate') ? ' has-error' : ''}}">
                            <label for="use_duedate" class="control-label" style="color:black;">Use Due Date?</label>
                            <select class="form-control" id="use_duedate" name="use_duedate">
                                <option value="1">True</option>
                                <option value="0">False</option>
                            </select>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Create Tag</button>
            </div>
            </form>
        </div>
    </div>
</div>
