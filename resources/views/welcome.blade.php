@extends('layouts.app')

@section('meta')
<link rel="canonical" href="https://jodonovan.com" />
<link rel="alternate" href="https://jodonovan.com" hreflang="en-us" />
<meta name="description" content="A Marketing Strategist, Web Developer, and Community Builder.">
<meta name="twitter:card" content="summary" />
<meta name="twitter:creator" content="@jonodonovan" />
<meta property="og:title" content="Jon ODonovan Portfolio & Blog"/>
<meta property="og:description" content="A Marketing Strategist, Web Developer, and Community Builder."/>
<meta property="og:url" content="https://jodonovan.com" />
@endsection

@section('style')
<style media="screen">
    @import url(https://fonts.googleapis.com/css?family=Open+Sans|Roboto);.user{width:200px;height:200px;border-radius:50%;background-repeat:no-repeat;background-position:50%;background-size:cover;background-image:url("/images/JonODonovan-3.jpg");display:block}.sublinks a{color:#9e9e9e}html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}h1{font-size:2em;margin:.67em 0}img{border:0}button,input,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button{text-transform:none}button{-webkit-appearance:button}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}textarea{overflow:auto}*,:after,:before{-webkit-box-sizing:border-box;box-sizing:border-box}html{font-size:10px}body{font-family:Open Sans,sans-serif;font-size:14px;line-height:1.6;color:#636b6f;background-color:#fff}button,input,textarea{font-family:inherit;font-size:inherit;line-height:inherit}a{color:#3097d1;text-decoration:none}img{vertical-align:middle}h1,h3,h4{font-family:inherit;font-weight:500;line-height:1.1;color:inherit}h1,h3{margin-top:22px;margin-bottom:11px}h4{margin-top:11px;margin-bottom:11px}h1{font-size:36px}h3{font-size:24px}h4{font-size:18px}p{margin:0 0 11px}.lead{margin-bottom:22px;font-size:16px;font-weight:300;line-height:1.4}@media (min-width:768px){.lead{font-size:21px}}.text-center{text-align:center}.container{margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px}.container:after,.container:before{content:" ";display:table}.container:after{clear:both}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1170px}}.row{margin-left:-15px;margin-right:-15px}.row:after,.row:before{content:" ";display:table}.row:after{clear:both}.col-md-4,.col-md-8,.col-md-10{position:relative;min-height:1px;padding-left:15px;padding-right:15px}@media (min-width:992px){.col-md-4,.col-md-8,.col-md-10{float:left}.col-md-4{width:33.33333333%}.col-md-8{width:66.66666667%}.col-md-10{width:83.33333333%}.col-md-offset-1{margin-left:8.33333333%}.col-md-offset-2{margin-left:16.66666667%}}label{display:inline-block;max-width:100%;margin-bottom:5px;font-weight:700}.form-control{display:block;font-size:14px;line-height:1.6;color:#555}.form-control{width:100%;height:36px;padding:6px 12px;background-color:#fff;background-image:none;border:1px solid #ccd0d2;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}.form-control::-moz-placeholder{color:#b1b7ba;opacity:1}.form-control:-ms-input-placeholder{color:#b1b7ba}.form-control::-webkit-input-placeholder{color:#b1b7ba}.form-control::-ms-expand{border:0;background-color:transparent}textarea.form-control{height:auto}.form-group{margin-bottom:15px}.btn{display:inline-block;margin-bottom:0;font-weight:400;text-align:center;vertical-align:middle;-ms-touch-action:manipulation;touch-action:manipulation;background-image:none;border:1px solid transparent;white-space:nowrap;padding:6px 12px;font-size:14px;line-height:1.6;border-radius:4px}.btn-default{color:#636b6f;background-color:#fff;border-color:#ccc}.btn-lg{padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}.btn-sm{padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}.jumbotron{padding-top:30px;padding-bottom:30px;margin-bottom:30px;background-color:#eee}.jumbotron{color:inherit}.container .jumbotron{border-radius:6px;padding-left:15px;padding-right:15px}@media screen and (min-width:768px){.jumbotron{padding-top:48px;padding-bottom:48px}.container .jumbotron{padding-left:60px;padding-right:60px}}@-ms-viewport{width:device-width}@media (max-width:767px){.hidden-xs{display:none!important}}@font-face{font-family:FontAwesome;src:url(/fonts/vendor/font-awesome/fontawesome-webfont.eot?674f50d287a8c48dc19ba404d20fe713);src:url(/fonts/vendor/font-awesome/fontawesome-webfont.eot?674f50d287a8c48dc19ba404d20fe713) format("embedded-opentype"),url(/fonts/vendor/font-awesome/fontawesome-webfont.woff2?af7ae505a9eed503f8b8e6982036873e) format("woff2"),url(/fonts/vendor/font-awesome/fontawesome-webfont.woff?fee66e712a8a08eef5805a46892932ad) format("woff"),url(/fonts/vendor/font-awesome/fontawesome-webfont.ttf?b06871f281fee6b241d60582ae9369b9) format("truetype"),url(/fonts/vendor/font-awesome/fontawesome-webfont.svg?912ec66d7572ff821749319396470bde) format("svg");font-weight:400;font-style:normal}.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.fa-twitter:before{content:"\F099"}.fa-github:before{content:"\F09B"}.fa-linkedin:before{content:"\F0E1"}.fa-reddit:before{content:"\F1A1"}.fa-behance:before{content:"\F1B4"}.lead a{text-decoration:underline}
</style>
@endsection

@section('content')
<div class="container" style="margin-top:50px;">
    <div class="row" style="padding:10px;">
        <div class="col-md-8 col-md-offset-2 text-center">
            @include('partials.alerts')
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 hidden-xs hidden-sm">
            <div class="lead">
                <img class="user">
                <h1 style="font-size: 3em;">Hello! I'm Jon ODonovan.</h1>
                <h2>I'm a marketer, web developer, and community builder.</h2>
                <a href="/development">Development</a> | <a href="/community">Community</a> | <a href="/weblog">Weblog</a></p>
            </div>
        </div>
        <div class="col-md-8 hidden-md hidden-lg">
            <div class="lead text-center">
                <img class="user" style="margin:0 auto;">
                <h1 style="font-size: 3em;">Hello! I'm Jon ODonovan.</h1>
                <h2>I'm a marketer, web developer, and community builder.</h2>
                <a href="/development">Development</a> | <a href="/community">Community</a> | <a href="/weblog">Weblog</a></p>
            </div>
        </div>
        <br>
        <div class="col-md-4">
            <div class="jumbotron" style="background-color:#2196F3;padding:20px;box-shadow: 0 4px 6px rgba(50,50,93,.11), 0 1px 3px rgba(0,0,0,.08);">
                <h3 style="color:white;font-size:38px;text-align:center;margin:10px 0px;">Let's get in touch!</h3>
                <form method="POST" action="{{route('contact.submit')}}">
                {{csrf_field()}}
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{old('name')}}" required>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong style="color:white;">{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="companyname" id="companyname" placeholder="Company Name" value="{{old('companyname')}}">
                        @if ($errors->has('companyname'))
                            <span class="help-block">
                                <strong style="color:white;">{{ $errors->first('companyname') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{old('email')}}" required>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong style="color:white;">{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="phonenumber" id="phonenumber" placeholder="Phone Number" value="{{old('phonenumber')}}">
                    </div>
                    <div class="form-group">
                        <label for="message" class="control-label" style="color:white;">How can I help you?</label>
                        <textarea style="resize:none;" rows="5" id="message" class="form-control" name="message"  required>{{old('message')}}</textarea>
                        @if ($errors->has('message'))
                            <span class="help-block">
                                <strong style="color:white;">{{ $errors->first('message') }}</strong>
                            </span>
                        @endif
                    </div>
                    @captcha
                    <button type="submit" class="btn btn-main btn-lg" style="background-color:white;">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
