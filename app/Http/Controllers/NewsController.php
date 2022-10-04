<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function hello()
    {
        return view('news.hello');
    }

    public function category()
    {
        /*return view('news.category');*/
        $category = $this->getCategory();
        return view('news.category', [
            'categoryList' => $category
        ]);
    }

    public function index()
    {
        $news = News::query()->paginate(10);
        //list all news
        return view('news.index', [
            'newsList' => $news
        ]);
    }

    public function show(News $news)
    {
        return view('news.show', [
            'news' => $news
        ]);

    }

}
