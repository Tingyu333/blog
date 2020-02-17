<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use App\Service\ArticleService;

class ArticleController extends Controller
{

    protected $articleService;

    public function __construct(ArticleService $articleService)
    {
        $this->articleService = $articleService;
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function article($id)
    {
        $data = $this->articleService->article($id);
        return view('/article', compact('data'));
    }

    public function user()
    {
        $data = $this->articleService->user();
        return view('/user', compact('data'));
    }

    public function create()
    {
        return view('/create'); 
    }

    public function store(Request $request)
    {           
        if($request->name == null || $request->title == null || $request->content == null) {
            return back()->with([
                'flash_message' => '新增失敗'
            ]);
        }
        $this->articleService->store($request);
        return redirect('/user');
    }

    public function edit($id)
    {
        $data = $this->articleService->article($id);
        return view('/edit', compact('data'));         
    }

    public function update(Request $request, $id)
    {
        if($request->name == null || $request->title == null || $request->content == null) {
            return back()->with([
                'flash_message' => '新增失敗'
            ]);
        }      
        $this->articleService->update($request, $id);
        return redirect('/user');
    }

    public function delete(Request $request, $id)
    {
        $this->articleService->delete($request, $id);
        return redirect('/user');
    }

    public function admin()
    {
        $data = $this->articleService->admin();
        return view('/admin', compact('data'));
    }

}
