@extends('layouts.app')

@section('title'){{$post->name}} | Jon ODonovan @endsection

@section('meta')
<meta name="twitter:card" content="summary" />
<meta name="twitter:creator" content="@jonodonovan" />
<meta property="og:title" content="{{$post->name}}"/>
<meta property="og:image" content="https://placeimg.com/1200/627/nature"/>
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="627">
<meta property="og:description" content="{{$post->intro}}"/>
<meta property="og:url" content="https://jodonovan.com/weblog/{{$post->slug}}" />
@endsection

@section('content')
<div class="container" style="margin-top:70px;margin-bottom:50px;">
    <div class="row" style="padding:10px;">
        <div class="col-md-8 col-md-offset-2 text-center">
            @include('partials.alerts')
        </div>
    </div>
    <main class="row">
        <div class="col-md-10 col-md-offset-1">
            <nav>
                <a href="{{url('weblog')}}" class="label"><- back</a></span> Posted: {{Carbon\Carbon::parse($post->publish_date)->format('m/d/Y')}} | Updated: {{Carbon\Carbon::parse($post->updated_at)->format('m/d/Y')}} | Tagged: {{$post->tag}}
            </nav>
            <article>
                <header>
                    <h1 class="title">{{$post->name}}</h1>
                    <p class="intro">{{$post->intro}}</p>
                </header>
                <section class="body">
                    <p>{!!Markdown::convertToHtml($post->description)!!}</p>
                </section>
            </article>
        </div>
    </main>
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
                    <p>Title</p>
                    <p>Date</p>
                </h4>
            </div>
        </div>
    </div> --}}
    @include('partials.email')
</div>

@endsection
