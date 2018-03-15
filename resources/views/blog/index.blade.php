@extends('layouts.app')

@section('title')Jonathan ODonovan | weblog @endsection

@section('content')
<div class="container" style="margin-top:50px;padding-top:20px;padding-bottom:20px;">
    <div class="row" style="margin-bottom:20px;">
        <div class="col-md-10 col-md-offset-1">
            <div class="row">
                @if (! $posts->isEmpty())
                    @foreach ($posts as $post)
                        <div class="col-sm-6 col-md-4 post-container">
                            <a href="{{url('weblog/'.$post->slug)}}">
                            <div class="thumbnail">
                                <div class="caption">
                                    <h3 class="post-name">{{$post->name}}</h3>
                                    {{-- <p><em class="small">Posted {{Carbon\Carbon::parse($post->publish_date)->format('m/d/y')}}</em></p> --}}
                                    <p class="post-intro">{{ str_limit(strip_tags($post->intro), 100) }}</p>
                                    <p><span class="post-btn btn btn-primary" role="button">Read More</span></p>
                                </div>
                            </div>
                            </a>
                        </div>
                    @endforeach
                @else
                    No posts found... try again later
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
