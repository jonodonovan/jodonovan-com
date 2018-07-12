@extends('layouts.admin')

@section('body_style') margin-top:20px;background-color:#212121; @endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span style="text-transform:uppercase;font-size:24px;">Editing {{$project->name}}</span>
                        @include('partials.alerts')
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="{{route('projects.update', $project->slug)}}">
                        {{method_field('PATCH')}}
                        {{csrf_field()}}
                            <div class="form-group">
                                <label for="name" class="control-label">Project Name</label>
                                <input id="name" type="text" class="form-control" name="name" value="{{$project->name or old('name')}}" autofocus>
                            </div>
                        </form>
                    </div>
                    <div class="panel-footer text-right">
                        <div class="form-group">
                            <a href="{{url('projects')}}" class="btn btn-default">Cancel</a>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
