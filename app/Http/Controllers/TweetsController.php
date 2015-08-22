<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Tweet;
use App\User;
use Auth;
use Illuminate\Http\Request;

class TweetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::all();
        $tweets = Auth::user()->timeline()->paginate(20);

        return view('tweets.index', [
            'tweets' => $tweets,
            'users' => $users,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        Auth::user()->tweets()->create([
            'message' => $request->input('tweet'),
        ]);

        return redirect('tweets');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $tweet = Tweet::findOrFail($id);

        return view('tweets.show', [
            'tweet' => $tweet,
        ]);
    }
}
