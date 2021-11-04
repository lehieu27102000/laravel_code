<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Symfony\Component\ErrorHandler\Debug;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return 'hieu dep trai';
        // $articles = Article::all();
        $articles = Article::paginate(3);
        // $articles = Article::getList();
        Log::debug($articles);
        // echo $articles;
        // echo $articles;
        return view('Articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
       
        return view('Articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticleRequest $request)
    {
        $article = new Article;
        $article->title = $request->title;
        $article->content = $request->content;
        $article->note = $request->note;
        $article->save();
        return redirect('blogs');
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $blog = Article::find($id);
        $html = view('Articles.view', compact('blog'))->render();
        return response()->json(array('html' => $html, 'status' => 'success'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Article::find($id);
        // echo $blog->title;

        return view('Articles.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        // dd($request);
        $blog = Article::find($id);
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->save();
        return redirect('blogs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!$id) {
            return response()->json(array('message' => 'Xóa không thành công', 'status' => 'error'));
        }
        $blog = Article::findOrFail($id);
        if (!$blog) {
            return response()->json(array('message' => 'Xóa không thành công', 'status' => 'error'));
        }
        $blog->delete();
        return response()->json(array('message' => 'Xóa thành công', 'status' => 'success'));
    }
}
