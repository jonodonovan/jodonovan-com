@extends('layouts.app')

@section('title')About | Jon ODonovan @endsection

@section('meta')
<link rel="canonical" href="https://jodonovan.com/about" />
<link rel="alternate" href="https://jodonovan.com/about" hreflang="en-us" />
<meta name="description" content="About Jon ODonovan, I'm a Marketing Strategist, Web Developer, and Community Builder.">
<meta name="twitter:card" content="summary" />
<meta name="twitter:creator" content="@jonodonovan" />
<meta property="og:title" content="Jon ODonovan Portfolio & Blog"/>
<meta property="og:description" content="About Jon ODonovan, I'm a Marketing Strategist, Web Developer, and Community Builder."/>
<meta property="og:url" content="https://jodonovan.com/about" />
@endsection

@section('style')
<style media="screen">
    @import url(https://fonts.googleapis.com/css?family=Open+Sans|Roboto);html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}nav{display:block}a{background-color:transparent}img{border:0}button{color:inherit;font:inherit;margin:0}button{overflow:visible}button{text-transform:none}button{-webkit-appearance:button}button::-moz-focus-inner{border:0;padding:0}*,:after,:before{-webkit-box-sizing:border-box;box-sizing:border-box}html{font-size:10px}body{font-family:Open Sans,sans-serif;font-size:14px;line-height:1.6;color:#636b6f;background-color:#fff}button{font-family:inherit;font-size:inherit;line-height:inherit}a{color:#3097d1;text-decoration:none}img{vertical-align:middle}.img-thumbnail{padding:4px;line-height:1.6;background-color:#fff;border:1px solid #ddd;border-radius:4px;display:inline-block;max-width:100%;height:auto}h2{font-family:inherit;font-weight:500;line-height:1.1;color:inherit}h2{margin-top:22px;margin-bottom:11px}h2{font-size:30px}p{margin:0 0 11px}ul{margin-top:0;margin-bottom:11px}blockquote{padding:11px 22px;margin:0 0 22px;font-size:17.5px;border-left:5px solid #eee}.container{margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px}.container:after,.container:before{content:" ";display:table}.container:after{clear:both}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1170px}}.row{margin-left:-15px;margin-right:-15px}.row:after,.row:before{content:" ";display:table}.row:after{clear:both}.col-md-4,.col-md-8,.col-xs-12{position:relative;min-height:1px;padding-left:15px;padding-right:15px}.col-xs-12{float:left}.col-xs-12{width:100%}@media (min-width:992px){.col-md-4,.col-md-8{float:left}.col-md-4{width:33.33333333%}.col-md-8{width:66.66666667%}.col-md-offset-2{margin-left:16.66666667%}}.collapse{display:none}.nav{margin-bottom:0;padding-left:0;list-style:none}.nav:after,.nav:before{content:" ";display:table}.nav:after{clear:both}.nav>li,.nav>li>a{position:relative;display:block}.nav>li>a{padding:10px 15px}.navbar{position:relative;min-height:50px;margin-bottom:22px;border:1px solid transparent}.navbar:after,.navbar:before{content:" ";display:table}.navbar:after{clear:both}@media (min-width:768px){.navbar{border-radius:4px}}.navbar-header:after,.navbar-header:before{content:" ";display:table}.navbar-header:after{clear:both}@media (min-width:768px){.navbar-header{float:left}}.navbar-collapse{overflow-x:visible;padding-right:15px;padding-left:15px;border-top:1px solid transparent;-webkit-box-shadow:inset 0 1px 0 hsla(0,0%,100%,.1);box-shadow:inset 0 1px 0 hsla(0,0%,100%,.1);-webkit-overflow-scrolling:touch}.navbar-collapse:after,.navbar-collapse:before{content:" ";display:table}.navbar-collapse:after{clear:both}@media (min-width:768px){.navbar-collapse{width:auto;border-top:0;-webkit-box-shadow:none;box-shadow:none}.navbar-collapse.collapse{display:block!important;height:auto!important;padding-bottom:0;overflow:visible!important}.navbar-fixed-top .navbar-collapse{padding-left:0;padding-right:0}}.navbar-fixed-top .navbar-collapse{max-height:340px}@media (max-device-width:480px) and (orientation:landscape){.navbar-fixed-top .navbar-collapse{max-height:200px}}.container>.navbar-collapse,.container>.navbar-header{margin-right:-15px;margin-left:-15px}@media (min-width:768px){.container>.navbar-collapse,.container>.navbar-header{margin-right:0;margin-left:0}}.navbar-fixed-top{position:fixed;right:0;left:0;z-index:1030}@media (min-width:768px){.navbar-fixed-top{border-radius:0}}.navbar-fixed-top{top:0;border-width:0 0 1px}.navbar-brand{float:left;padding:14px 15px;font-size:18px;line-height:22px;height:50px}@media (min-width:768px){.navbar>.container .navbar-brand{margin-left:-15px}}.navbar-toggle{position:relative;float:right;margin-right:15px;padding:9px 10px;margin-top:8px;margin-bottom:8px;background-color:transparent;background-image:none;border:1px solid transparent;border-radius:4px}.navbar-toggle .icon-bar{display:block;width:22px;height:2px;border-radius:1px}.navbar-toggle .icon-bar+.icon-bar{margin-top:4px}@media (min-width:768px){.navbar-toggle{display:none}}.navbar-nav{margin:7px -15px}.navbar-nav>li>a{padding-top:10px;padding-bottom:10px;line-height:22px}@media (min-width:768px){.navbar-nav{float:left;margin:0}.navbar-nav>li{float:left}.navbar-nav>li>a{padding-top:14px;padding-bottom:14px}}@media (min-width:768px){.navbar-right{float:right!important;margin-right:-15px}}.navbar-default{background-color:#fff;border-color:#e6e5e5}.navbar-default .navbar-brand{color:#777}.navbar-default .navbar-nav>li>a{color:#777}.navbar-default .navbar-toggle{border-color:#ddd}.navbar-default .navbar-toggle .icon-bar{background-color:#888}.navbar-default .navbar-collapse{border-color:#e6e5e5}@-ms-viewport{width:device-width}@media (max-width:767px){.hidden-xs{display:none!important}}@font-face{font-family:FontAwesome;src:url(/fonts/vendor/font-awesome/fontawesome-webfont.eot?674f50d287a8c48dc19ba404d20fe713);src:url(/fonts/vendor/font-awesome/fontawesome-webfont.eot?674f50d287a8c48dc19ba404d20fe713) format("embedded-opentype"),url(/fonts/vendor/font-awesome/fontawesome-webfont.woff2?af7ae505a9eed503f8b8e6982036873e) format("woff2"),url(/fonts/vendor/font-awesome/fontawesome-webfont.woff?fee66e712a8a08eef5805a46892932ad) format("woff"),url(/fonts/vendor/font-awesome/fontawesome-webfont.ttf?b06871f281fee6b241d60582ae9369b9) format("truetype"),url(/fonts/vendor/font-awesome/fontawesome-webfont.svg?912ec66d7572ff821749319396470bde) format("svg");font-weight:400;font-style:normal}.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.fa-user:before{content:"\F007"}.fa-home:before{content:"\F015"}.fa-pencil-square-o:before{content:"\F044"}.fa-users:before{content:"\F0C0"}.fa-terminal:before{content:"\F120"}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);border:0}.page-about li{margin-bottom:5px}blockquote{background-color:#f9f9f9}
</style>
@endsection
@section('body_style') @endsection

@section('content')
<div class="container page-about" style="margin-top:50px;padding-top:20px;padding-bottom:20px;font-weight: 100;font-size:1.2em;">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <h1 style="color:white;background-color:#2196F3;padding:20px;text-transform:uppercase;">About</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-2">
            <img src="/images/jon_and_cat.jpg" name="aboutme" width="100%" border="0" class="hidden-xs img-thumbnail">
        </div>
        <div class="col-md-6">
            <p>Jon O’Donovan is a Digital Marketing and web development professional. As a IT and networking technician, Jon began self-learning how to handcraft websites. Building on his desire to create, he made a career change to focus more on advertising and digital marketing. Leveraging his past experience in IT and as a web developer, Jon is able to see the bigger picture. Understanding the holistic requirements of digital and development projects has enabled Jon to excel in the digital marketing world.</p>
            <p>Jon is born and raised in Tampa, Fl. He is the oldest of four. Raised by a single mother before her passing before he graduated from high school. As bad as it sounds, Jon has had many strong and influential friends and family throughout his life.</p> 
            <p>He enjoys helping others in need as he understands that not everyone gets the best start. He is active in many online communities where he helps those looking to get into the field or solve challenging problems.</p>
        </div>
    </div>
    <hr width="50%">
    
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div>
                <p>Link to full <a href="about/professional-experience">professioanl experience</a></p>
                <p>Jon O’Donovan is a professional marketer and web developer with over ten years experience with multiple aspects of traditional and digital marketing, specifically:</p>
                    <ul>
                        <li>print and digital (SEM and display) advertising execution and management</li>
                        <li>social media management</li>
                        <li>web analytics and click tracking</li>
                        <li>email marketing, list management, design, and development</li>
                        <li>search optimization and local listing management</li>
                        <li><a href="https://www.behance.net/jonodonovan" target="_blank">graphic design</a></li>
                        <li><a href="/development" target="_self">web design and development</a></li>
                        <li>customer service and reputation management</li>
                        <li>inbound and marketing automation</li>
                        <li>community management</li>
                    </ul>
                <p>Jon has a degree in electronic engineering and eight years of experience in Information Technology as a systems and network administrator.</p>
                <p>Additionally, Jon runs his own digital marketing agency, <a href="https://verticalorbit.com/" target="_blank">Vertical Orbit</a>. Vertical Orbit focuses on providing professional assistance to companies seeking to resolve marketing and web development issues.</p>
            </div>
        </div>
    </div>
</div>
@endsection
