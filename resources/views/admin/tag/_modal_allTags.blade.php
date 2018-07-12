<div class="modal fade" id="allTagsModel" tabindex="-1" role="dialog" aria-labelledby="allTagsModelLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="allTagsModelLabel">All Tags</h4>
            </div>
            <div class="modal-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @isset($tags)
                            @foreach ($tags as $tag)
                                <tr>
                                    <td>{{$tag->name}}</td>
                                    <td><a href="{{route('projects.tags.edit', [$project->slug, $tag->slug])}}">Edit</a></td>
                                </tr>
                            @endforeach
                        @endisset
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
