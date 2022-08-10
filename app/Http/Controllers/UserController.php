<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStorRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStorRequest $request)
    {
        // Will return only validated data
        $request->validated();


        // Append users id to comment
        $user = User::find($request->id);
        $user->comments .= $request->comments;
        $user->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pages/user', [
            'user' => User::findOrFail($id)
        ]);
    }
}
