@extends('layouts.admin')

@section('body_style') margin-top:20px;background-color:#212121; @endsection

@section('content')
<div class="container" style="margin-top:20px;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span style="text-transform:uppercase;font-size:24px;">Welcome {{Auth::user()->name}}</span>
                </div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="projects" class="btn btn-default">View Projects</a>
                    <a href="projects/create" class="btn btn-default">Create Project</a>
                    <a href="{{route('logout')}}"
                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" class="btn btn-default">
                        Logout
                    </a>

                    <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                        {{csrf_field()}}
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Contact Submissions</div>
                <div class="panel-body">
                    <table class="table table-hover admin-table">
                        <thead>
                            <tr>
                                <th style="width:5%">#</th>
                                <th style="width:10%">Submitted</th>
                                <th style="width:10%">Name</th>
                                <th style="width:10%">Company</th>
                                <th style="width:10%">Email</th>
                                <th style="width:10%">Phone</th>
                                <th style="width:45%">Message</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php  $count = 1; ?>
                        @foreach ($contacts as $contact)
                            <tr>
                                <th>{{$count++}}</th>
                                <th>{{$contact->created_at->format('Y-m-d')}}</th>
                                <td>{{$contact->name}}</td>
                                <td>{{$contact->companyname}}</td>
                                <td>{{$contact->email}}</td>
                                <td>{{$contact->phonenumber}}</td>
                                <td>{{$contact->message}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
