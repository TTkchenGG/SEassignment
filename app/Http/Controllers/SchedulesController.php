<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class SchedulesController extends Controller
{
    public function index(User $user)
    {
        return view('schedule.view', compact('user'));
    }

    public function edit(User $user){

        $this->authorize('update',$user->schedule);

        return view('schedule.edit', compact('user'));

    }

    public function update(User $user){

        $this->authorize('update',$user->schedule);

        $data = request()->validate([
            'appointment' => '',
            'doctor' => '',
            'vaccination' => '',
        ]);

        auth()->user()->schedule->update($data);

        return redirect("/{$user->id}/schedule");
    }
}
