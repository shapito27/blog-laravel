<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * @param string $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function category(string $slug)
    {
        $category = Category::where('slug', $slug)->first();

        return view('blog.category', [
            'category' => $category,
            'articles' => $category->articles()->where('published', 1)->paginate(10)
        ]);
    }

    /**
     * @param string $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function article(string $slug)
    {
        $article = Article::where('slug', $slug)->first();

        return view('blog.article', [
            'article' => $article,
        ]);
    }
}
