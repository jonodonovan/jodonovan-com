@if (session('status'))
    <div class="alert alert-success" style="padding:6px;margin-bottom:0px;">
        {{session('status')}}
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger alert-padding" role="alert">
        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach
    </div>
@endif
