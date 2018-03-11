<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use App\Http\Requests\ProfileFormRequest;

use App\User;
use Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($nickname)
    {
        $user = User::where('nickname', $nickname)->firstOrFail();

        return view('profiles.index', ['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfileFormRequest $request)
    {
        $profile = Profile::create([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'birth_date' => $request['birth_date'],
            'location' => $request['location'],
            'description' => $request['description'],
            'user_id' => Auth::id(),
        ]);

        return redirect()->back()->with('success', 'Votre profile a bien été créé!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit($userId)
    {
        return view('profiles.edit', ['userId' => $userId]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileFormRequest $request, $userId)
    {
        $profile = Profile::where('user_id', $userId)->firstOrFail();
        $profile->first_name = $request['first_name'];
        $profile->last_name = $request['last_name'];
        $profile->birth_date = date('Y-m-d H:i', strtotime($request['birth_date'].' 00:00:00'));
        $profile->location = $request['location'];
        $profile->description = $request['description'];

        $profile->update();

        return redirect()->back()->with('success', 'Votre profile a été mis à jour!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
