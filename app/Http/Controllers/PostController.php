<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post; 
use Carbon\Carbon;

use DateTimeZone; 



class PostController extends Controller
{

	 public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index(){


   	//db call to get all the rows in the tasks table using Eloquent model
		$posts = Post::all(); 
		// echo '<pre>';
		// var_dump($posts); 
		// echo '</pre>';
	return view('posts.index', compact('posts')); 


    }

   public function show(Post $post){ 


		return view('posts.post', compact('post'));

	}

  public function create(){

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
			'pee' => 'required'
			

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
		$post->timelogged = $dt->toDayDateTimeString();

		// var_dump($post); 
		$post->save(); 
		// // Save it to the database 

		// // And then redirect to the homepage
		return redirect('/');

	}


}
