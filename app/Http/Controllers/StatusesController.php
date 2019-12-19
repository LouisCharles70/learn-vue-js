<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Status;

class StatusesController extends Controller
{
    public function index(){
        return Status::with('user')->latest()->get();
    }

    public function store(Request $request){
        //Middleware

        //Validation
        $this->validate($request, ['body' => 'required']);

        //Create the status

        $status = User::find(1)
            ->statuses()
            ->create($request->only(['body']));
        //Return it, and also include the user
        return $status->load('user');
    }
}
