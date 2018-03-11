<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProfile;
use App\Http\Requests\UpdateProfile;

use App\User;
use App\Article;
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
    public function store(StoreProfile $data)
    {
        $profile = Profile::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'birth_date' => date('Y-m-d', strtotime($data['birth_date'])),
            'location' => $data['location'],
            'description' => $data['description'],
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
        $user = User::findOrFail($userId);
        return view('profiles.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfile $data, $userId)
    {
        $profile = Profile::where('user_id', $userId)->firstOrFail();
        $profile->first_name = $data['first_name'];
        $profile->last_name = $data['last_name'];
        $profile->birth_date = date('Y-d-m', strtotime($data['birth_date']));
        $profile->location = $data['location'];
        $profile->description = $data['description'];

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

    public function profileArticles($nickname) {
        $user = User::where('nickname', $nickname)->firstOrFail();
        $activeArticles = Article::where('user_id', $user->id)->get();
        $deletedArticles = Article::onlyTrashed()->where('user_id', $user->id)->get();
        return view('profiles.articles', ['user' => $user, 'activeArticles' => $activeArticles, 'deletedArticles' => $deletedArticles]);
    }
}
