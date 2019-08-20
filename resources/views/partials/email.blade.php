<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="jumbotron" style="background-color:#2196F3;padding:20px;box-shadow: 0 4px 6px rgba(50,50,93,.11), 0 1px 3px rgba(0,0,0,.08);">
            <h3 style="color:white;font-size:2em;margin:0 0 10px 0;">Like this content? Get new post alerts.</h3>
            <form method="POST" action="{{route('email.submit')}}">
            {{csrf_field()}}
            <input type="hidden" name="post_slug" id="post_slug" value="{{$post->slug}}">
                <div class="form-group row" style="margin: 0 auto;text-align:center;">
                    <div class="col-xs-10" style="padding:0px 2px;">
                        <label class="sr-only" for="email">Email Address</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="{{old('email')}}" required>
                    </div>
                    <div class="col-xs-2" style="padding:0px 2px;">
                        <button type="submit" class="btn btn-main btn-md" style="background-color:white;">Add me!</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
