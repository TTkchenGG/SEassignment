@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Your Post</h1>
       <div class = "row pt-1">
            <div class = "col-4">
                <div class="pt-1 d-flex justify-content-between align-items-baseline">
                    <h3>cd
                        <a href="/profile/{{$post->user->id}}">
                            <span class="text-dark pt-1">{{$post->user->username}}</span>
                        </a>
                    </h3>

                </div>
                <div class="post">
                        <span class="d-flex justify-content-between align-items-baseline pl-2">{{$post->user->name}}
                        <a  style="padding-right: 10px; font-size: medium ">{{$post->user->role}}</a>
                        </span>
                    <h4 class="pt-2 pl-2 pr-2"><b>{{$post->title}}</b></h4>
                    <p class="pl-2 pr-2 pb-2">{{$post->information}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection

