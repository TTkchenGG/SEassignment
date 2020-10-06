<?php

namespace App\Http\Controllers;

use App\Medicine;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;


class MedicinesController extends Controller
{
    public function index(){

        $medicines = Medicine::All()->sortByDesc('created_at');

        return view('posts.medicine', compact('medicines'));
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){


        return view('posts.editMedicine');
    }

    public function store(){

        $data = request()->validate([
            'medicineInfo' => 'required'
        ]);


        auth()->user()->medicines()->create([
            'medicineInfo' => $data['medicineInfo']
        ]);


        return redirect('/medicineInfo');
    }

    public function show(Medicine $medicines){
        return view('posts.medicine', compact('medicines'));
    }
}
