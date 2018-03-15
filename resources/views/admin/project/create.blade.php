@extends('layouts.app')

@section('body_style') margin-top:20px;background-color:#212121; @endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span style="font-size: 10px;">
                        <a href="{{url('home')}}"><- back</a>
                    </span> Create a new Project
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
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"  placeholder="Project Name" required autofocus>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control" id="channel" name="channel">
                                    <option value="1">Task Project</option>
                                    <option value="2">Blog Project</option>
                                    <option value="3">CV Project</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
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
