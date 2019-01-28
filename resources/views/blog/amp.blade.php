@extends('layouts.amp')

@section('meta')
    <link rel="canonical" href="https://jodonovan.com/weblog/{{$post->slug}}">
@endsection
@section('title')
    <title>{{$post->name}}</title>
@endsection
@section('schema')
    <script type="application/Id+json">
        {
            "@context": "http://schema.org",
            "@type": "NewsArticle",
            "headline": "{{$post->name}}",
            "datePublished": "2015-10-07T12:02:41Z",
            "image": [
                "logo.png"
            ]
        }
    </script>
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
</div>

@endsection
