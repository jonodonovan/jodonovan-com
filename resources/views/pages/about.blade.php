@extends('layouts.app')

@section('title')Jonathan ODonovan | about @endsection
@section('body_style') @endsection

@section('content')
<div class="container" style="margin-top:50px;padding-top:20px;padding-bottom:20px;">
    <div class="row" style="margin-bottom:20px;">
        <div class="col-xs-12 col-md-8 col-md-offset-2">
            <h2 style="color:white;background-color:#2196F3;padding:20px;text-transform:uppercase;">About</h2>
            <div class="row">
                <div class="col-md-4">
                    <img src="/images/jon_and_cat.jpg" name="aboutme" width="100%" border="0" class="hidden-xs img-thumbnail">
                </div>
                <div class="col-xs-12 col-md-8">
                    <div style="font-weight: 100;font-size: 1.7em;line-height:1.4;">
                        <p>Jon O’Donovan is a professional marketer. He has experience with the following:</p>
                            <ul>
                                <li>graphic design</li>
                                <li>print and digital advertising</li>
                                <li>social media</li>
                                <li>web analytics and click tracking</li>
                                <li>email marketing including list management, design and development</li>
                                <li>customer service and reputation management</li>
                                <li>search optimization and local listing management</li>
                                <li>web design and development</li>
                            </ul>
                        <p>Jon has a degree in electronics and eight years of experience in IT as a systems and network administrator.</p>
                        {{-- <p>Additionally, Jon is in the process of building <a href="https://verticalorbit.com/" target="_blank">Verctical Orbit</a>, his own marketing and development agency. Vertical Orbit will focus on providing professional assistance to companies seeking to resolve marketing and web development issues.</p> --}}
                        <p>He also has over ten years experience as a web developer working with HTML, CSS, and PHP.</p>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2 style="color:white;background-color:#2196F3;padding:20px;text-transform:uppercase;">Professional Experience</h2>
            {{-- <div style="margin:10px 0">
                <h3><img src="/images/logo_v.png" name="verticalorbit" width="50px" border="0" class="hidden-xs"> Vertical Orbit</h3>
                <p style="font-style: italic;">Aug 2017 – Present</p>
                <p>Marketing agency focused on:</p>
                <ul>
                    <li>Social Media Advertising</li>
                    <li>Search Advertising</li>
                    <li>Website Analytics & Click Tracking</li>
                    <li>Web & Web App Development</li>
                    <li>Email Marketing</li>
                    <li>Graphic Design</li>
                </ul>
            </div> --}}
            <div style="margin:10px 0">
                <h3>Marketing Coordinator - Nortrax <small style="font-style: italic;">A John Deere company</small></h3>
                <p style="font-style: italic;">Jun 2014 – Present</p>
                <ul>
                    <li>Print/digital graphic design for internal collateral and advertising. Adobe Photoshop, InDesign, and Illustrator.</li>
                    <li>Social media management <span style="font-style: italic;">(planning, execution, community management, and reporting for Facebook, Instagram, Twitter, LinkedIn, and YouTube).</span></li>
                    <li>Email marketing including content creation and code.</li>
                    <li>Digital advertising <span style="font-style: italic;">(social media platforms & Google search, display, and remarketing).</span></li>
                    <li>Website management <span style="font-style: italic;">(development, maintenance, and analytical reporting).</span></li>
                    <li>Reputation management and online customer support <span style="font-style: italic;">(Google and Bing business listings, social media, and other customer touch points).</span></li>
                </ul>
            </div>
            <div style="margin:10px 0">
                <h3>IT Specialist - Nortrax <small style="font-style: italic;">A John Deere company</small></h3>
                <p style="font-style: italic;">Mar 2012 – Jun 2014</p>
                <ul>
                    <li>IT helpdesk support, project management, and systems management throughout North America.</li>
                    <li>Subject-matter expert for IT ticketing/task/change management system, SharePoint 2007/10 sites, corporate computer backup systems, and computer, mobile, and cellular device inventory life cycle, from storage to recycling.</li>
                </ul>
            </div>
            <div style="margin:10px 0">
                <h3>Information Technology Manager & Webmaster - Pilot Bank</h3>
                <p style="font-style: italic;">2006 – Jan 2012</p>
                <ul>
                    <li>Data & telecom Networking and systems management</li>
                    <li>Application management and support</li>
                    <li>Inventory control</li>
                    <li>Vendor management</li>
                    <li>Web design & development</li>
                </ul>
            </div>
            <blockquote>
                "Jonathan is one of those great IT people, responsive and knowledgeable. If he doesn't have a solution to the problem he researches and finds the solution. For Jonathan it's not just about IT, he will volunteer to led a hand wherever needed. I would recommend Jon, a great employee."
            </blockquote>
            <div style="margin:10px 0">
                <h3>Dairy and Frozen Food Manager - Winn-Dixie</h3>
                <p style="font-style: italic;">2002 – Jan 2006</p>
                <ul>
                    <li>Department management and training</li>
                    <li>Customer service</li>
                    <li>Inventory and ordering management</li>
                </ul>
            </div>
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
                <h3>Online Community Manager & Moderator - <a href="" target="_blank">Reddit</a></h3>
                <p>I create, manage, and participate in many online communities related to professional and personal interests spanning marketing and technology related topics. Moderation responsibilities consists of user support, on-going promotion of community discussion, banning spammers, and the nurturing of professional communities on Reddit.</p>
                <p>Communities combined receive over 100k views per month with over 100k subscribers/members.</p>
                <p>Top communities based on subscribers include /r/marketing, /r/advertising, /r/webmarketing, /r/analytics, and /r/digital_marketing.</p>
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
