@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-baseline">
        <h1>Medicine Information</h1>
    @if(Auth::user()->role == 'Medical Practitioner' || Auth::user()->role == 'Admin')
    <button class="btn1 btn btn-primary" style="width: 200px"><a href="/medicineInfo/create" style="color:white"> Add Medicine Information </a></button>
    @endif
</div>
@foreach($medicines as $medicine)
    <div class = "row pt-3">
    <div class = "col-4">
        <div class="post">
            <h4 class="pt-2 pl-2 pr-2 "><b>Dr. {{$medicine->user->name}}</b></h4>
            <p class="pl-2 pr-2 pb-2">{{$medicine->medicineInfo}}</p>
        </div>
    </div>
</div>
@endforeach
</div>
@endsection
