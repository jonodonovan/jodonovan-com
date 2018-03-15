@extends('layouts.app')

@section('title')Jonathan ODonovan | weblog @endsection

@section('content')
<div class="container" style="margin-top:50px;">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <a href="{{url('weblog')}}" class="label" style="color:black;"><- back</a></span>
        </div>
    </div>
    {{-- <div class="row" style="margin-top:20px;">
        <div class="col-md-10 col-md-offset-1">
            <div class="media-left">
                <a href="#">
                    <img src="/images/JonODonovan-2.png" width="90px" alt="..." class="img-circle">
                </a>
            </div>
            <div class="media-body">
                <h4 class="media-heading" style="margin-top:10px;padding-left: 5px;line-height: .9;">
                    <p>Jon ODonovan</p>
                    <p>CTO and Co-Founder at Plex, Inc.</p>
                    <p>Dec 18, 2017</p>
                </h4>
            </div>
        </div>
    </div> --}}
    <div class="row" style="margin-top:20px;">
        <div class="col-md-10 col-md-offset-1">
            <p><em>Posted: {{Carbon\Carbon::parse($post->publish_date)->format('m/d/Y')}} | Updated: {{Carbon\Carbon::parse($post->updated_at)->format('m/d/Y')}} | Tagged: {{$post->tag}}</em></p>
            <h1 style="font-size:42px;">{{$post->name}}</h1>
            <h2 style="margin-bottom:50px;">{{$post->intro}}</h2>
            <div style="font-size:22px;font-weight: 100;">
                <p>{!!Markdown::convertToHtml($post->description)!!}</p>
            </div>
        </div>
    </div>
</div>
@endsection
