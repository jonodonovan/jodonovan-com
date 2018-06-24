@extends('layouts.app')

@section('title')About | Jon ODonovan @endsection
@section('style')
<style media="screen">
    @import url(https://fonts.googleapis.com/css?family=Open+Sans|Roboto);html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}nav{display:block}a{background-color:transparent}img{border:0}button{color:inherit;font:inherit;margin:0}button{overflow:visible}button{text-transform:none}button{-webkit-appearance:button}button::-moz-focus-inner{border:0;padding:0}*,:after,:before{-webkit-box-sizing:border-box;box-sizing:border-box}html{font-size:10px}body{font-family:Open Sans,sans-serif;font-size:14px;line-height:1.6;color:#636b6f;background-color:#fff}button{font-family:inherit;font-size:inherit;line-height:inherit}a{color:#3097d1;text-decoration:none}img{vertical-align:middle}.img-thumbnail{padding:4px;line-height:1.6;background-color:#fff;border:1px solid #ddd;border-radius:4px;display:inline-block;max-width:100%;height:auto}h2{font-family:inherit;font-weight:500;line-height:1.1;color:inherit}h2{margin-top:22px;margin-bottom:11px}h2{font-size:30px}p{margin:0 0 11px}ul{margin-top:0;margin-bottom:11px}blockquote{padding:11px 22px;margin:0 0 22px;font-size:17.5px;border-left:5px solid #eee}.container{margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px}.container:after,.container:before{content:" ";display:table}.container:after{clear:both}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1170px}}.row{margin-left:-15px;margin-right:-15px}.row:after,.row:before{content:" ";display:table}.row:after{clear:both}.col-md-4,.col-md-8,.col-xs-12{position:relative;min-height:1px;padding-left:15px;padding-right:15px}.col-xs-12{float:left}.col-xs-12{width:100%}@media (min-width:992px){.col-md-4,.col-md-8{float:left}.col-md-4{width:33.33333333%}.col-md-8{width:66.66666667%}.col-md-offset-2{margin-left:16.66666667%}}.collapse{display:none}.nav{margin-bottom:0;padding-left:0;list-style:none}.nav:after,.nav:before{content:" ";display:table}.nav:after{clear:both}.nav>li,.nav>li>a{position:relative;display:block}.nav>li>a{padding:10px 15px}.navbar{position:relative;min-height:50px;margin-bottom:22px;border:1px solid transparent}.navbar:after,.navbar:before{content:" ";display:table}.navbar:after{clear:both}@media (min-width:768px){.navbar{border-radius:4px}}.navbar-header:after,.navbar-header:before{content:" ";display:table}.navbar-header:after{clear:both}@media (min-width:768px){.navbar-header{float:left}}.navbar-collapse{overflow-x:visible;padding-right:15px;padding-left:15px;border-top:1px solid transparent;-webkit-box-shadow:inset 0 1px 0 hsla(0,0%,100%,.1);box-shadow:inset 0 1px 0 hsla(0,0%,100%,.1);-webkit-overflow-scrolling:touch}.navbar-collapse:after,.navbar-collapse:before{content:" ";display:table}.navbar-collapse:after{clear:both}@media (min-width:768px){.navbar-collapse{width:auto;border-top:0;-webkit-box-shadow:none;box-shadow:none}.navbar-collapse.collapse{display:block!important;height:auto!important;padding-bottom:0;overflow:visible!important}.navbar-fixed-top .navbar-collapse{padding-left:0;padding-right:0}}.navbar-fixed-top .navbar-collapse{max-height:340px}@media (max-device-width:480px) and (orientation:landscape){.navbar-fixed-top .navbar-collapse{max-height:200px}}.container>.navbar-collapse,.container>.navbar-header{margin-right:-15px;margin-left:-15px}@media (min-width:768px){.container>.navbar-collapse,.container>.navbar-header{margin-right:0;margin-left:0}}.navbar-fixed-top{position:fixed;right:0;left:0;z-index:1030}@media (min-width:768px){.navbar-fixed-top{border-radius:0}}.navbar-fixed-top{top:0;border-width:0 0 1px}.navbar-brand{float:left;padding:14px 15px;font-size:18px;line-height:22px;height:50px}@media (min-width:768px){.navbar>.container .navbar-brand{margin-left:-15px}}.navbar-toggle{position:relative;float:right;margin-right:15px;padding:9px 10px;margin-top:8px;margin-bottom:8px;background-color:transparent;background-image:none;border:1px solid transparent;border-radius:4px}.navbar-toggle .icon-bar{display:block;width:22px;height:2px;border-radius:1px}.navbar-toggle .icon-bar+.icon-bar{margin-top:4px}@media (min-width:768px){.navbar-toggle{display:none}}.navbar-nav{margin:7px -15px}.navbar-nav>li>a{padding-top:10px;padding-bottom:10px;line-height:22px}@media (min-width:768px){.navbar-nav{float:left;margin:0}.navbar-nav>li{float:left}.navbar-nav>li>a{padding-top:14px;padding-bottom:14px}}@media (min-width:768px){.navbar-right{float:right!important;margin-right:-15px}}.navbar-default{background-color:#fff;border-color:#e6e5e5}.navbar-default .navbar-brand{color:#777}.navbar-default .navbar-nav>li>a{color:#777}.navbar-default .navbar-toggle{border-color:#ddd}.navbar-default .navbar-toggle .icon-bar{background-color:#888}.navbar-default .navbar-collapse{border-color:#e6e5e5}@-ms-viewport{width:device-width}@media (max-width:767px){.hidden-xs{display:none!important}}@font-face{font-family:FontAwesome;src:url(/fonts/vendor/font-awesome/fontawesome-webfont.eot?674f50d287a8c48dc19ba404d20fe713);src:url(/fonts/vendor/font-awesome/fontawesome-webfont.eot?674f50d287a8c48dc19ba404d20fe713) format("embedded-opentype"),url(/fonts/vendor/font-awesome/fontawesome-webfont.woff2?af7ae505a9eed503f8b8e6982036873e) format("woff2"),url(/fonts/vendor/font-awesome/fontawesome-webfont.woff?fee66e712a8a08eef5805a46892932ad) format("woff"),url(/fonts/vendor/font-awesome/fontawesome-webfont.ttf?b06871f281fee6b241d60582ae9369b9) format("truetype"),url(/fonts/vendor/font-awesome/fontawesome-webfont.svg?912ec66d7572ff821749319396470bde) format("svg");font-weight:400;font-style:normal}.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.fa-user:before{content:"\F007"}.fa-home:before{content:"\F015"}.fa-pencil-square-o:before{content:"\F044"}.fa-users:before{content:"\F0C0"}.fa-terminal:before{content:"\F120"}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);border:0}.page-about li{margin-bottom:5px}blockquote{background-color:#f9f9f9}
</style>
@endsection
@section('body_style') @endsection

@section('content')
<div class="container page-about" style="margin-top:50px;padding-top:20px;padding-bottom:20px;font-weight: 100;font-size:1.2em;">
    <div class="row" style="margin-bottom:20px;">
        <div class="col-xs-12 col-md-8 col-md-offset-2">
            <h2 style="color:white;background-color:#2196F3;padding:20px;text-transform:uppercase;"><i class="fa fa-user" aria-hidden="true"></i> About</h2>
            <div class="row">
                <div class="col-md-4">
                    <img src="/images/jon_and_cat.jpg" name="aboutme" width="100%" border="0" class="hidden-xs img-thumbnail">
                    <a href='https://academy.hubspot.com/courses/inbound' title='Inbound (New)' target="_blank">
                        <img src='https://hubspot-academy.s3.amazonaws.com/prod/tracks/user-badges/24-910315-1529850977288.png' class="hidden-xs img-thumbnail"/>
                    </a>
                </div>
                <div class="col-xs-12 col-md-8">
                    <div>
                        <p>Jon O’Donovan is a professional marketer with over ten years experience with multiple aspects of digital marketing, specifically:</p>
                            <ul>
                                <li>print and digital advertising <i>(sem/ppc/display/social)</i> campaign execution and management <i>(Google Adwords certified)</i></li>
                                <li>social media management</li>
                                <li>web analytics and click tracking <i>(Google Analytics & Tag Manager certified)</i></li>
                                <li>email marketing including list management, design and development. <i>(Mailchimp & Salesforce)</i></li>
                                <li>search optimization <i>(SEO)</i> and local listing management (Google & Bing My Business)</li>
                                <li><a href="https://www.behance.net/jonodonovan" target="_blank">graphic design</a></li>
                                <li>customer service and reputation management</li>
                                <li><a href="/development" target="_self">web design and development</a></li>
                            </ul>
                        <p>Jon has a degree in electronics and eight years of experience in IT as a system and network administrator.</p>
                        <p>Additionally, Jon runs his own digital marketing consulting company <a href="https://verticalorbit.com/" target="_blank">Vertical Orbit</a>. Vertical Orbit will focus on providing professional assistance to companies seeking to resolve marketing and web development issues.</p>
                    </div>
                </div>
            </div>
            <blockquote cite="https://www.linkedin.com/in/jodonovan/">
                <i>"Jon is eager to listen, eager to learn about all aspects of the project he is working on, and quick to produce. Working with him was a pleasure." - <a href="https://www.linkedin.com/in/jodonovan" target="_blank">Taylor</a></i>
            </blockquote>
        </div>

    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2 style="color:white;background-color:#2196F3;padding:20px;text-transform:uppercase;">Professional Experience</h2>
            <div style="margin:10px 0">
                <h3>Marketing Coordinator - Nortrax <small style="font-style: italic;">A John Deere company</small></h3>
                <p style="font-style: italic;">2012 – Present</p>
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
                <h3>Owner - Vertical Orbit</h3>
                <p style="font-style: italic;">Aug 2007 – Present</p>
                <p>Marketing agency focused on:</p>
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
                <h3>Information Technology Manager & Webmaster - Pilot Bank</h3>
                <p style="font-style: italic;">2006 – 2012</p>
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
                <h3>Dairy and Frozen Food Manager - Winn-Dixie</h3>
                <p style="font-style: italic;">2002 – 2006</p>
                <ul>
                    <li>Department management and training</li>
                    <li>Customer service</li>
                    <li>Inventory and ordering management</li>
                </ul>
            </div>
            <hr width="50%">
            <div style="margin:10px 0">
                <h3>Party Coordinator & Game Tech - Malibu Grand Prix</h3>
                <p style="font-style: italic;">2000 – 2002</p>
                <ul>
                    <li>Event scheduling and inventory ordering</li>
                    <li>Customer service</li>
                    <li>Technical support for games and equipment</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2 style="color:white;background-color:#2196F3;padding:20px;text-transform:uppercase;">Volunteer Experience</h2>
            <div style="margin:10px 0">
                <h3><a href="/community" target="_self">Online Community Manager & Moderator</a> - Reddit</h3>
                <p>I create, manage, and participate in many online communities related to professional and personal interests spanning marketing and technology related topics. Moderation responsibilities consists of user support, on-going promotion of community discussion, and banning spammers.</p>
                <p>Communities combined receive over 100k views per month with over 100k subscribers/members.</p>
                <p>Top communities, based on subscribers, include <a href="https://www.reddit.com/r/marketing" target="_blank">/r/marketing</a>, <a href="https://www.reddit.com/r/advertising" target="_blank">/r/advertising</a>, <a href="https://www.reddit.com/r/webmarketing" target="_blank">/r/webmarketing</a>, <a href="https://www.reddit.com/r/analytics" target="_blank">/r/analytics</a>, and <a href="https://www.reddit.com/r/digital_marketing" target="_blank">/r/digital_marketing</a>.</p>
            </div>
            <div style="margin:10px 0">
                <h3>Volunteer - <a href="https://www.friendsofjoshuahouse.org/" target="_blank">Friends of Joshua House Foundation, Inc.</a></h3>
                <p>Joshua House is a safe haven for abused, abandoned, and neglected children, offering a therapeutic residential group care program that provides a protected, nurturing, family-like environment for children six - seventeen. These children have been removed from their homes due to crises and many have been through multiple foster homes.</p>
            </div>
            <div style="margin:10px 0">
                <h3>Volunteer - <a href="https://www.juniorachievement.org/web/ja-scpa/ja-biztown" target="_blank">JA Biztown Volunteer</a></h3>
                <p>Volunteers help bring the “economics of life to life” for local 5th grade students. You are placed in a business with 3 to 9 students and supervise as they operate their business for the day. The students have been prepared for their one-day experience at JA BizTown through 4 weeks of in-school teacher taught curriculum.</p>
            </div>
        </div>
    </div>
</div>
@endsection
