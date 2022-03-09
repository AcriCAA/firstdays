<?php

namespace App\Http\Controllers;

use App\Auth;
use App\Post;
use Carbon\Carbon;
use DateTimeZone;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //
    public function index()
    {
        $id = \Auth::user()->id;
        //db call to get all the rows in the tasks table using Eloquent model
        $posts = Post::where('user_id', $id)->orderBy('timelogged_timestamp', 'DESC')->get();

        // echo '<pre>';
        // var_dump($posts);
        // echo '</pre>';
        return view('posts.index', compact('posts'));
    }

    public function counts()
    {
        $id = \Auth::user()->id;
        //db call to get all the rows in the tasks table using Eloquent model
        $peecounts = Post::where('user_id', $id)
        ->where('pee', '>', 0)

        ->selectRaw('
			day(timelogged_timestamp) day, 
			monthname(timelogged_timestamp) month, 
			count(*) pee'
        )
        ->groupBy('month')
        ->get();

        $poopcounts = Post::where('user_id', $id)
        ->where('poop', '>', 0)
        ->selectRaw('
			day(timelogged_timestamp) day, 
			monthname(timelogged_timestamp) month, 
			count(*) poop'
        )
        ->groupBy('month')
        ->get();

        // echo '<pre>';
        // var_dump($posts);
        // echo '</pre>';
        return view('posts.counts', compact('peecounts', 'poopcounts'));
    }

    public function show(Post $post)
    {
        return view('posts.postsingle', compact('post'));
    }

    public function edit(Post $post)
    {

   // Load user/createOrUpdate.blade.php view
        return view('posts.edit', compact('post'));
    }

    public function update(Post $post)
    {
        $this->validate(request(), [
            //edit these to coressponding user fields
            'datetime' => 'date_format:Y-m-d g:i A',

        ]);

        if (request('pee') == 'on') {
            $pee = 1;
        } else {
            $pee = 0;
        }

        if (request('poop') == 'on') {
            $poop = 1;
        } else {
            $poop = 0;
        }

        $date_from_form = request('datetime');
        // $day = request('day');

        $datestring = strtotime($date_from_form);
        $timelogged_timestamp_string = Carbon::parse($date_from_form);
        // $time = strtotime($time);

        // $date = $day + $time;
        //converting the datestring to the format of timelogged
        $timelogged = date('D, M d, Y g:i A', $datestring);

        $timelogged_timestamp = Carbon::parse($date_from_form, 'UTC');

        $post->pee = $pee;
        $post->poop = $poop;
        $post->timelogged = $timelogged;
        $post->timelogged_timestamp = $timelogged_timestamp;
        $post->save();

        return redirect('/')->with('status', 'record updated');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {

        //Creates a new post and requests the array passed in and saves it to the db
        //IMPORTANT: BE EXPLICIT! only pass the fields you are comfortable submitted to the server
        // Post::create(request(['poop','pee']));

        $this->validate(request(), [
            //edit these to coressponding user fields
            'poop' => 'required',

            //must have at the front be a number and be 11 digits
            'pee' => 'required',

        ]);

        $post = new Post;
        //Create a new post using the request data
        $post->poop = request('poop');

        $post->pee = request('pee');

        // var_dump($post->poop);
        // var_dump($post->pee);

        // if(request('pee') == 'on'){
        // 	$post->pee = 1;

        // }
        // else
        // 	$post->pee = 0;

        // if($post->poop = 'on' ){

        // 	$post->poop = 1;
        // }
        // else
        // 	$post->poop = 0;

        $dt = Carbon::now(new DateTimeZone('America/New_York'));
        $post->user_id = \Auth::user()->id;
        $post->timelogged = $dt->toDayDateTimeString();
        $post->timelogged_timestamp = $dt;

        // var_dump($post);
        $post->save();
        // // Save it to the database

        // // And then redirect to the homepage
        return redirect('/')->with('status', 'record logged');
    }
}
