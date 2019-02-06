{{-- extends app.blade.php default templage from layouts folder --}}
@extends('layouts.app')
<style type="text/css">
    .profileImg{
        max-width:150px;
        border:5px solid #fff;
        border-radius: 100%;
        box-shadow: 0 2px 2px 0 rgba(0,0,0,0.3);
    }
</style>
@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="pannel-body text-center">
                <img class="profileImg" src="http://www.lovemarks.com/wp-content/uploads/profile-avatars/default-avatar-parrot-pirate.png" >
                <h1>{{$user->name}}</h1>
                <h5>{{ $user->dob->age }} </h5>
                <h5>Birthday {{ $user->dob->format('j F Y') }} </h5>
                <h5>{{$user->email}}</h5>
                <button class="btn btn-success">Follow</button>
            </div>
        </div>
    </div>
</div>
@endsection