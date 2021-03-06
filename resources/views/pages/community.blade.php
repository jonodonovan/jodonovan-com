@extends('layouts.app')

@section('title')Community | Jon ODonovan @endsection

@section('meta')
<link rel="canonical" href="https://jodonovan.com/community" />
<link rel="alternate" href="https://jodonovan.com/community" hreflang="en-us" />
<meta name="description" content="The communities I'm building.">
<meta name="twitter:card" content="summary" />
<meta name="twitter:creator" content="@jonodonovan" />
<meta property="og:title" content="Jon ODonovan Portfolio & Blog"/>
<meta property="og:description" content="The communities I'm building."/>
<meta property="og:url" content="https://jodonovan.com/community" />
@endsection

@section('style')
<style media="screen">
    @import url(https://fonts.googleapis.com/css?family=Open+Sans|Roboto);html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}nav{display:block}a{background-color:transparent}button{color:inherit;font:inherit;margin:0}button{overflow:visible}button{text-transform:none}button{-webkit-appearance:button}button::-moz-focus-inner{border:0;padding:0}*,:after,:before{-webkit-box-sizing:border-box;box-sizing:border-box}html{font-size:10px}body{font-family:Open Sans,sans-serif;font-size:14px;line-height:1.6;color:#636b6f;background-color:#fff}button{font-family:inherit;font-size:inherit;line-height:inherit}a{color:#3097d1;text-decoration:none}h2,h3{font-family:inherit;font-weight:500;line-height:1.1;color:inherit}h2,h3{margin-top:22px;margin-bottom:11px}h2{font-size:30px}h3{font-size:24px}p{margin:0 0 11px}.text-left{text-align:left}.text-center{text-align:center}ul{margin-top:0;margin-bottom:11px}.container{margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px}.container:after,.container:before{content:" ";display:table}.container:after{clear:both}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1170px}}.row{margin-left:-15px;margin-right:-15px}.row:after,.row:before{content:" ";display:table}.row:after{clear:both}.col-md-3,.col-md-12{position:relative;min-height:1px;padding-left:15px;padding-right:15px}@media (min-width:992px){.col-md-3,.col-md-12{float:left}.col-md-3{width:25%}.col-md-12{width:100%}}.collapse{display:none}.nav{margin-bottom:0;padding-left:0;list-style:none}.nav:after,.nav:before{content:" ";display:table}.nav:after{clear:both}.nav>li,.nav>li>a{position:relative;display:block}.nav>li>a{padding:10px 15px}.navbar{position:relative;min-height:50px;margin-bottom:22px;border:1px solid transparent}.navbar:after,.navbar:before{content:" ";display:table}.navbar:after{clear:both}@media (min-width:768px){.navbar{border-radius:4px}}.navbar-header:after,.navbar-header:before{content:" ";display:table}.navbar-header:after{clear:both}@media (min-width:768px){.navbar-header{float:left}}.navbar-collapse{overflow-x:visible;padding-right:15px;padding-left:15px;border-top:1px solid transparent;-webkit-box-shadow:inset 0 1px 0 hsla(0,0%,100%,.1);box-shadow:inset 0 1px 0 hsla(0,0%,100%,.1);-webkit-overflow-scrolling:touch}.navbar-collapse:after,.navbar-collapse:before{content:" ";display:table}.navbar-collapse:after{clear:both}@media (min-width:768px){.navbar-collapse{width:auto;border-top:0;-webkit-box-shadow:none;box-shadow:none}.navbar-collapse.collapse{display:block!important;height:auto!important;padding-bottom:0;overflow:visible!important}.navbar-fixed-top .navbar-collapse{padding-left:0;padding-right:0}}.navbar-fixed-top .navbar-collapse{max-height:340px}@media (max-device-width:480px) and (orientation:landscape){.navbar-fixed-top .navbar-collapse{max-height:200px}}.container>.navbar-collapse,.container>.navbar-header{margin-right:-15px;margin-left:-15px}@media (min-width:768px){.container>.navbar-collapse,.container>.navbar-header{margin-right:0;margin-left:0}}.navbar-fixed-top{position:fixed;right:0;left:0;z-index:1030}@media (min-width:768px){.navbar-fixed-top{border-radius:0}}.navbar-fixed-top{top:0;border-width:0 0 1px}.navbar-brand{float:left;padding:14px 15px;font-size:18px;line-height:22px;height:50px}@media (min-width:768px){.navbar>.container .navbar-brand{margin-left:-15px}}.navbar-toggle{position:relative;float:right;margin-right:15px;padding:9px 10px;margin-top:8px;margin-bottom:8px;background-color:transparent;background-image:none;border:1px solid transparent;border-radius:4px}.navbar-toggle .icon-bar{display:block;width:22px;height:2px;border-radius:1px}.navbar-toggle .icon-bar+.icon-bar{margin-top:4px}@media (min-width:768px){.navbar-toggle{display:none}}.navbar-nav{margin:7px -15px}.navbar-nav>li>a{padding-top:10px;padding-bottom:10px;line-height:22px}@media (min-width:768px){.navbar-nav{float:left;margin:0}.navbar-nav>li{float:left}.navbar-nav>li>a{padding-top:14px;padding-bottom:14px}}@media (min-width:768px){.navbar-right{float:right!important;margin-right:-15px}}.navbar-default{background-color:#fff;border-color:#e6e5e5}.navbar-default .navbar-brand{color:#777}.navbar-default .navbar-nav>li>a{color:#777}.navbar-default .navbar-toggle{border-color:#ddd}.navbar-default .navbar-toggle .icon-bar{background-color:#888}.navbar-default .navbar-collapse{border-color:#e6e5e5}.panel{margin-bottom:22px;background-color:#fff;border:1px solid transparent;border-radius:4px;-webkit-box-shadow:0 1px 1px rgba(0,0,0,.05);box-shadow:0 1px 1px rgba(0,0,0,.05)}.panel-body{padding:15px}.panel-body:after,.panel-body:before{content:" ";display:table}.panel-body:after{clear:both}.panel-heading{padding:10px 15px;border-bottom:1px solid transparent;border-top-right-radius:3px;border-top-left-radius:3px}.panel-title{color:inherit}.panel-title{margin-top:0;margin-bottom:0;font-size:16px}.panel-title>a{color:inherit}.panel-footer{padding:10px 15px;background-color:#f5f5f5;border-top:1px solid #e6e5e5;border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel-default{border-color:#e6e5e5}.panel-default>.panel-heading{color:#333;background-color:#fff;border-color:#e6e5e5}@-ms-viewport{width:device-width}@font-face{font-family:FontAwesome;src:url(/fonts/vendor/font-awesome/fontawesome-webfont.eot?674f50d287a8c48dc19ba404d20fe713);src:url(/fonts/vendor/font-awesome/fontawesome-webfont.eot?674f50d287a8c48dc19ba404d20fe713) format("embedded-opentype"),url(/fonts/vendor/font-awesome/fontawesome-webfont.woff2?af7ae505a9eed503f8b8e6982036873e) format("woff2"),url(/fonts/vendor/font-awesome/fontawesome-webfont.woff?fee66e712a8a08eef5805a46892932ad) format("woff"),url(/fonts/vendor/font-awesome/fontawesome-webfont.ttf?b06871f281fee6b241d60582ae9369b9) format("truetype"),url(/fonts/vendor/font-awesome/fontawesome-webfont.svg?912ec66d7572ff821749319396470bde) format("svg");font-weight:400;font-style:normal}.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.fa-user:before{content:"\F007"}.fa-home:before{content:"\F015"}.fa-pencil-square-o:before{content:"\F044"}.fa-users:before{content:"\F0C0"}.fa-link:before{content:"\F0C1"}.fa-terminal:before{content:"\F120"}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);border:0}
</style>
@endsection

@section('content')
<div class="container" style="margin-top:50px;padding-top:20px;padding-bottom:20px;">
    <div class="row">
        <div class="col-md-12">
            <h1 style="color:white;background-color:#2196F3;padding:20px;text-transform:uppercase;"><i class="fa fa-users" aria-hidden="true"></i> Cummunity</h1>
        </div>
    </div>
    <div class="row" style="margin-bottom:20px">
        <div class="col-md-12 text-center">
            <h2>The communities I'm cultivating.</h2>
			<p>Like to chat in real-time? <a href="https://discord.com/invite/q6ePcxeQja" target="_blank">Join our Marketing & Advertising Discord server</a> or join one of our Reddit communities below:</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 text-center">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><a href="https://www.reddit.com/r/marketing" target="_blank">r/marketing <i class="fa fa-link" aria-hidden="true"></i></a></h3>
                </div>
                <div class="panel-body text-left">
                    For marketing professionals to discuss and ask questions related to the marketing industry.
                </div>
                <div class="panel-footer">
                    270,000 subscribers
                </div>
            </div>
        </div>
        <div class="col-md-3 text-center">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><a href="https://www.reddit.com/r/socialmedia" target="_blank">r/socialmedia <i class="fa fa-link" aria-hidden="true"></i></a></h3>
                </div>
                <div class="panel-body text-left">
                    For marketing professionals working with social media.
                </div>
                <div class="panel-footer">
                    140,000 subscribers
                </div>
            </div>
        </div>
        <div class="col-md-3 text-center">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><a href="https://www.reddit.com/r/advertising" target="_blank">r/advertising <i class="fa fa-link" aria-hidden="true"></i></a></h3>
                </div>
                <div class="panel-body text-left">
                    Ground Zero for ad creators, students, copywriters, affiliates, and anyone else who is finely honing their reverse banner blindness for professional reasons.
                </div>
                <div class="panel-footer">
                    100,000 subscribers
                </div>
            </div>
        </div>
        <div class="col-md-3 text-center">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><a href="https://www.reddit.com/r/digital_marketing" target="_blank">r/digital_marketing <i class="fa fa-link" aria-hidden="true"></i></a></h3>
                </div>
                <div class="panel-body text-left">
                    For digital marketing news, best practices, strategy, and learning.
                </div>
                <div class="panel-footer">
                    80,000 subscribers
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 text-center">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><a href="https://www.reddit.com/r/analytics" target="_blank">r/analytics <i class="fa fa-link" aria-hidden="true"></i></a></h3>
                </div>
                <div class="panel-body text-left">
                    Dedicated to web analytics, data and business analytics. We're here to discuss analysis of data, learning of skills and implementation of web analytics.
                </div>
                <div class="panel-footer">
                    63,000 subscribers
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <i>Last updated June 2020</i>
        </div>
    </div>
</div>
@endsection
