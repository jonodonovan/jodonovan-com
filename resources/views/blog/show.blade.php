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

@section('style')
<style media="screen">
@import url(https://fonts.googleapis.com/css?family=Open+Sans|Roboto);html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}article,header,main,nav,section{display:block}a{background-color:transparent}h1{font-size:2em;margin:.67em 0}button,input{color:inherit;font:inherit;margin:0}button{overflow:visible}button{text-transform:none}button{-webkit-appearance:button}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}*,:after,:before{-webkit-box-sizing:border-box;box-sizing:border-box}html{font-size:10px}body{font-family:Open Sans,sans-serif;font-size:14px;line-height:1.6;color:#636b6f;background-color:#fff}button,input{font-family:inherit;font-size:inherit;line-height:inherit}a{color:#3097d1;text-decoration:none}h1{font-family:inherit;font-weight:500;line-height:1.1;color:inherit}h1{margin-top:22px;margin-bottom:11px}h1{font-size:36px}p{margin:0 0 11px}.text-center{text-align:center}ul{margin-top:0;margin-bottom:11px}.container{margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px}.container:after,.container:before{content:" ";display:table}.container:after{clear:both}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1170px}}.row{margin-left:-15px;margin-right:-15px}.row:after,.row:before{content:" ";display:table}.row:after{clear:both}.col-md-8,.col-md-10{position:relative;min-height:1px;padding-left:15px;padding-right:15px}@media (min-width:992px){.col-md-8,.col-md-10{float:left}.col-md-8{width:66.66666667%}.col-md-10{width:83.33333333%}.col-md-offset-1{margin-left:8.33333333%}.col-md-offset-2{margin-left:16.66666667%}}.collapse{display:none}.nav{margin-bottom:0;padding-left:0;list-style:none}.nav:after,.nav:before{content:" ";display:table}.nav:after{clear:both}.nav>li,.nav>li>a{position:relative;display:block}.nav>li>a{padding:10px 15px}.navbar{position:relative;min-height:50px;margin-bottom:22px;border:1px solid transparent}.navbar:after,.navbar:before{content:" ";display:table}.navbar:after{clear:both}@media (min-width:768px){.navbar{border-radius:4px}}.navbar-header:after,.navbar-header:before{content:" ";display:table}.navbar-header:after{clear:both}@media (min-width:768px){.navbar-header{float:left}}.navbar-collapse{overflow-x:visible;padding-right:15px;padding-left:15px;border-top:1px solid transparent;-webkit-box-shadow:inset 0 1px 0 hsla(0,0%,100%,.1);box-shadow:inset 0 1px 0 hsla(0,0%,100%,.1);-webkit-overflow-scrolling:touch}.navbar-collapse:after,.navbar-collapse:before{content:" ";display:table}.navbar-collapse:after{clear:both}@media (min-width:768px){.navbar-collapse{width:auto;border-top:0;-webkit-box-shadow:none;box-shadow:none}.navbar-collapse.collapse{display:block!important;height:auto!important;padding-bottom:0;overflow:visible!important}.navbar-fixed-top .navbar-collapse{padding-left:0;padding-right:0}}.navbar-fixed-top .navbar-collapse{max-height:340px}@media (max-device-width:480px) and (orientation:landscape){.navbar-fixed-top .navbar-collapse{max-height:200px}}.container>.navbar-collapse,.container>.navbar-header{margin-right:-15px;margin-left:-15px}@media (min-width:768px){.container>.navbar-collapse,.container>.navbar-header{margin-right:0;margin-left:0}}.navbar-fixed-top{position:fixed;right:0;left:0;z-index:1030}@media (min-width:768px){.navbar-fixed-top{border-radius:0}}.navbar-fixed-top{top:0;border-width:0 0 1px}.navbar-brand{float:left;padding:14px 15px;font-size:18px;line-height:22px;height:50px}@media (min-width:768px){.navbar>.container .navbar-brand{margin-left:-15px}}.navbar-toggle{position:relative;float:right;margin-right:15px;padding:9px 10px;margin-top:8px;margin-bottom:8px;background-color:transparent;background-image:none;border:1px solid transparent;border-radius:4px}.navbar-toggle .icon-bar{display:block;width:22px;height:2px;border-radius:1px}.navbar-toggle .icon-bar+.icon-bar{margin-top:4px}@media (min-width:768px){.navbar-toggle{display:none}}.navbar-nav{margin:7px -15px}.navbar-nav>li>a{padding-top:10px;padding-bottom:10px;line-height:22px}@media (min-width:768px){.navbar-nav{float:left;margin:0}.navbar-nav>li{float:left}.navbar-nav>li>a{padding-top:14px;padding-bottom:14px}}@media (min-width:768px){.navbar-right{float:right!important;margin-right:-15px}}.navbar-default{background-color:#fff;border-color:#e6e5e5}.navbar-default .navbar-brand{color:#777}.navbar-default .navbar-nav>li>a{color:#777}.navbar-default .navbar-toggle{border-color:#ddd}.navbar-default .navbar-toggle .icon-bar{background-color:#888}.navbar-default .navbar-collapse{border-color:#e6e5e5}.label{display:inline;padding:.2em .6em .3em;font-size:75%;font-weight:700;line-height:1;color:#fff;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25em}@-ms-viewport{width:device-width}@font-face{font-family:FontAwesome;src:url(/fonts/vendor/font-awesome/fontawesome-webfont.eot?674f50d287a8c48dc19ba404d20fe713);src:url(/fonts/vendor/font-awesome/fontawesome-webfont.eot?674f50d287a8c48dc19ba404d20fe713) format("embedded-opentype"),url(/fonts/vendor/font-awesome/fontawesome-webfont.woff2?af7ae505a9eed503f8b8e6982036873e) format("woff2"),url(/fonts/vendor/font-awesome/fontawesome-webfont.woff?fee66e712a8a08eef5805a46892932ad) format("woff"),url(/fonts/vendor/font-awesome/fontawesome-webfont.ttf?b06871f281fee6b241d60582ae9369b9) format("truetype"),url(/fonts/vendor/font-awesome/fontawesome-webfont.svg?912ec66d7572ff821749319396470bde) format("svg");font-weight:400;font-style:normal}.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.fa-user:before{content:"\F007"}.fa-home:before{content:"\F015"}.fa-pencil-square-o:before{content:"\F044"}.fa-users:before{content:"\F0C0"}.fa-terminal:before{content:"\F120"}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);border:0}main{margin-bottom:50px}main nav{background-color:#2196f3;padding:20px;color:#fff}article h1{font-weight:700}article .title{font-size:42px}article .intro{font-size:24px;font-style:italic;margin-bottom:25px}article .body{font-size:22px;font-weight:100}
</style>
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
                <a href="{{url('weblog')}}" class="label"><- back</a></span> Posted: {{Carbon\Carbon::parse($post->publish_date)->format('m/d/Y')}} | Updated: {{Carbon\Carbon::parse($post->updated_at)->format('m/d/Y')}} | Tagged: {{$post->tag->name}}
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
