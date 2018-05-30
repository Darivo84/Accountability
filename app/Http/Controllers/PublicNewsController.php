<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class PublicNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news_posts = News::orderBy('created_at', 'desc')->paginate(4);

        return view('public.news.index', compact('news_posts'));
    }

    public function show($id)
    {
        $post = News::findOrfail($id);

        // get previous user id
        $previous = News::where('id', '<', $post->id)->max('id');

        // get next user id
        $next = News::where('id', '>', $post->id)->min('id');

        return view('public.news.single', compact('post'))->with('previous', $previous)->with('next', $next);
    }


}
