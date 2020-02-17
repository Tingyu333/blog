<?php

namespace App\Service;

use App\Repository\ArticleRepository;


class ArticleService
{
    protected $articleRepository;

    public function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }


    public function user()
    {
        return $this->articleRepository->user();                     
    }

    public function store($request)
    {        
        return $this->articleRepository->store($request);
    }

    public function update($request, $id)
    {   
        return $this->articleRepository->update($request, $id);
    }

    public function delete($request, $id)
    {
        return $this->articleRepository->delete($request, $id);
    }

    public function article($id)
    {
        return $this->articleRepository->article($id);
    }

    public function admin()
    {
        return $this->articleRepository->admin();
    }
    
}
