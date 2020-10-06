@extends('layouts.app')

@section('content')

    <div class="view container">
    <div class="row">
        <div class="profile">
            <h1 class="pl-5 " style="font-size: 40pt">View <br> Profile</h1>
            <div class="pl-5">
            <button class="btn btn-primary "><a href="/profile/{{Auth::user()->id}}" style="color:white"> Click Here</a></button>
                <br><br><br>
                <div><b >Note: You may view and edit your profile here.</b></div>
            </div>
        </div>
        <br>
        &nbsp;
        @if(Auth::user()->role == 'Father' || Auth::user()->role == 'Mother' || Auth::user()->role == 'Admin')
        <div class="schedule" >
            <h1 class="pl-5 " style="font-size: 40pt">View Schedule</h1>
            <div class="pl-5">
             <button class="btn btn-primary "><a href="/{{Auth::user()->id}}/schedule" style="color:white"> Click Here</a></button>
                <br><br><br>
                <div><b >Note: You may view and edit your schedule here.</b></div>
            </div>
        </div>
        <br>
        @endif
        &nbsp;
        &nbsp;
        <div class="information ">
            <h1 class="pl-5 "style="font-size: 40pt">View Information</h1>
            <div class="pl-5">
             <button class="btn btn-primary "><a href="/info" style="color:white"> Click Here</a></button>
                <br><br><br>
                <div><b style="alignment: left">Note: You may share and view informations here.</b></div>
                </div>
        </div>
    </div>

    </div>
@endsection
