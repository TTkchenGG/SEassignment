@extends('layouts.app')

@section('content')


<div class="container">
    <h1>User Profile</h1>
        <div class="profile1 d-flex">
        <div class="col-9 ">
            <div >
                <h2>{{$user->name ?? 'N/A'}}</h2>
            </div>
                <div>
                <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>

            </div>
                <div class="pt-4 " ><b>Role: {{$user->role ?? 'N/A'}}</b></div>
                <div><b>Age:    {{$user->profile->age ?? 'N/A' }}</b></div>
                <div><b>Status: {{$user->profile->status  ?? 'N/A'}}</b></div>
            <br>
            @can('update', $user->profile)
                <button class="btn btn-primary"><a href="/profile/{{$user->id}}/edit" style="color:white"> Edit Profile </a></button>
            @endcan
        </div>
            <div>
            <img src="https://thumbs.dreamstime.com/t/mother-baby-stylized-vector-symbol-mom-hugs-her-child-icon-design-happy-s-day-concept-illustration-isolated-white-114320264.jpg" style="padding-top:10px; padding-right:40pt; width:140px;height:90px;">
            </div>

        </div>

        <div class="pt-5">
            <h2>Your Posts</h2>
            <br>
            @foreach($user->posts as $post)
                <button class="btn btn-primary"><a href="/p/{{$post->id}}" style="color:white"> Shared Post</a></button>
                @endforeach
        </div>
</div>
@endsection
