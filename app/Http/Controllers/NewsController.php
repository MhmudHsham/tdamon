<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

/**
 * Description of NewsController
 *
 * @author mhmudhsham
 */
class NewsController extends Controller {

    public function index(Request $request) {
        $news_count = News::get()->count();
        $news = News::orderBy("id", "desc")->limit(1)->get();
        if ($request->ajax()) {
            $offset = $request->offset;
            $news = News::orderBy("id", "desc")->limit(1)->offset($offset)->get();
            $view = view("front.news.render", compact('news'))->render();
            echo $view;
            die();
        }
        $other_news = News::orderBy("id", "asc")->limit(6)->get();
        return view("front.news.index", compact('news', 'news_count', 'other_news'));
    }

    public function details($id, $title) {
        $details = News::find($id);
        $other_news = News::where("id", " != ", $details->id)->get();
        return view("front.news.details", compact('details', 'other_news'));
    }

}
