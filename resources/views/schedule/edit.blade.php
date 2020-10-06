@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="/{{$user->id}}/schedule" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')
            <h1><b>Edit Schedule</b></h1>
            <div class="appointment pl-3 pt-3">
                <h1>Appointment Date</h1>
                <div><b>Next Appointment Dates: <input id="appointment"
                                                       type="text"
                                                       class="form-control @error('appointment') is-invalid @enderror"
                                                       name="appointment"
                                                       value="{{ old('appointment') ?? $user->schedule->appointment}}"
                                                       autocomplete="appointment" autofocus
                        >

                        @error('appointment')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror</b> </div>

                <br>
                <div><b >Doctor: <input id="doctor"
                                        type="text"
                                        class="form-control @error('doctor') is-invalid @enderror"
                                        name="doctor"
                                        value="{{ old('doctor') ?? $user->schedule->doctor}}"
                                        autocomplete="doctor" autofocus
                        >

                        @error('doctor')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror</b></div>
                <br>
            </div>
            &nbsp;

            <div class="vaccination pl-3 pt-3">
                <h1>Vaccination Date</h1>
                <div><b>Vaccination Dates Available:<input id="vaccination"
                                                           type="text"
                                                           class="form-control @error('vaccination') is-invalid @enderror"
                                                           name="vaccination"
                                                           value="{{ old('vaccination') ?? $user->schedule->vaccination}}"
                                                           autocomplete="vaccination" autofocus
                        >

                        @error('vaccination')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror</b> </div>
                <br>
                <div><b >Note: You may choose one of the any date above for your vaccination session.</b></div>
                <br>
            </div>
            &nbsp;

                <div class=" pt-3">
                    <button class="btn btn-primary">Save Schedule</button>
                </div>
        </form>
    </div>


@endsection

