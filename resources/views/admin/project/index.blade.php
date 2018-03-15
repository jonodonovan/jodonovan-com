@extends('layouts.app')

@section('body_style') margin-top:20px;background-color:#212121; @endsection

@section('content')
<div class="container" style="margin-top:20px;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span style="font-size: 10px;"><a href="{{url('home')}}"><- back</a></span>
                    <div class="row">
                        <div class="col-md-12">
                            <span style="text-transform:uppercase;font-size:24px;">All Projects</span>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    @include('partials.alerts')
                    @if ( !$projects->count() )
                        <div class="alert alert-danger">
                            You have no projects. <a href="projects/create">Create one.</a>
                        </div>
                    @else
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th style="width:5%">#</th>
                                    <th style="width:10%">Name</th>
                                    <th style="width:10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php  $count = 1; ?>
                            @foreach ($projects as $project)
                                <tr>
                                    <td>{{$count++}}</td>
                                    <td><a href="{{'projects/'.$project->slug}}">{{$project->name}}</a></td>
                                    <td><a href="{{url('projects/'.$project->slug.'/edit')}}">Edit</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
