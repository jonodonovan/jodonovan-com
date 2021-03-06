@extends('layouts.app')

@section('title')Professional Experience | Jon ODonovan @endsection
@section('style')
<style media="screen">
    @import url(https://fonts.googleapis.com/css?family=Open+Sans|Roboto);html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}nav{display:block}a{background-color:transparent}img{border:0}button{color:inherit;font:inherit;margin:0}button{overflow:visible}button{text-transform:none}button{-webkit-appearance:button}button::-moz-focus-inner{border:0;padding:0}*,:after,:before{-webkit-box-sizing:border-box;box-sizing:border-box}html{font-size:10px}body{font-family:Open Sans,sans-serif;font-size:14px;line-height:1.6;color:#636b6f;background-color:#fff}button{font-family:inherit;font-size:inherit;line-height:inherit}a{color:#3097d1;text-decoration:none}img{vertical-align:middle}.img-thumbnail{padding:4px;line-height:1.6;background-color:#fff;border:1px solid #ddd;border-radius:4px;display:inline-block;max-width:100%;height:auto}h2{font-family:inherit;font-weight:500;line-height:1.1;color:inherit}h2{margin-top:22px;margin-bottom:11px}h2{font-size:30px}p{margin:0 0 11px}ul{margin-top:0;margin-bottom:11px}blockquote{padding:11px 22px;margin:0 0 22px;font-size:17.5px;border-left:5px solid #eee}.container{margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px}.container:after,.container:before{content:" ";display:table}.container:after{clear:both}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1170px}}.row{margin-left:-15px;margin-right:-15px}.row:after,.row:before{content:" ";display:table}.row:after{clear:both}.col-md-4,.col-md-8,.col-xs-12{position:relative;min-height:1px;padding-left:15px;padding-right:15px}.col-xs-12{float:left}.col-xs-12{width:100%}@media (min-width:992px){.col-md-4,.col-md-8{float:left}.col-md-4{width:33.33333333%}.col-md-8{width:66.66666667%}.col-md-offset-2{margin-left:16.66666667%}}.collapse{display:none}.nav{margin-bottom:0;padding-left:0;list-style:none}.nav:after,.nav:before{content:" ";display:table}.nav:after{clear:both}.nav>li,.nav>li>a{position:relative;display:block}.nav>li>a{padding:10px 15px}.navbar{position:relative;min-height:50px;margin-bottom:22px;border:1px solid transparent}.navbar:after,.navbar:before{content:" ";display:table}.navbar:after{clear:both}@media (min-width:768px){.navbar{border-radius:4px}}.navbar-header:after,.navbar-header:before{content:" ";display:table}.navbar-header:after{clear:both}@media (min-width:768px){.navbar-header{float:left}}.navbar-collapse{overflow-x:visible;padding-right:15px;padding-left:15px;border-top:1px solid transparent;-webkit-box-shadow:inset 0 1px 0 hsla(0,0%,100%,.1);box-shadow:inset 0 1px 0 hsla(0,0%,100%,.1);-webkit-overflow-scrolling:touch}.navbar-collapse:after,.navbar-collapse:before{content:" ";display:table}.navbar-collapse:after{clear:both}@media (min-width:768px){.navbar-collapse{width:auto;border-top:0;-webkit-box-shadow:none;box-shadow:none}.navbar-collapse.collapse{display:block!important;height:auto!important;padding-bottom:0;overflow:visible!important}.navbar-fixed-top .navbar-collapse{padding-left:0;padding-right:0}}.navbar-fixed-top .navbar-collapse{max-height:340px}@media (max-device-width:480px) and (orientation:landscape){.navbar-fixed-top .navbar-collapse{max-height:200px}}.container>.navbar-collapse,.container>.navbar-header{margin-right:-15px;margin-left:-15px}@media (min-width:768px){.container>.navbar-collapse,.container>.navbar-header{margin-right:0;margin-left:0}}.navbar-fixed-top{position:fixed;right:0;left:0;z-index:1030}@media (min-width:768px){.navbar-fixed-top{border-radius:0}}.navbar-fixed-top{top:0;border-width:0 0 1px}.navbar-brand{float:left;padding:14px 15px;font-size:18px;line-height:22px;height:50px}@media (min-width:768px){.navbar>.container .navbar-brand{margin-left:-15px}}.navbar-toggle{position:relative;float:right;margin-right:15px;padding:9px 10px;margin-top:8px;margin-bottom:8px;background-color:transparent;background-image:none;border:1px solid transparent;border-radius:4px}.navbar-toggle .icon-bar{display:block;width:22px;height:2px;border-radius:1px}.navbar-toggle .icon-bar+.icon-bar{margin-top:4px}@media (min-width:768px){.navbar-toggle{display:none}}.navbar-nav{margin:7px -15px}.navbar-nav>li>a{padding-top:10px;padding-bottom:10px;line-height:22px}@media (min-width:768px){.navbar-nav{float:left;margin:0}.navbar-nav>li{float:left}.navbar-nav>li>a{padding-top:14px;padding-bottom:14px}}@media (min-width:768px){.navbar-right{float:right!important;margin-right:-15px}}.navbar-default{background-color:#fff;border-color:#e6e5e5}.navbar-default .navbar-brand{color:#777}.navbar-default .navbar-nav>li>a{color:#777}.navbar-default .navbar-toggle{border-color:#ddd}.navbar-default .navbar-toggle .icon-bar{background-color:#888}.navbar-default .navbar-collapse{border-color:#e6e5e5}@-ms-viewport{width:device-width}@media (max-width:767px){.hidden-xs{display:none!important}}@font-face{font-family:FontAwesome;src:url(/fonts/vendor/font-awesome/fontawesome-webfont.eot?674f50d287a8c48dc19ba404d20fe713);src:url(/fonts/vendor/font-awesome/fontawesome-webfont.eot?674f50d287a8c48dc19ba404d20fe713) format("embedded-opentype"),url(/fonts/vendor/font-awesome/fontawesome-webfont.woff2?af7ae505a9eed503f8b8e6982036873e) format("woff2"),url(/fonts/vendor/font-awesome/fontawesome-webfont.woff?fee66e712a8a08eef5805a46892932ad) format("woff"),url(/fonts/vendor/font-awesome/fontawesome-webfont.ttf?b06871f281fee6b241d60582ae9369b9) format("truetype"),url(/fonts/vendor/font-awesome/fontawesome-webfont.svg?912ec66d7572ff821749319396470bde) format("svg");font-weight:400;font-style:normal}.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.fa-user:before{content:"\F007"}.fa-home:before{content:"\F015"}.fa-pencil-square-o:before{content:"\F044"}.fa-users:before{content:"\F0C0"}.fa-terminal:before{content:"\F120"}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);border:0}.page-about li{margin-bottom:5px}blockquote{background-color:#f9f9f9}
</style>
@endsection
@section('body_style') @endsection

@section('content')
<div class="container page-about" style="margin-top:50px;padding-top:20px;font-weight: 100;font-size:1.2em;">
	<div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2">
            <h1 style="color:white;background-color:#2196F3;padding:20px;text-transform:uppercase;">Professional Experience</h1>
            <blockquote cite="https://www.linkedin.com/in/jodonovan/">
                <i>"Jon is eager to listen, eager to learn about all aspects of the project he is working on, and quick to produce. Working with him was a pleasure." - <a href="https://www.linkedin.com/in/jodonovan" target="_blank">Taylor</a></i>
            </blockquote>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div style="margin:10px 0">
                <h3><b>Digital Marketing Manager</b> - SunView Software <small style="font-size:85%;font-style: italic;">ITSM Software</small></h3>
                <p style="font-size:85%;font-style: italic;">March 2020 – Present</p>

            </div>
			<hr width="50%">
			<div>
                <h3><b>Digital Marketing Manager</b> - The Food Group <small style="font-size:85%;font-style: italic;">marketing agency</small></h3>
                <p style="font-size:85%;font-style: italic;">2018 – 2020</p>
                <p>Digital marketing lead working closely with internal teams and agency clients to scope, plan, execute, and QA all digital related projects including email, website optimization and SEO, website and landing page development, UI/UX, lead generation and nurturing, and marketing automation and CRM.</p>

                <p>About The Food Group</p>
                <p>WE TAKE FOOD BRANDS AND CREATE STORYTELLING OPPORTUNITIES<br>
                Our approach is strategically driven, creatively focused, technologically friendly and food obsessed. With breakthrough thinking and our proprietary data-driven approach, we drive results through our unique understanding of the complex relationship between people and food. We’ve got the case studies to demonstrate our expertise in Food & Beverage Marketing and we leverage this expertise to be a point of difference for The Food Group.</p>
            </div>
            <hr width="50%">
            <div style="margin:10px 0">
                <h3><b>Owner</b> - Vertical Orbit</h3>
                <p style="font-size:85%;font-style: italic;">2007 – Present</p>
                <p>Digital marketing agency focused on:</p>
                <ul>
                    <li>Digital Advertising (SEM) & Social Media Advertising</li>
                    <li>Website & Web App Development</li>
                    <li>Website Analytics & SEO</li>
                    <li>Email Marketing</li>
                    <li>Graphic Design</li>
                </ul>
            </div>
			<hr width="50%">
            <div style="margin:10px 0">
                <h3><b>Marketing Coordinator</b> - Nortrax <small style="font-size:85%;font-style: italic;">a John Deere company</small></h3>
                <p style="font-size:85%;font-style: italic;">2012 – 2018</p>
                <ul>
                    <li>Planning, budgeting, and executing online advertising campaigns to improve lead generation and brand awareness utilizing Google Adwords and social media platforms.</li>
                    <li>Manages, plans, and creates content across multiple social media platforms.</li>
                    <li>Planning, designing, database/list management, coding, and analytical reporting for domestic and international promotional and transactional emails.</li>
                    <li>Managing website analytics and click tracking through Google Analytics, Tag Manager, and Webmaster Tools</li>
                    <li>Built and manages local online listings through Google and Bing maps for over 50 locations throughout NA.</li>
                    <li>Print/digital graphic design for internal collateral and advertising. Adobe Photoshop, InDesign, and Illustrator.</li>
                </ul>
            </div>
            <blockquote cite="https://www.linkedin.com/in/jodonovan">
                <i>"Jon is a true talent. I first worked with him as an IT Specialist while I held the position of Corporate Event Coordinator. It didn’t matter what crazy idea for an event or meeting I asked him for he made it happen. Later, I was fortunate enough to have Jon join the marketing department where we worked side by side. He is an asset from web site development to social media. Oh, he also has a great sense of humor. In the 5 years I worked with Jon he made me laugh during the days when we needed it most. If you have the opportunity to hire Jon don’t hesitate." - <a href="https://www.linkedin.com/in/jodonovan" target="_blank">Helene</a></i>
            </blockquote>
            <blockquote cite="https://www.linkedin.com/in/jodonovan">
                <i>"I worked with Jon during my time at Nortrax where he helped me develop marketing material for recruiting efforts. He is helpful and knowledgeable on many areas of marketing but his knowledge of social media strategies and how to use them to benefit the business was by far the most I learned from him during my time at Nortrax. Jon is a team player and he would fit in well anywhere regardless of the work environment. He can work independently or in a group dynamic - you would not go wrong having him on your team." - <a href="https://www.linkedin.com/in/jodonovan" target="_blank">Claudia</i></a>
            </blockquote>
            <hr width="50%">
            <div style="margin:10px 0">
                <h3><b>Information Technology Manager & Webmaster</b> - Pilot Bank</h3>
                <p style="font-size:85%;font-style: italic;">2006 – 2012</p>
                <ul>
                    <li>Data & telecom Networking and systems management</li>
                    <li>Application management and support</li>
                    <li>Inventory control</li>
                    <li>Vendor management</li>
                    <li>Web design & development</li>
                </ul>
            </div>
            <blockquote cite="https://www.linkedin.com/in/jodonovan">
                <i>"Jonathan is one of those great IT people, responsive and knowledgeable. If he doesn't have a solution to the problem he researches and finds the solution. For Jonathan it's not just about IT, he will volunteer to led a hand wherever needed. I would recommend Jon, a great employee." <br> - <a href="https://www.linkedin.com/in/jodonovan" target="_blank">Laura</a></i>
            </blockquote>
            <hr width="50%">
            <div style="margin:10px 0">
                <h3><b>Dairy and Frozen Food Manager</b> - Winn-Dixie</h3>
                <p style="font-size:85%;font-style: italic;">2002 – 2006</p>
                <ul>
                    <li>Department management and training</li>
                    <li>Customer service</li>
                    <li>Inventory and ordering management</li>
                </ul>
            </div>
            <hr width="50%">
            <div style="margin:10px 0">
                <h3><b>Party Coordinator & Game Tech</b> - Malibu Grand Prix</h3>
                <p style="font-size:85%;font-style: italic;">2000 – 2002</p>
                <ul>
                    <li>Event scheduling and inventory ordering</li>
                    <li>Customer service</li>
                    <li>Technical support for games and equipment</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
