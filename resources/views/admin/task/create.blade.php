@extends('layouts.admin')

@section('body_style') margin-top:20px;background-color:#212121; @endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><span style="font-size: 10px;"><a href="{{url('home')}}"><- back</a></span> Create a new Task</div>

                <div class="panel-body">
                    @include('partials.alerts')

                    <form method="POST" action="{{ route('projects.store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('Name') ? ' has-error' : '' }}">
                                    <label for="name">Name</label>
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"  required autofocus>
                                </div>
                                <div class="form-group {{ $errors->has('Requestor') ? ' has-error' : '' }}">
                                    <label for="requestor">Requestor</label>
                                    <input id="requestor" type="text" class="form-control" name="requestor" value="{{ old('requestor') }}"  required autofocus>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('Slug') ? ' has-error' : '' }}">
                                    <div class="form-group">
                                        <label for="exampleSelect2">Slug</label>
                                        <input id="slug" type="text" class="form-control" name="slug" value="{{ old('slug') }}"  required>
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('Tag') ? ' has-error' : '' }}">
                                    <label for="tag">Tag</label>
                                    <input id="tag" type="text" class="form-control" name="tag" value="{{ old('tag') }}"  required autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                                    <label for="description">Description</label>
                                    <textarea rows="10" id="description" class="form-control" name="description" value="{{ old('description') }}"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row  m-b-40">
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('Priority') ? ' has-error' : '' }}">
                                    <label for="priority">Priority</label>
                                    <input id="priority" type="text" class="form-control" name="priority" value="{{ old('priority') }}">
                                </div>
                                <div class="form-group {{ $errors->has('Ticket_Number') ? ' has-error' : '' }}">
                                    <label for="ticket_number">Ticket Number</label>
                                    <input id="ticket_number" type="text" class="form-control" name="ticket_number" value="{{ old('ticket_number') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="due_date">Due Date</label>
                                    <input id="due_date" type="text" class="form-control" name="due_date">
                                </div>
                                <div class="form-group">
                                    <label for="completed_date">Completed Date</label>
                                    <input id="completed_date" type="text" class="form-control" name="completed_date">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Save Task</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
