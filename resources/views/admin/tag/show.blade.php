@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span style="font-size: 10px;"><a href="{{url('home')}}"><- back</a></span> <span style="text-transform:uppercase;">{{$tag->name}}</span>
                </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
