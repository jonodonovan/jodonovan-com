@extends('layouts.admin')

@section('body_style') margin-top:20px;background-color:#212121; @endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Create a new Project</h1>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            @include('partials.alerts')
                        </div>
                    </div>

                    <form method="POST" action="{{ route('projects.store') }}">
                    {{ csrf_field() }}
                        <div class="row" style="margin-bottom:20px;">
                            <div class="col-md-9">
                                <label for="name" class="control-label">Project Name</label>
                                <input name="name" id="name" type="text" class="form-control" value="{{ old('name') }}"  placeholder="Project Name" required autofocus>
                            </div>
                            <div class="col-md-3">
                                <label for="name" class="control-label">Project Type</label>
                                <select name="channel" id="channel" class="form-control">
                                    <option value="1">Task Project</option>
                                    <option value="2">Blog Project</option>
                                    <option value="3">CV Project</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <a href="{{url('home')}}" class="btn btn-default">Done</a>
                                <button type="submit" class="btn btn-primary">Create Project</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
