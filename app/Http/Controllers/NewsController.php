<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    // 全件表示
    public function show() {
        $news = News::all();
        return view('admin.admin', ['news' => $news]);
    }

    // 登録
    public function add() {
        return view('admin.news.add');
    }

    // 登録処理
    public function add_next(Request $request) {
        $news = new News;
        $news->title = $request->input('title');
        $news->content = $request->input('content');
        $news->release_date = $request->input('date');
        $news->save();
        $news = News::all();
        return view('admin.admin', ['news' => $news]);
    }

    // 編集
    public function edit($id) {
        $news = News::find($id);
        return view('admin.news.edit', ['news' => $news]);
    }

    // 編集処理
    public function edit_next(Request $request) {
        $news = News::find($request->input('id'));
        $news->title = $request->input('title');
        $news->content = $request->input('content');
        $news->release_date = $request->input('date');
        $news->save();
        $news = News::all();
        return view('admin.admin', ['news' => $news]);
    }

    // 詳細
    public function delete($id) {
        News::destroy($id);
        $news = News::all();
        return view('admin.admin', ['news' => $news]);
    }

    // 詳細
    public function detail($id) {
        $news = News::find($id);
        return view('admin.news.detail', ['news' => $news]);
    }
}
