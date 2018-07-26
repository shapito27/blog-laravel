<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Category;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Dashboard
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function dashboard()
    {
        return view('admin.dashboard',
            [
                'categories' => Category::lastCategories(5),
                'articles' => Article::lastArticles(5),
                'countCategories' => Category::count(),
                'countArticles' => Article::count(),
            ]);
    }
}
