@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Contacts Admin</h1>
            <ul>
                @foreach ($contacts as $contact)
                    <li>{{$contact->name}}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
