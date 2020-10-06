@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="/medicineInfo" enctype="multipart/form-data" method="post">
            @csrf

            <div class="col-8 offset-2">
                <div class = "row">
                    <h1><b>Add Medicine Information</b></h1>
                </div>
                <div class="form-group row">
                    <label for="medicineInfo" class="col-md-4 col-form-label">Edit here :</label>
                    <textarea
                        rows="15"
                        id="medicineInfo"
                           type="text"
                           class="form-control @error('medicineInfo') is-invalid @enderror"
                           name="medicineInfo"
                           value="{{ old('medicineInfo') }}"
                           autocomplete="medicineInfo" autofocus
                    >
                    </textarea>

                    @error('medicineInfo')
                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                    @enderror
                </div>
                <div class=" pt-3">
                    <button class="btn btn-primary">Add Medicine Information</button>
                </div>



            </div>
@endsection
