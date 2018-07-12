@extends('layouts.admin')

@section('body_style') margin-top:20px;background-color:#212121; @endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <form method="POST" action="{{route('projects.tags.update', [$project, $tag->slug])}}">
                    {{method_field('PATCH')}}
                    {{csrf_field()}}
                    <div class="panel-heading">
                        <span style="text-transform:uppercase;font-size:24px;">Editing {{$tag->name}}</span>
                        @include('partials.alerts')
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="name" class="control-label">Tag Name</label>
                            <input id="name" type="text" class="form-control" name="name" value="{{$tag->name or old('name')}}" autofocus>
                        </div>
                    </div>
                    <div class="panel-footer text-right">
                        <div class="form-group">
                            <a href="{{url('projects/'.$project)}}" class="btn btn-default">Cancel</a>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
