@extends('layouts.app')

@section('content')

    <div class="view container">
        <h1 style="font-size: 40pt">Schedule</h1>
        <div class="appointment pl-3 pt-3">
            <h1>Appointment Date</h1>
            <div><b>Next Appointment Dates: {{$user->schedule->appointment ?? 'N/A'}}</b> </div>

            <br>
            <div><b >Doctor: {{$user->schedule->doctor ?? 'N/A'}}</b></div>
            <br>
        </div>
        &nbsp;

        <div class="vaccination pl-3 pt-3">
            <h1>Vaccination Date</h1>
            <div><b>Vaccination Dates Available: {{$user->schedule->vaccination ?? 'N/A'}}</b> </div>
            <br>
            <div><b >Note: You may choose one of the any date above for your vaccination session.</b></div>
            <br>
        </div>
        &nbsp;

        <div class="clinic pl-3 pt-3">
            <h1>Clinic Working Hours</h1>
            <div><b>Clinic Working Hours: Monday - Friday (9 A.M. - 8 P.M.)</b> </div>
            <div><b style="padding-left: 199px">Saturday - Sunday (9 A.M. - 3 P.M.)</b></div>
            <br>
            <div><b >Note: Clinic close on public holiday.</b></div>
            <br>
        </div>


    <div class="pt-3">
        @can('update', $user->schedule)
        <button class="btn btn-primary "><a href="/{{Auth::user()->id}}/editschedule" style="color:white"> Edit Schedule</a></button>
        @endcan
    </div>
    </div>
@endsection
