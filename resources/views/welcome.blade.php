@extends('layouts.app')

@section('content')
<div class="container" style="margin-top:50px;">
    <div class="row" style="padding:10px;">
        <div class="col-md-8 col-md-offset-2 text-center">
            @include('partials.alerts')
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="lead">
                <img class="user">
                <h1 style="font-size: 3em;">Hi! I'm <a href="{{url('about')}}">Jon ODonovan</a>, a Marketer, Designer, and Web Developer.</h1>
                <p class="sublinks"><a href="/about">About</a> | <a href="/development">Development</a> | <a href="/community">Community</a> | <a href="/weblog">Weblog</a></p>
            </div>
        </div>
        <br>
        <div class="col-md-4">
            <div class="jumbotron" style="background-color:#2196F3;padding:20px;box-shadow: 0 4px 6px rgba(50,50,93,.11), 0 1px 3px rgba(0,0,0,.08);">
                <h3 style="color:white;font-size:3em;text-align:center;margin:10px 0px;">Let's get in touch</h3>
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
    <div class="row" style="margin-bottom:50px;">
        <div class="col-md-10 col-md-offset-1 text-center">
            <h4>Where you can find me online:</h4>
            <div style="position: relative; z-index: 2;">
                <a href="https://linkedin.com/in/jodonovan" target="_blank"><buton class="btn btn-default btn-sm" style="margin:3px;"><i class="fa fa-linkedin"></i> LinkedIn</buton></a>
                <a href="https://www.behance.net/jonodonovan" target="_blank"><buton class="btn btn-default btn-sm" style="margin:3px;"><i class="fa fa-behance"></i> Behance</buton></a>
                <a href="https://github.com/jonodonovan" target="_blank"><buton class="btn btn-default btn-sm" style="margin:3px;"><i class="fa fa-github"></i> Github</buton></a>
                <a href="https://twitter.com/jonodonovan" target="_blank"><buton class="btn btn-default btn-sm" style="margin:3px;"><i class="fa fa-twitter"></i> Twitter</buton></a>
                {{-- <a href="https://www.youtube.com/user/jonodonovan" target="_blank"><buton class="btn btn-default btn-sm" style="margin:3px;"><i class="fa fa-youtube"></i> YouTube</buton></a> --}}
                {{-- <a href="https://plus.google.com/u/0/+JonathanODonovan" target="_blank"><buton class="btn btn-default btn-sm  style="margin:3px;"btn-twitter"><i class="fa fa-google-plus"></i> Google+</buton></a> --}}
                <a href="https://reddit.com/user/JonODonovan/" target="_blank"><buton class="btn btn-default btn-sm" style="margin:3px;"><i class="fa fa-reddit"></i> Reddit</buton></a>
                <a href="https://verticalorbit.com" target="_blank"><buton class="btn btn-default btn-sm" style="margin:3px;"><img src="/images/logo_v.png" name="verticalorbit" width="15px" border="0" class="hidden-xs"> Vertical Orbit</buton></a>
            </div>
        </div>
    </div>
</div>
@endsection
