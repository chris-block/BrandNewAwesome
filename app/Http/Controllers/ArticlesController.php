<?php

namespace App\Http\Controllers;

use App\Article;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use Carbon\Carbon;

// use Illuminate\Http\Request;

use Request;

class ArticlesController extends Controller
{
    
	public function index()
	{
		// $articles  = Article::all();
		$articles  = Article::latest('published_at')->published()->get();

		return view('articles.index', compact('articles'));
	}

	public function show($id)
	{

		$article = Article::findOrFail($id);

		dd($article->created_at->month);

		return view('articles.show', compact('article'));
	}

	public function create()
	{
		return view('articles.create');
	}

	public function store()
	{
		$input = Request::all();

		//need published_at field
		$input['published_at'] = Request::get('published_at');

		// $input = Request::get('body');
		 
		Article::create($input);


		return redirect('articles');
	}

}
