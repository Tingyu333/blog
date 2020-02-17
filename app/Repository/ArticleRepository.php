<?php

namespace App\Repository;

use App\User;
use App\Article;
use Auth;

class ArticleRepository
{
    
    public function user()
    {    	
        return Article::where('name', '=', Auth::user()->name)->get();             
    }

    public function store($request)
    {           
        return Article::create([
            'name' => $request->name,
            'title' => $request->title,
            'content' => $request->content,
        ]);
    }

    public function update($request, $id)
    {           
        return Article::find($id)->update([
            'name' => $request->name,
            'title' => $request->title,
            'content' => $request->content,
        ]); 
    }

    public function delete($request, $id)
    {      
        return Article::find($id)->delete();
    }

    public function article($id)
    {
        return Article::find($id);
    }

    public function admin()
    {
        return User::where('identity', '=', NULL)->get();
    }

}
