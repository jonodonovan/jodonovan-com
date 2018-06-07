@extends('layouts.app')

@section('body_style') margin-top:20px;background-color:#212121; @endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{url('projects')}}" class="label label-" style="color:black;"><- back</a></span>
                        <div class="row">
                            <div class="col-md-8">
                                <span style="text-transform:uppercase;font-size:24px;">Editing {{$project->name}}</span>
                            </div>
                            <div class="col-md-4">
                                @include('partials.alerts')
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="{{route('projects.update', $project->slug)}}" class="form-inline">
                        {{method_field('PATCH')}}
                        {{csrf_field()}}
                            <div class="form-group">
                                <input id="name" type="text" class="form-control" name="name" value="{{$project->name or old('name')}}" autofocus>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
