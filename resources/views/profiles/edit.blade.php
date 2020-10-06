@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')
            <div class="col-8 offset-2">
                <div class = "row">
                    <h1><b>Edit Profile</b></h1>
                </div>
                <div class="form-group row">
                    <label for="age" class="col-md-4 col-form-label">Age :</label>
                    <input id="age"
                           type="text"
                           class="form-control @error('age') is-invalid @enderror"
                           name="age"
                           value="{{ old('age') ?? $user->profile->age}}"
                           autocomplete="age" autofocus
                    >

                    @error('age')
                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="status" class="col-md-4 col-form-label">Status (Pre/Post Natal) :</label>
                    <input id="status"
                           type="text"
                           class="form-control @error('status') is-invalid @enderror"
                           name="status"
                           value="{{ old('status') ?? $user->profile->status}}"
                           autocomplete="status" autofocus
                    >

                    @error('status')
                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                    @enderror
                </div>
                    <div class=" pt-3">
                        <button class="btn btn-primary">Save Profile</button>
                    </div>



    </div>
@endsection
