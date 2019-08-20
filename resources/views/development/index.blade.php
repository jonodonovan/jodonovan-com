@extends('layouts.app')

@section('title')Development | Jon ODonovan @endsection

@section('meta')
<link rel="canonical" href="https://jodonovan.com/development" />
<link rel="alternate" href="https://jodonovan.com/development" hreflang="en-us" />
<meta name="description" content="Some of my development projects, both personal and for clients.">
<meta name="twitter:card" content="summary" />
<meta name="twitter:creator" content="@jonodonovan" />
<meta property="og:title" content="Jon ODonovan Portfolio & Blog"/>
<meta property="og:description" content="Some of my development projects, both personal and for clients."/>
<meta property="og:url" content="https://jodonovan.com/development" />
@endsection

@section('style')
<style media="screen">
    @import url(https://fonts.googleapis.com/css?family=Open+Sans|Roboto);html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}nav{display:block}a{background-color:transparent}img{border:0}button{color:inherit;font:inherit;margin:0}button{overflow:visible}button{text-transform:none}button{-webkit-appearance:button}button::-moz-focus-inner{border:0;padding:0}*,:after,:before{-webkit-box-sizing:border-box;box-sizing:border-box}html{font-size:10px}body{font-family:Open Sans,sans-serif;font-size:14px;line-height:1.6;color:#636b6f;background-color:#fff}button{font-family:inherit;font-size:inherit;line-height:inherit}a{color:#3097d1;text-decoration:none}img{vertical-align:middle}h2,h3{font-family:inherit;font-weight:500;line-height:1.1;color:inherit}h2,h3{margin-top:22px;margin-bottom:11px}h2{font-size:30px}h3{font-size:24px}p{margin:0 0 11px}ul{margin-top:0;margin-bottom:11px}.container{margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px}.container:after,.container:before{content:" ";display:table}.container:after{clear:both}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1170px}}.row{margin-left:-15px;margin-right:-15px}.row:after,.row:before{content:" ";display:table}.row:after{clear:both}.col-md-6,.col-md-12,.col-sm-6{position:relative;min-height:1px;padding-left:15px;padding-right:15px}@media (min-width:768px){.col-sm-6{float:left}.col-sm-6{width:50%}}@media (min-width:992px){.col-md-6,.col-md-12{float:left}.col-md-6{width:50%}.col-md-12{width:100%}}.collapse{display:none}.nav{margin-bottom:0;padding-left:0;list-style:none}.nav:after,.nav:before{content:" ";display:table}.nav:after{clear:both}.nav>li,.nav>li>a{position:relative;display:block}.nav>li>a{padding:10px 15px}.navbar{position:relative;min-height:50px;margin-bottom:22px;border:1px solid transparent}.navbar:after,.navbar:before{content:" ";display:table}.navbar:after{clear:both}@media (min-width:768px){.navbar{border-radius:4px}}.navbar-header:after,.navbar-header:before{content:" ";display:table}.navbar-header:after{clear:both}@media (min-width:768px){.navbar-header{float:left}}.navbar-collapse{overflow-x:visible;padding-right:15px;padding-left:15px;border-top:1px solid transparent;-webkit-box-shadow:inset 0 1px 0 hsla(0,0%,100%,.1);box-shadow:inset 0 1px 0 hsla(0,0%,100%,.1);-webkit-overflow-scrolling:touch}.navbar-collapse:after,.navbar-collapse:before{content:" ";display:table}.navbar-collapse:after{clear:both}@media (min-width:768px){.navbar-collapse{width:auto;border-top:0;-webkit-box-shadow:none;box-shadow:none}.navbar-collapse.collapse{display:block!important;height:auto!important;padding-bottom:0;overflow:visible!important}.navbar-fixed-top .navbar-collapse{padding-left:0;padding-right:0}}.navbar-fixed-top .navbar-collapse{max-height:340px}@media (max-device-width:480px) and (orientation:landscape){.navbar-fixed-top .navbar-collapse{max-height:200px}}.container>.navbar-collapse,.container>.navbar-header{margin-right:-15px;margin-left:-15px}@media (min-width:768px){.container>.navbar-collapse,.container>.navbar-header{margin-right:0;margin-left:0}}.navbar-fixed-top{position:fixed;right:0;left:0;z-index:1030}@media (min-width:768px){.navbar-fixed-top{border-radius:0}}.navbar-fixed-top{top:0;border-width:0 0 1px}.navbar-brand{float:left;padding:14px 15px;font-size:18px;line-height:22px;height:50px}@media (min-width:768px){.navbar>.container .navbar-brand{margin-left:-15px}}.navbar-toggle{position:relative;float:right;margin-right:15px;padding:9px 10px;margin-top:8px;margin-bottom:8px;background-color:transparent;background-image:none;border:1px solid transparent;border-radius:4px}.navbar-toggle .icon-bar{display:block;width:22px;height:2px;border-radius:1px}.navbar-toggle .icon-bar+.icon-bar{margin-top:4px}@media (min-width:768px){.navbar-toggle{display:none}}.navbar-nav{margin:7px -15px}.navbar-nav>li>a{padding-top:10px;padding-bottom:10px;line-height:22px}@media (min-width:768px){.navbar-nav{float:left;margin:0}.navbar-nav>li{float:left}.navbar-nav>li>a{padding-top:14px;padding-bottom:14px}}@media (min-width:768px){.navbar-right{float:right!important;margin-right:-15px}}.navbar-default{background-color:#fff;border-color:#e6e5e5}.navbar-default .navbar-brand{color:#777}.navbar-default .navbar-nav>li>a{color:#777}.navbar-default .navbar-toggle{border-color:#ddd}.navbar-default .navbar-toggle .icon-bar{background-color:#888}.navbar-default .navbar-collapse{border-color:#e6e5e5}.thumbnail{display:block;padding:4px;margin-bottom:22px;line-height:1.6;background-color:#fff;border:1px solid #ddd;border-radius:4px}.thumbnail>img{display:block;max-width:100%;height:auto;margin-left:auto;margin-right:auto}.thumbnail .caption{padding:9px;color:#636b6f}.carousel,.carousel-inner{position:relative}.carousel-inner{overflow:hidden;width:100%}.carousel-inner>.item{display:none;position:relative}.carousel-inner>.item>img{display:block;max-width:100%;height:auto;line-height:1}@media (-webkit-transform-3d),(transform-3d){.carousel-inner>.item{-webkit-backface-visibility:hidden;backface-visibility:hidden;-webkit-perspective:1000px;perspective:1000px}.carousel-inner>.item.active{-webkit-transform:translateZ(0);transform:translateZ(0);left:0}}.carousel-inner>.active{display:block}.carousel-inner>.active{left:0}.carousel-control{position:absolute;top:0;left:0;bottom:0;width:15%;opacity:.5;filter:alpha(opacity=50);font-size:20px;color:#fff;text-align:center;text-shadow:0 1px 2px rgba(0,0,0,.6);background-color:transparent}.carousel-control.left{background-image:-webkit-gradient(linear,left top,right top,from(rgba(0,0,0,.5)),to(rgba(0,0,0,.0001)));background-image:linear-gradient(90deg,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001));background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#80000000",endColorstr="#00000000",GradientType=1)}.carousel-control.right{left:auto;right:0;background-image:-webkit-gradient(linear,left top,right top,from(rgba(0,0,0,.0001)),to(rgba(0,0,0,.5)));background-image:linear-gradient(90deg,rgba(0,0,0,.0001) 0,rgba(0,0,0,.5));background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#00000000",endColorstr="#80000000",GradientType=1)}@-ms-viewport{width:device-width}@font-face{font-family:FontAwesome;src:url(/fonts/vendor/font-awesome/fontawesome-webfont.eot?674f50d287a8c48dc19ba404d20fe713);src:url(/fonts/vendor/font-awesome/fontawesome-webfont.eot?674f50d287a8c48dc19ba404d20fe713) format("embedded-opentype"),url(/fonts/vendor/font-awesome/fontawesome-webfont.woff2?af7ae505a9eed503f8b8e6982036873e) format("woff2"),url(/fonts/vendor/font-awesome/fontawesome-webfont.woff?fee66e712a8a08eef5805a46892932ad) format("woff"),url(/fonts/vendor/font-awesome/fontawesome-webfont.ttf?b06871f281fee6b241d60582ae9369b9) format("truetype"),url(/fonts/vendor/font-awesome/fontawesome-webfont.svg?912ec66d7572ff821749319396470bde) format("svg");font-weight:400;font-style:normal}.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.fa-user:before{content:"\F007"}.fa-home:before{content:"\F015"}.fa-pencil-square-o:before{content:"\F044"}.fa-external-link:before{content:"\F08E"}.fa-users:before{content:"\F0C0"}.fa-terminal:before{content:"\F120"}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);border:0}.carousel-control.left,.carousel-control.right{background-image:none}
</style>
<style>
        body {
          font-family: Arial
        }
        
        * {
          box-sizing: border-box;
        }
        
        /* Container for columns and the top "toolbar" */
        .browser-row {
          padding: 10px;
          background: #f1f1f1;
          border-top-left-radius: 4px;
          border-top-right-radius: 4px;
        }
        
        /* Create three unequal columns that floats next to each other */
        .column {
          float: left;
        }
        
        .left {
          width: 15%;
        }
        
        .right {
          width: 10%;
        }
        
        .middle {
          width: 75%;
        }
        
        /* Clear floats after the columns */
        .browser-row:after {
          content: "";
          display: table;
          clear: both;
        }
        
        /* Three dots */
        .dot {
          margin-top: 4px;
          height: 12px;
          width: 12px;
          background-color: #bbb;
          border-radius: 50%;
          display: inline-block;
        }
        
        /* Style the input field */
        input[type=text] {
          width: 100%;
          border-radius: 3px;
          border: none;
          background-color: white;
          margin-top: -8px;
          height: 25px;
          color: #666;
          padding: 5px;
        }
        
        /* Three bars (hamburger menu) */
        .bar {
          width: 17px;
          height: 3px;
          background-color: #aaa;
          margin: 3px 0;
          display: block;
        }
        
        /* Page content */
        .content {
          padding: 10px;
        }
        </style>
@endsection
@section('body_style') @endsection

@section('content')
<div class="container" style="margin-top:50px;padding-top:20px;padding-bottom:20px;">
    <div class="row">
        <div class="col-md-12">
            <h1 style="color:white;background-color:#2196F3;padding:20px;text-transform:uppercase;"><i class="fa fa-terminal" aria-hidden="true"></i> Web Development</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="thumbnail">
                <div class="browser-row">
                    <div class="column left">
                        <span class="dot" style="background:#ED594A;"></span>
                        <span class="dot" style="background:#FDD800;"></span>
                        <span class="dot" style="background:#5AC05A;"></span>
                    </div>
                    <div class="column middle">
                        <input type="text" value="https://lookingformarketing.com">
                    </div>
                    <div class="column right">
                        <div style="float:right">
                            <span class="bar"></span>
                            <span class="bar"></span>
                            <span class="bar"></span>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <img src="images/lookingformarketing_01.svg" class="img-responsive" alt="Looking for Marketing">
                    <div class="caption">
                        <h3>Looking For Marketing | Marketing News, Resources, Jobs, Events, and Books</h3>
                        <p>Built with Laravel. Originally, a marketing focused job board, turned community resource hub. This a hub is the collection of personally built and community sourced resources. Meant to help marketers at different stages in their career without needing to sign up for another email list.</p>
                        <p><a href="https://lookingformarketing.com" target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i> lookingformarketing.com</a></p>
                    </div>
                </div>
            </div>
            <div class="thumbnail">
                <div class="browser-row">
                    <div class="column left">
                        <span class="dot" style="background:#ED594A;"></span>
                        <span class="dot" style="background:#FDD800;"></span>
                        <span class="dot" style="background:#5AC05A;"></span>
                    </div>
                    <div class="column middle">
                        <input type="text" value="https://iotpicker.com">
                    </div>
                    <div class="column right">
                        <div style="float:right">
                            <span class="bar"></span>
                            <span class="bar"></span>
                            <span class="bar"></span>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <img src="images/iotpicker_01.png" class="img-responsive" alt="IOTPicker.com">
                    <div class="caption">
                        <h3>IotPicker.com | IOT Purchase Guide</h3>
                        <p>Find compatible IoT devices, search by Manufacture, Category, Platform, or Protocol.</p>
                        <p>Built with: Laravel (PHP framework), Twitter Bootstrap (CSS framework), Font Awesome (CSS icons), JQuery (JS framework), and Mixitup (JQuery filter).</p>
                        <p><a href="https://iotpicker.com" target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i> IOTPicker.com</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="thumbnail">
                <div class="browser-row">
                    <div class="column left">
                        <span class="dot" style="background:#ED594A;"></span>
                        <span class="dot" style="background:#FDD800;"></span>
                        <span class="dot" style="background:#5AC05A;"></span>
                    </div>
                    <div class="column middle">
                        <input type="text" value="https://verticalorbit.com">
                    </div>
                    <div class="column right">
                        <div style="float:right">
                            <span class="bar"></span>
                            <span class="bar"></span>
                            <span class="bar"></span>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <img src="images/verticalorbit_01.png" class="img-responsive" alt="Asset Box">
                    <div class="caption">
                        <h3>Vertical Orbit | Digital Marketing Agency</h3>
                        <p>Built with Laravel. This is the home of my digital marketing and web development agency. Featuring custom graphics, custom built customer relationship manager (CRM), quoting & invoice manager, and project task management.</p>
                        <p><a href="https://verticalorbit.com" target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i> VerticalOrbit.com</a></p>
                    </div>
                </div>
            </div>
            <div class="thumbnail">
                <div id="projectmgr-carousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#projectmgr-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#projectmgr-carousel" data-slide-to="1"></li>
                        <li data-target="#projectmgr-carousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="images/jodonovan_taskmgr_01.png" alt="...">
                        </div>
                        <div class="item">
                            <img src="images/jodonovan_taskmgr_02.png" alt="...">
                        </div>
                        <div class="item">
                            <img src="images/jodonovan_taskmgr_03.png" alt="...">
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#projectmgr-carousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#projectmgr-carousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="caption">
                    <h3>Project/Task Manager</h3>
                    <p>A custom-built project/task manager built for my personal use.</p>
                    <p>Allows for multiple projects with related tasks. Each project has access to it's own tasks, custom tags, requestor autosuggestion, and multiple views for open, closed, and all tasks.</p>
                    <p>Features include, tasks due-date highlighting based on current date. Tasks description field supports markdown formatting and common WYSIWYG options. Fast table column sorting and search for one or multiple keywords.</p>
                    <p>Built with Laravel <i>(PHP framework)</i>, Twitter Bootstrap <i>(CSS framework)</i>, and Font Awesome <i>(CSS icons)</i>.</p>
                </div>
            </div>
            <div class="thumbnail">
                {{-- <img src="images/assetbox_01.png" alt="Asset Box"> --}}
                <div id="assetbox-carousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#assetbox-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#assetbox-carousel" data-slide-to="1"></li>
                        <li data-target="#assetbox-carousel" data-slide-to="2"></li>
                        <li data-target="#assetbox-carousel" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="images/assetbox_01.png" alt="...">
                        </div>
                        <div class="item">
                            <img src="images/assetbox_03.png" alt="...">
                        </div>
                        <div class="item">
                            <img src="images/assetbox_04.png" alt="...">
                        </div>
                        <div class="item">
                            <img src="images/assetbox_05.png" alt="...">
                        </div>
                        <div class="item">
                            <img src="images/assetbox_06.png" alt="...">
                        </div>
                        <div class="item">
                            <img src="images/assetbox_07.png" alt="...">
                        </div>
                        <div class="item">
                            <img src="images/assetbox_08.png" alt="...">
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#assetbox-carousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#assetbox-carousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="caption">
                    <h3>Asset Box | IT Inventory SAAS</h3>
                    <p>A custom built SAAS web application for computer, software, and mobile device inventory management.</p>
                    <p>Allows for teams to manage a company's inventory for easy check-in/check-out recording and inventory reporting with custom user permissions.</p>
                    {{-- <p><a href="https://www.youtube.com/watch?v=B4R1zH9-QF0" target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i> Video introduction</a></p> --}}
                    <p>Built with Codeigniter <i>(PHP framework)</i>, Twitter Bootstrap <i>(CSS framework)</i>, and Font Awesome <i>(CSS icons)</i>.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script_footer')
    <script type="text/javascript">
        $('.carousel').carousel({
            interval: false
        })
    </script>
@endsection
