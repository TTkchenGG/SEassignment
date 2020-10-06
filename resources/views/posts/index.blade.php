@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="d-flex  align-items-baseline">
        <h1 style="padding-right: 550px"><b>Information</b></h1>
            <button class="btn1 btn btn-primary" style="width: 200px"><a href="/medicineInfo" style="color:white"> View Medicine Information </a></button>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button class="btn1 btn btn-primary" ><a href="/p/create" style="color:white" > Share Information </a></button>
        </div>

        @foreach($posts as $post)
        <div class = "row pt-3">
            <div class = "col-4">
                <div class="pt-3 d-flex justify-content-between align-items-baseline">
                    <h3>
                        <a href="/profile/{{$post->user->id}}">
                            <span class="text-dark pt-1">{{$post->user->username}}</span>
                        </a>
                    </h3>

                </div>
                    <div class="post">
                        <span class="d-flex justify-content-between align-items-baseline pl-2">{{$post->user->name}}
                        <a  style="padding-right: 10px; font-size: medium ">{{$post->user->role}}</a>
                        </span>
                        <h4 class="pt-2 pl-2 pr-2 "><b>{{$post->title}}</b></h4>
                        <p class=" pl-2 pr-2 pb-2">{{$post->information}}</p>
                    </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
