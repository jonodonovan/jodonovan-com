@extends('layouts.app')

@section('title')Jonathan ODonovan | web development @endsection
@section('body_style') @endsection

@section('content')
<div class="container" style="margin-top:50px;padding-top:20px;padding-bottom:20px;">
    <div class="row">
        <div class="col-md-12">
            <h2 style="color:white;background-color:#2196F3;padding:20px;text-transform:uppercase;"><i class="fa fa-terminal" aria-hidden="true"></i> Web Development</h2>
        </div>
    </div>
    <div class="row" style="margin-bottom:20px">
        <div class="col-md-12">
            <h3>A collection of my web projects that I desgined and developed.</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-6">
            {{-- <div class="thumbnail" style="box-shadow: 0 4px 6px rgba(50,50,93,.11), 0 1px 3px rgba(0,0,0,.08);">
                <div class="caption">
                    <h3 style="text-transform:uppercase;">Vertical Orbit</h3>
                    <p>Full write-up and images coming soon...</p>
                    <p>Released in 2017. Built with: Laravel (PHP framework), Twitter Bootstrap (CSS framework), Font Awesome (CSS icons), JQuery (JS framework), and Mixitup (JQuery filter).</p>
                    <p><a href="https://verticalorbit.com" target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i> Vertical Orbit</a></p>
                </div>
            </div> --}}
            <div class="thumbnail" style="box-shadow: 0 4px 6px rgba(50,50,93,.11), 0 1px 3px rgba(0,0,0,.08);">
                <div id="ineedmarketinghelp-carousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#ineedmarketinghelp-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#ineedmarketinghelp-carousel" data-slide-to="1"></li>
                        <li data-target="#ineedmarketinghelp-carousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="images/ineedmarketinghelp_01.png" alt="...">
                        </div>
                        <div class="item">
                            <img src="images/ineedmarketinghelp_02.png" alt="...">
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#ineedmarketinghelp-carousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#ineedmarketinghelp-carousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="caption">
                    <h3 style="">INeedMarketingHelp Marketing Job Board</h3>
                    <p>Project released in 2018 as a free tool built for the marketing subs on Reddit. Each job post is manually reviewed for approval and completion.</p>
                    <p>Jobs posts can be viewed by category <i>(marketing, web design, social media, etc.)</i>, location, type <i>(freelance, fulltime, etc.)</i>, desk location <i>(remote, on-site, etc.)</i>, and company.</p>
                    <p>Built with Laravel <i>(PHP framework)</i>, Twitter Bootstrap <i>(CSS framework)</i>, and Font Awesome <i>(CSS icons)</i>.</p>
                    <p><a href="https://ineedmarketinghelp.com" target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i> INeedMarketingHelp.com</a></p>
                </div>
            </div>
            <div class="thumbnail" style="box-shadow: 0 4px 6px rgba(50,50,93,.11), 0 1px 3px rgba(0,0,0,.08);">
                <img src="images/iotpicker_01.png" alt="IOTPicker.com">
                <div class="caption">
                    <h3 style="">IotPicker.com</h3>
                    <p>Find compatible IoT devices, search by Manufacture, Category, Platform, or Protocol.</p>
                    <p>Built with: Laravel (PHP framework), Twitter Bootstrap (CSS framework), Font Awesome (CSS icons), JQuery (JS framework), and Mixitup (JQuery filter).</p>
                    <p><a href="https://iotpicker.com" target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i> IOTPicker.com</a></p>
                </div>
            </div>
            <div class="thumbnail" style="box-shadow: 0 4px 6px rgba(50,50,93,.11), 0 1px 3px rgba(0,0,0,.08);">
                <img src="images/PNF_01.jpg" alt="Peachs Neet Feet">
                <div class="caption">
                    <h3 style="">Peachs Neet Feet</h3>
                    <p>In 2012, I came across the <a href="https://www.youtube.com/watch?v=IB8Uvf9JqhM" target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i> Random Acts of Kindness Foundation’s video on PNF</a>. PNF’s purpose of bringing a small bit of joy to children who otherwise were going through some tough times really captivated me. Their idea of creating custom shoes with hand-painted art for the children was so simple, yet the impact was so huge to recipients.</p>
                    <p>I was inspired to do a random act of kindness, so I contacted PNF about their website. At the time, the website was a simple blog hosted on blogger. I pitched my idea of offering to build, host, and maintain a new site while they grew to help more children.</p>
                    <p>I feel humbled to be part of a great organization that is still going strong to this day.</p>
                    <p>For more information visit <a href="https://www.randomactsofkindness.org" target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i> randomactsofkindness.org</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6">
            <div class="thumbnail" style="box-shadow: 0 4px 6px rgba(50,50,93,.11), 0 1px 3px rgba(0,0,0,.08);">
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
                    <h3 style="">Project/Task Manager</h3>
                    <p>A custom-built project/task manager built for my personal use.</p>
                    <p>Allows for multiple projects with related tasks. Each project has access to it's own tasks, custom tags, requestor autosuggestion, and multiple views for open, closed, and all tasks.</p>
                    <p>Features include, tasks due-date highlighting based on current date. Tasks description field supports markdown formatting and common WYSIWYG options. Fast table column sorting and search for one or multiple keywords.</p>
                    <p>Built with Laravel <i>(PHP framework)</i>, Twitter Bootstrap <i>(CSS framework)</i>, and Font Awesome <i>(CSS icons)</i>.</p>
                </div>
            </div>
            <div class="thumbnail" style="box-shadow: 0 4px 6px rgba(50,50,93,.11), 0 1px 3px rgba(0,0,0,.08);">
                <img src="images/assetbox_01.png" alt="Asset Box">
                <div class="caption">
                    <h3 style="">Asset Box</h3>
                    <p>A custom built SAAS web application for computer, software, and mobile device inventory management.</p>
                    <p>Allows for teams to manage a company's inventory for easy check-in/check-out recording and inventory reporting with custom user permissions.</p>
                    {{-- <p><a href="https://www.youtube.com/watch?v=B4R1zH9-QF0" target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i> Video introduction</a></p> --}}
                    <p>Built with Codeigniter <i>(PHP framework)</i>, Twitter Bootstrap <i>(CSS framework)</i>, and Font Awesome <i>(CSS icons)</i>.</p>
                </div>
            </div>
            <div class="thumbnail" style="box-shadow: 0 4px 6px rgba(50,50,93,.11), 0 1px 3px rgba(0,0,0,.08);">
                <img src="images/thelolfansite_01.png" alt="The LOL Fan Site">
                <div class="caption">
                    <h3 style="">League of Legends Fan Site</h3>
                    <p>The LoL fan site, at the time, the only fan site dedicated to the creative types that love the game.</p>
                    <p>The site featured social elements found on Facebook, hence the unattractive “the league of legends social networking fan site” logo (I don’t know what I was thinking during naming). Site members could share status updates, post of friends “walls”, private message, upload images, etc.</p>
                    <p>The other features of the site lead, at the time, to the largest collection of fan written stories and art. The site had many writers submitting new and exclusive content for their fan base.</p>
                    <p>At last count, the site contained over 1,400 stories and over 3,000 pieces of art based around the games lore, characters, and events.</p>
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
