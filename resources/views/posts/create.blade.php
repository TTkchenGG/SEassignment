@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/p" enctype="multipart/form-data" method="post">
            @csrf

                <div class="col-8 offset-2">
                    <div class = "row">
                        <h1>Add New Information</h1>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-4 col-form-label">Title :</label>
                            <input rows="15"
                                id="title"
                                type="text"
                                class="form-control @error('title') is-invalid @enderror"
                                name="title"
                                value="{{ old('title') }}"
                                autocomplete="title" autofocus
                            >
                        <br>
                        <label for="information" class="col-md-4 col-form-label">Information :</label>
                            <textarea rows="15"
                                     id="information"
                                     type="text"
                                     class="form-control @error('information') is-invalid @enderror"
                                     name="information"
                                     value="{{ old('information') }}"
                                     autocomplete="information" autofocus
                                     >
                                </textarea>

                            @error('information')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                            <div class=" pt-3">
                                <button class="btn btn-primary" href="/info">Add New Information</button>
                            </div>


                </div>

            </div>
        </form>
        </div>

       </div>

@endsection



