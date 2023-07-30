<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrainArticle;
use Illuminate\Support\Facades\Storage;

class TrainArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $article_data = TrainArticle::orderBy('created_at','desc')->paginate(10);
        return view('admin.adminarticle')->with('article_data', $article_data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.adminarticleCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $news = new TrainArticle;
       
        if($request->hasFile('article_head_img') && $request->file('article_head_img')->isValid()){
            $head_img_file = $request->file('article_head_img')->store('article_head_img', 'public');
            $news->article_head_img = $head_img_file;
        }
        
        $news->author_name = $request->author_name;
        $news->author_email = $request->author_email;
        $news->ad_num = $request->ad_num;
        
        $news->article_title = $request->article_title;
        $news->article_body = $request->article_body;
        $news->save();

        return redirect('/admin/trainarticle');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = TrainArticle::find($id);
        return view('admin.adminarticleEdit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        
        $article = TrainArticle::find($id);

        // Handle the image update
        if ($request->hasFile('article_head_img')) {

            // Validate the file (e.g., file format and size)
            // Store the uploaded file
            $head_img_file = $request->file('article_head_img')->store('article_head_img', 'public');

            // Delete the old image (optional)
            if ($article->article_head_img) {
                Storage::disk('public')->delete($article->article_head_img);
            }

            // Update the image path in the database
            $article->article_head_img = $head_img_file;
        }

    
        $article->article_title = $request->article_title;
        $article->article_body = $request->article_body;
        $article->save();

        return redirect('/admin/trainarticle');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = TrainArticle::find($id);
        
        if($data->article_head_img){
            Storage::disk('public')->delete($data->article_head_img);

        }

        $data->delete();

        return redirect('/admin/trainarticle');
    }

    public function searcharticle(Request $request){
        $searchq = $request->input('news-search');

        $view_data = TrainArticle::where('article_title', 'like','%'.$searchq.'%')
                    ->orwhere('author_name', 'like','%'.$searchq.'%')
                    ->orwhere('created_at', 'like','%'.$searchq.'%')->get();

        return view('pages.trainarticle')->with('view_data', $view_data); 
    }
}
